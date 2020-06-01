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

    // Fetch outcome results for a substrand and a certain assessment count
    public function outcomeResultsForSubstrand($substrand_id, $assessment_count)
    {
        return $this->outcomeResults->filter(function($outcome_result) use($substrand_id, $assessment_count){
            return $outcome_result->outcome->substrand->id == $substrand_id 
                && $outcome_result->count == $assessment_count;
        });
    }

    // Get assessment counter for a substrand
    public function assessmentCounter($substrand_id)
    {
        return $this->outcomeResultsForSubstrand($substrand_id)->count()/
                Substrand::find($substrand_id)->outcomes->count();
    }

    /**
     * Get a students score for a substrand
     */
    public function substrandScore($substrand_id, $assessment_count)
    {
        $outcome_scores =  $this->outcomeresultsForSubstrand($substrand_id, $assessment_count)->pluck('score');

        // Carry is the inital iteration value
        // Fetch the total score 
        $score_total = $outcome_scores->reduce(function ($carry, $score) {
            return $carry + $score;
        });

        // fetch the number of outcomes for the substrand
        $outcome_count = Substrand::find($substrand_id)->outcomes->count();

        // Calculate the average
        return $average_score = ($score_total/($outcome_count*5))*100;
    }
}
