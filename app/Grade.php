<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * Subjects for a grade
     */
    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

    /**
     * Get the associated grade
     */
    public function schools()
    {
        return $this->belongsToMany('App\School','grade_schools');
    }

    // Classrooms of a grade for a school
    public function classrooms($school)
    {
        return $school->GradeSchools->where('grade_id', $this->id)->first()->classrooms;

    }

    /**
     * Get the associated GradeSubject pivot table
     */
    public function gradeSchool()
    {
        return $this->hasMany('App\GradeSchool');
    }

    /**
     * Fetch substrand performance percentage
     */
    public function substrandScore($substrand_id)
    {
        // Fetch substrand
        $substrand = Substrand::find($substrand_id);
        
        // Calculate the maximum raw score 
        $class_totals = $this->classrooms(auth()->user()->schools()->first())->map(function($classroom) use($substrand){
            return $classroom->substrandScore($substrand->id);
        });

        // Check if a substrand has been assessed for all students
        if($class_totals->sum() == 0){
            return 0;
        }else{
            // Calculate the possible maximum percentage score 
            $possible_grade_total = $class_totals->filter()->count()*100;
            
            return $avg_substrand_score = ($class_totals->sum()/$possible_grade_total)*100;
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
