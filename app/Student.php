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

    /**
     * Fetch a students current grade 
     */
    public function currentGrade()
    {
        return $this->classrooms()->wherePivot('status', true)->first()->grade;
    }

    /**
     * Fetch all outcome results for a substrand
     */
    public function allOutcomeResultsForSubstrand($substrand_id)
    {
        return $this->outcomeResults->filter(function($outcome_result) use($substrand_id){
            return $outcome_result->outcome->substrand->id == $substrand_id; 
        });
    }

    /**
     * Get how many assessments have been made for a substrand
     */
    public function assessmentsCountForSubstrand($substrand_id)
    {
        return $this->allOutcomeResultsForSubstrand($substrand_id)->pluck('count')->unique()->max();
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
        return $this->allOutcomeResultsForSubstrand($substrand_id)->count()/
                Substrand::find($substrand_id)->outcomes->count();
    }

    /**
     * Get a students score for a substrand
     */
    public function rawSubstrandScores($substrand_id)
    {
        // Fetch Number of assessments done for a substrand
        $assessment_count = $this->assessmentsCountForSubstrand($substrand_id);

        // fetch the number of outcomes for the substrand
        $outcome_count = Substrand::find($substrand_id)->outcomes->count();

        // Calculate the maxumum score
        $max_score = $outcome_count * 5 * $assessment_count;

        // Array of assessment totals
        $assessment_results = collect();

        // Iterate through all assessments
        for($i=1; $i<=$assessment_count; $i++){
            // Return array of the scores
            $outcome_scores =  $this->outcomeresultsForSubstrand($substrand_id, $i)
                ->map(function($item){
                    return $item->outcomeOption->score;
                });

            // Fetch the total score 
            $score_total = $outcome_scores->sum();

            // Append score to assessment results array
            $assessment_results->push($score_total);
        }

        return $assessment_results;
    }

    /**
     * Fetch total average score for a substrand
     */
    public function averageSubstrandScore($substrand_id)
    {
        // Fetch Number of assessments done for a substrand
        $assessment_count = $this->assessmentsCountForSubstrand($substrand_id);

        // fetch the number of outcomes for the substrand
        $outcome_count = Substrand::find($substrand_id)->outcomes->count();

        // Calculate the maxumum score
        $max_score = $outcome_count * 5 * $assessment_count;

        return ($this->rawSubstrandScores($substrand_id)->sum()/100)*100;
    }
}
