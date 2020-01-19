<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    /**
     * Subjects for a grade
     */
    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

    // Classrooms of a grade
    public function classrooms()
    {
        return $this->hasMany('App\Classroom');
    }
}
