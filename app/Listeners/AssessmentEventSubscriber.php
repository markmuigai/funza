<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssessmentEventSubscriber implements ShouldQueue
{
    public function onStudentAssessed($event)
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
                return $substrand->maxScore($student->id);
            })->sum();

            // Check if a substrand has been assessed for all students
            if($max_possible_total == 0){
                return 0;
            }else{
                // Calculate the total score 
                $raw_total = $classroom->currentStudents()->map(function($student) use($substrand){
                    return $student->averageSubstrandScore($substrand->id);
                })->sum();

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
            if($total_score == 0){
                return 0;
            }else{
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

        // Store scores in database
        $event->classroom->strandScores()->create([
            'strand_id' => 2,
            'score' => 80
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
            if($total_score == 0){
                return 0;
            }else{
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
    }
}
