<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Fetch outcome results of a student
    public function outcomeResults()
    {
        return $this->hasMany('App\Outcome');
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
}
