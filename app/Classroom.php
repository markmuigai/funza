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
        return $this->belongsToMany('App\User')->oldest('name');
    }

    // Fetch a clasrooms subject
    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    // Fetch students of a class
    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
