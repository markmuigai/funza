<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Fetch outcome results of a student
    public function outcomeResults()
    {
        return $this->hasMany('App\OutcomeResult', 'student_id');
    }

    /**
     * Fetch school of a student
     */
    public function school()
    {
        return $this->belongsToMany('App\School');
    }

    /**
     * Fetch classes of a student
     */
    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom');
    }

    /**
     * Fetch a students current class 
     */
    public function currentClass()
    {
        return $this->classrooms()->wherePivot('status', true)->first();
    }

    // Fetch outcome results for a substrand
    public function outcomeResultsForSubstrand($substrand_id)
    {
        return $this->outcomeResults->filter(function($outcome_result) use($substrand_id){
            return $outcome_result->outcome->substrand->id == $substrand_id;
        });
    }

    // Get assessment counter for a substrand
    public function assessmentCounter($substrand_id)
    {
        return $this->outcomeResultsForSubstrand($substrand_id)->count()/
                Substrand::find($substrand_id)->outcomes->count();
    }

}
