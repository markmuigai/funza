<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutcomeResult extends Model
{
    /**
     * Attributes that are mass assignable
     */
    protected $fillable = ['student_id','outcome_id', 'score'];

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

    // Fetch outcome result for a specific outcome and student
    public static function forStudentonOutcome($student_id, $topic_id)
    {
        return OutcomeResult::whereHas('student', function($query) use($student_id){
            $query->where('id', $student_id);
        })->whereHas('outcome', function($query) use($topic_id){
            $query->where('id', $topic_id);
        })->first();
    } 
}
