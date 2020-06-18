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
     * Fetch substrands which have been assessed
     */
    public function substrandsAssessed($strand_id)
    {
        return Strand::find($strand_id)->substrands->filter(function($substrand){
            return $this->allOutcomeResultsForSubstrand($substrand->id)->isNotEmpty();
        });
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

        // Calculate the maxumum score
        $max_score = Substrand::find($substrand_id)->maxScore($this->id);

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
     * Fetch substrand percentages
     */
    public function assessmentScoresPercentage($substrand_id)
    {
        // fetch the number of outcomes for the substrand
        $outcome_count = Substrand::find($substrand_id)->outcomes->count();

        // maximum score for each assessment
        $max_score = $outcome_count*5;

        return $this->rawSubstrandScores($substrand_id)->map(function($score) use($max_score){
            return ($score/$max_score)*100;
        });
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

        return ($this->rawSubstrandScores($substrand_id)->sum()/$max_score)*100;
    }

    /**
     * Fetch strand scores for a student
     */
    public function strandScore($strand_id)
    {
        // Check if a strand has been assessed
        if($this->substrandsAssessed($strand_id)->isEmpty()){
            return 0;
        }else{
            $strand = Strand::find($strand_id);

            // Maximum score
            $max_score = $this->substrandsAssessed($strand_id)->count() * 100;
    
            // strand total score
            $raw_strand_score = $this->substrandsAssessed($strand_id)->map(function($substrand){
                return $this->averageSubstrandScore($substrand->id);
            })->sum();
    
            return $percentage_strand_score = ($raw_strand_score/$max_score) * 100;
        }
    }

    /**
     * Fetch subject score
     */
    public function subjectScore($subject_id)
    {
        // Check if a subject has been assessed
        if($this->strandsAssessed($subject_id)->isEmpty()){
            return 0;
        }else{
            // Fetch subject
            $subject = Subject::find($subject_id);

            // Maximum score
            $max_score = $this->strandsAssessed($subject_id)->count() * 100;

            // strand total score
            $raw_subject_score = $this->strandsAssessed($subject_id)->map(function($strand){
                return $this->strandScore($strand->id);
            })->sum();

            // Return the percentage
            return $percentage_subject_score = ($raw_subject_score/$max_score) * 100;
        }
    }

    /**
     * Fetch the student overall score
     */
    public function totalScore()
    {
        // Check if a subject has been assessed
        if($this->subjectsAssessed()->isEmpty()){
            return 0;
        }else{
            // Max possible score
            $max_score = $this->subjectsAssessed()->count() * 100;

            // Total raw student score
            $raw_score = $this->currentGrade()->subjects->map(function($subject){
                return $this->subjectScore($subject->id);
            })->sum();

            // Return the total score percentage
            return $percentage_total_score = ($raw_score/$max_score)*100;
        }
    }
}
