<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomSubjectScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'classroom_id', 'subject_id', 'score'];

    /**
     * Get the associated subject
     */
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

}
