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
     * Fetch substrand performance 
     */
    public function substrandScores()
    {
        return $this->hasMany('App\ClassroomSubstrandScore', 'classroom_id');
    }

    /**
     * Fetch strand performance
     */
    public function strandScores()
    {
        return $this->hasMany('App\ClassroomStrandScore', 'classroom_id');
    }

    /**
     * Fetch subject performance 
     */
    public function subjectScores()
    {
        return $this->hasMany('App\ClassroomSubjectScore', 'classroom_id');
    }

    /**
     * Fetch total score
     */
    public function totalScore()
    {
        return $this->hasMany('App\ClassroomTotalScore', 'classroom_id');
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
     * Fetch substrand scores based on strand
     */
    public function substrandScoresForStrand($strand)
    {
        return $strand->substrands->map(function($substrand) use($classroom){
            return $this->substrandScores->where('substrand_id', $substrand->id)->pluck('score');
        });
    }

    /**
     * 
     * generate subject performance object for charts
     */
    public function getSubjectAverageChartScores()
    {
        // Initialize collection 
        $subjectTotalScores = collect();

        foreach(Subject::all() as $subject)
        {
            $score = collect();
            $score->put('name', $subject->name);
            if($this->recentSubjectScore($subject->id)==null){
                $score->put('score', rand(50,80));
            }else{
                $score->put('score', $this->recentSubjectScore($subject->id));   
            }
            $subjectTotalScores->push($score);
        }

        return $subjectTotalScores;
    } 

    /**
     * 
     * generate subject performance object for charts
     */
    public function getSubjectChartScores()
    {
        // Initialize collection 
        $subjectTotalScores = collect();

        foreach(Subject::all() as $subject)
        {
            $scores = collect();
            $scores->put('label', $subject->name);
            $scores->put('fill', 'false');
            $scores->put('borderColor', '#3e95cd');
            
            if($this->subjectScores->where('subject_id', $subject->id)->isEmpty()){
                $i = collect();
                // Randomize figures
                foreach($this->subjectScores->where('subject_id', Subject::first()->id) as $substrandScore)
                {
                    $i->push(generateScore(40,100, 11,1));
                }
                $scores->put('data',$i);   
            }else{
                $i = collect();
                foreach($this->subjectScores->where('subject_id', $subject->id) as $substrandScore)
                {
                    $i->push($substrandScore->score); 
                }
                $scores->put('data',$i);
            }
            $subjectTotalScores->push($scores);
        }

        return $subjectTotalScores;
    } 
}
