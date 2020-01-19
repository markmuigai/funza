<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutcomeResult extends Model
{
    /**
     * Attributes that are mass assignable
     */
    protected $fillable = ['student_id','outcome_id', 'result'];

    // fetch student for the result
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
