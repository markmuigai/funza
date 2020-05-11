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

    // Get the outcomes of a substrand
    public function outcomes()
    {
        return $this->hasMany('App\Outcome');
    }

    // Get the lesson plans of s substrand
    public function lessonPlans()
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
            return $student->assessmentCounter($this->id);
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
}
