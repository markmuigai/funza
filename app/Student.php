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
     * Fetch substrand performance 
     */
    public function substrandScores()
    {
        return $this->hasMany('App\StudentSubstrandScore', 'student_id');
    }

    /**
     * Fetch strand performance
     */
    public function strandScores()
    {
        return $this->hasMany('App\StudentStrandScore', 'student_id');
    }

    /**
     * Fetch subject performance 
     */
    public function subjectScores()
    {
        return $this->hasMany('App\StudentSubjectScore', 'student_id');
    }

    /**
     * Fetch total score
     */
    public function totalScores()
    {
        return $this->hasMany('App\StudentTotalScore', 'student_id');
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
     * Fetch substrand performance 
     */
    public function recentSubstrandScore($substrand_id)
    {
        $score_model = $this->substrandScores->where('substrand_id', $substrand_id)->last();

        if($score_model==null){
            return null;
        }else{
            return $score_model->score;
        }
    }

    /**
     * Fetch strand performance
     */
    public function recentStrandScore($strand_id)
    {
        $score_model = $this->strandScores->where('strand_id', $strand_id)->last();

        if($score_model==null){
            return null;
        }else{
            return $score_model->score;
        }
    }

    /**
     * Fetch subject performance 
     */
    public function recentSubjectScore($subject_id)
    {
        $score_model = $this->subjectScores->where('subject_id', $subject_id)->last();

        if($score_model==null){
            return null;
        }else{
            return $score_model->score;
        }
    }

    /**
     * Fetch recent total score
     */
    public function recentTotalScore()
    {
        $score_model = $this->totalScores->last();

        if($score_model==null){
            return null;
        }else{
            return $score_model->score;
        }
    }
}
