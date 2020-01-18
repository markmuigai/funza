<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    // Fetch topics of a subject
    public function topics()
    {
        return $this->hasMany('App\Topic');
    }

    // Grades for a subject
    public function grades()
    {
        return $this->belongsToMany('App\Grade');
    }
}
