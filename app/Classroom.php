<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    /**
     * Fetch teachers assigned to a class
     */
    public function teachers()
    {
        // Fetch users of each classroom subject
        return $this->classroomSubjects->map(function($classroomSubject){
            return $classroomSubject->teacher;
        });
    }

    // Fetch a clasrooms subject
    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    // Fetch students of a class ever
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    public function classroomSubjects()
    {
        return $this->hasMany('App\ClassroomSubject');
    }

    // Fetch curent students of a class
    public function currentStudents()
    {
        return $this->students->filter(function($student){
            return $student->currentClass()->name == $this->name;
        });
    }

    /**
     * Fetch substrands which have been assessed
     */
    public function substrandsAssessed($strand_id)
    {
        return $this->currentStudents()->map(function($student) use($strand_id){
            return $student->substrandsAssessed($strand_id);
        })->unique();
    }

    /**
     * Check strands which have been assessed for a subject
     */
    public function strandsAssessed($subject_id)
    {
        // Fetch subject
        $subject = Subject::find($subject_id);

        // Fetch the number of assessed strands
        return $assessed_strands = $subject->strands->filter(function($strand){
            return $this->strandScore($strand->id);
        });
    }

    /**
     * Fetch subjects which have been assessed
     */
    public function subjectsAssessed()
    {
        return $this->currentGrade()->subjects->filter(function($subject){
            return $this->subjectScore($subject->id);
        });
    }

    /**
     * Fetch substrand performance percentage
     */
    public function substrandScore($substrand_id)
    {
        // Fetch substrand
        $substrand = Substrand::find($substrand_id);
        
        // Calculate the possible maximum raw score 
        $max_possible_total = $this->currentStudents()->map(function($student) use($substrand){
            return $substrand->maxScore($student->id);
        })->sum();

        // Check if a substrand has been assessed for all students
        if($max_possible_total == 0){
            return 0;
        }else{
            // Calculate the total score 
            $raw_total = $this->currentStudents()->map(function($student) use($substrand){
                return $student->averageSubstrandScore($substrand->id);
            })->sum();

            // Calculate the pssible maximum percentage score 
            $class_total = $this->currentStudents()->count()*100;
            
            return $avg_substrand_score = ($raw_total/$class_total)*100;
        }
    }

    /**
     * Fetch strand performance
     */
    public function strandScore($strand_id)
    {
        // Fetch strand
        $strand = Strand::find($strand_id);

        $substrand_scores = $strand->substrands->map(function($substrand){
            return $this->substrandScore($substrand->id);
        });

        // max score attained
        $total_score = $substrand_scores->sum();

        // Check if strand has been assessed
        if($total_score == 0){
            return 0;
        }else{
            // max possible score
            $max_score = $substrand_scores->filter()->count()*100;

            return ($total_score/$max_score)*100;
        }
    }

    /**
     * Fetch subject performance 
     */
    public function subjectScore($subject_id)
    {
        // Fetch subject
        $subject = Subject::find($subject_id);

        // strand scores
        $strand_scores = $subject->strands->map(function($strand){
            return $this->strandScore($strand->id);
        });

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
}
