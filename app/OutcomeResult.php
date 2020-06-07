<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutcomeResult extends Model
{
    /**
     * Attributes that are mass assignable
     */
    protected $fillable = ['student_id','outcome_id', 'outcome_option_id', 'count'];

    // fetch student for the result
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    // fetch student for the result
    public function outcome()
    {
        return $this->belongsTo('App\Outcome');
    }

    /**
     * Fetch the outcome option associated with a result
     */
    public function outcomeOption()
    {
        return $this->belongsTo('App\OutcomeOption', 'outcome_option_id');
    }

    // Fetch outcome result for a specific outcome and student
    public static function forStudentonOutcome($student_id, $topic_id)
    {
        return OutcomeResult::whereHas('student', function($query) use($student_id){
            $query->where('id', $student_id);
        })->whereHas('outcome', function($query) use($topic_id){
            $query->where('id', $topic_id);
        });
    } 

    // Fetch outcomeresults for a substrand
    public function forSubstrand($substrand)
    {
        
    }

    // Get outcome by level
    public function scopeAssessmentCount($query, $count)
    {
        return $query->where('count', $count)->get();
    }
}
