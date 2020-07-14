<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassroomSubject extends Pivot
{
    //specify table
    protected $table = 'classroom_subject';

    // Fetch classroom from pivot
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }

    // Fetch Subject from pivot
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    // Fetch teacher assigned to a classroom subject
    public function teacher()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
