<?php

namespace App\Listeners;

use App\Student;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssessmentEventSubscriber implements ShouldQueue
{
    public function onStudentAssessed($event)
    {
        foreach($event->students as $student_id)
        {
            $student = Student::find($student_id);

            $substrand = $event->substrand;
    
            $strand = $substrand->strand;
    
            $subject = $strand->subject;
    
            /**
             * Fetch substrand performance percentage
             */
            // Fetch Number of assessments done for a substrand
            $assessment_count = $student->assessmentsCountForSubstrand($substrand->id);

            // fetch the number of outcomes for the substrand
            $outcome_count = $substrand->outcomes->count();

            // Calculate the maxumum score
            $max_score = $outcome_count * 5 * $assessment_count;
    
            // Store scores in database
            $student->substrandScores()->create([
                'substrand_id' => $event->substrand->id,
                'score' => ($student->rawSubstrandScores($substrand->id)->sum()/$max_score)*100
            ]);
    
            /**
             * Fetch strand performance
             */
            $substrand_scores =  $strand->substrands->map(function($substrand) use($student){
                return $student->substrandScores->where('substrand_id', $substrand->id)->pluck('score');
            })->flatten();

            // max score attained
            $total_score = $substrand_scores->sum();

            // Check if strand has been assessed
            if($total_score !== 0){
                // max possible score
                $max_score = $substrand_scores->count()*100;
                    
                // Store scores in database
                $student->strandScores()->create([
                    'strand_id' => $strand->id,
                    'score' => ($total_score/$max_score)*100
                ]);
            }
    
            /**
             * Fetch subject performance 
             */
            // strand scores
            $strand_scores =  $subject->strands->map(function($strand) use($student){
                return $student->strandScores->where('strand_id', $strand->id)->pluck('score');;
            })->flatten();

            // max score attained
            $total_score = $strand_scores->sum();

            // Check if strand has been assessed
            if($total_score !== 0){
                // max possible score
                $max_score = $strand_scores->filter()->count()*100;

                // Store scores in database
                $student->subjectScores()->create([
                    'subject_id' => $subject->id,
                    'score' => ($total_score/$max_score)*100
                ]);   
            }

            /**
             * Fetch total student score
             */
            $subject_scores =  $student->subjectScores->pluck('score');

            // max score attained
            $total_score = $subject_scores->sum();

            // Check if strand has been assessed
            if($total_score !== 0){
                // max possible score
                $max_score = $strand_scores->filter()->count()*100;

                // Store scores in database
                $student->totalScores()->create([
                    'score' => ($total_score/$max_score)*100
                ]);   
            }
        }
    }

    public function onClassAssessed($event)
    {
        $classroom = $event->classroom;

        $substrand = $event->substrand;

        $strand = $substrand->strand;

        $subject = $strand->subject;

        /**
         * Fetch substrand performance percentage
         */
        function getSubstrandScore($event)
        {          
            $classroom = $event->classroom;

            $substrand = $event->substrand;

            // Calculate the possible maximum raw score 
            $max_possible_total = $classroom->currentStudents()->map(function($student) use($substrand){
                return $student->substrandScores->where('substrand_id', $substrand->id)->pluck('score');
            })->flatten()->count()*100;

            // Check if a substrand has been assessed for all students
            if($max_possible_total !== 0){
                // Fetch number of assessments made for a substrand for the whole class
                $raw_total =  $classroom->currentStudents()->map(function($student) use($substrand){
                    return $student->substrandScores->where('substrand_id', $substrand->id)->pluck('score');
                })->flatten()->sum();

                // Calculate the pssible maximum percentage score 
                $class_total = $classroom->currentStudents()->count()*100;
                
                return $avg_substrand_score = ($raw_total/$class_total)*100;
            }
        }

        // Store scores in database
        $event->classroom->substrandScores()->create([
            'substrand_id' => $event->substrand->id,
            'score' => getSubstrandScore($event)
        ]);

        /**
         * Fetch strand performance
         */
        function getStrandScore($event)
        {
            $classroom = $event->classroom;
    
            $substrand = $event->substrand;

            $strand = $substrand->strand;

            // dd($classroom->substrandScores->where('substrand_id', $substrand->id)->pluck('score')->sum());

            $substrand_scores =  $strand->substrands->map(function($substrand) use($classroom){
                return $classroom->substrandScores->where('substrand_id', $substrand->id)->pluck('score');
            })->flatten();

            // max score attained
            $total_score = $substrand_scores->sum();

            // Check if strand has been assessed
            if($total_score !== 0){
                // max possible score
                $max_score = $substrand_scores->count()*100;

                return ($total_score/$max_score)*100;
            }
        }

        // Store scores in database
        $event->classroom->strandScores()->create([
            'strand_id' => $strand->id,
            'score' => getStrandScore($event)
        ]);

        /**
         * Fetch subject performance 
         */
        function getSubjectScore($event)
        {
            $classroom = $event->classroom;

            $substrand = $event->substrand;

            $strand = $substrand->strand;

            $subject = $strand->subject;

            // strand scores
            $strand_scores =  $subject->strands->map(function($strand) use($classroom){
                return $classroom->strandScores->where('strand_id', $strand->id)->pluck('score');;
            })->flatten();

            // max score attained
            $total_score = $strand_scores->sum();

            // Check if strand has been assessed
            if($total_score !== 0){
                // max possible score
                $max_score = $strand_scores->filter()->count()*100;

                return ($total_score/$max_score)*100;
            }
        }

        // Store scores in database
        $event->classroom->subjectScores()->create([
            'subject_id' => $subject->id,
            'score' => getSubjectScore($event)
        ]);
    }


    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            'App\Events\StudentAssessed',
            'App\Listeners\AssessmentEventSubscriber@onStudentAssessed'
        );
        
        $events->listen(
            'App\Events\ClassAssessed',
            'App\Listeners\AssessmentEventSubscriber@onClassAssessed'
        );
    }
}
