<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substrand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Change name to uppercase
     */
    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }

    /**
     * Fetch the associated strand
     */
    public function strand()
    {
        return $this->belongsTo('App\Strand');
    }
    
    // Get the outcomes of a substrand
    public function outcomes()
    {
        return $this->hasMany('App\Outcome');
    }

    // Get the scores of a substrand
    public function studentSubstrandScores()
    {
        return $this->hasMany('App\studentSubstrandScores');
    }

    // Get the lesson plans of s substrand
    public function lessonPlan()
    {
        return $this->hasOne('App\LessonPlan');
    }

    // Get the outcome results
    public function outcomeResults()
    {
        return $this->hasManyThrough('App\OutcomeResult', 'App\Outcome', 'substrand_id', 'outcome_id');
    }

    // Get outcome results for a student
    public function outcomeResultsforStudent($student_id)
    {
        return $this->outcomeResults->filter(function($outcome_result) use($student_id) {
            return $outcome_result->student_id == $student_id;
        });
    }

    // Get count of assessment
    public function assessmentCounter($student_id)
    {
        return $this->outcomeResultsforStudent($student_id)->count()/
                $this->outcomes->count();
    }

    // Get students who have not been assessed for assessment $count
    public function studentsForAssessmentCounter($count, $students)
    {
        $students_for_count = collect();

        foreach($students as $student)
        {
            if($student->assessmentCounter($this->id) == 1){
                
                $students_for_count->merge('hey');
            }
        }
        
        return $students_for_count;
    }

    // Get assessment count
    public function assessmentCount($students)
    {        
        // Get an array of unique values of number of times 
        // students have been assessed for a substrand
        $assessment_counter_array =  $students->map(function($student){
            return $student->assessmentsCountForSubstrand($this->id);
        })->unique();

        // Get the maximum number of assessments for a student
        $max = $assessment_counter_array->max();

        // Get the number of elements in the array
        $count = $assessment_counter_array->count();

        if($max == 0){ // No student has been assessed
            return 1;
        }elseif($count > 1 && $max > 0){ // Not all students have been assessed for the max value
            return $max;
        }elseif($count == 1 && $max > 0){ // All students have been assessed for the max value
            return $max+1;
        }
    }

    // Get completion percentage
    public function completion($count)
    {
        
        // Number of students wno have been assessed for a certain level
        // Divide by Total number of students
    }

    /**
     * Maximum possible score
     */
    public function maxScore($student_id)
    {
        // Fetch Student
        $student = Student::find($student_id);

        // Fetch Number of assessments done for a substrand
        $assessment_count = $student->assessmentsCountForSubstrand($this->id);

        // Return scores if substrand has been assessed atleast once 
        if(is_null($assessment_count)){
            return 0;
        }else{
            // fetch the number of outcomes for the substrand
            $outcome_count = $this->outcomes->count();

            // Calculate the maxumum score
            return $max_score = $outcome_count * 5 * $assessment_count;
        }
    }
    
}
