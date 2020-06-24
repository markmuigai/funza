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

    // Fetch a strands for a subject
    public function strands()
    {
        return $this->hasMany('App\Strand');
    }

    // Fetch substrands for a topic
    public function substrands()
    {
        return $this->hasManyThrough('App\Substrand', 'App\Strand');
    }

    // Fetch substrands for a topic
    public function lessonPlans()
    {
        return $this->substrands->map(function($substrand){
            return $substrand->lessonPlan;
        });
    }
}
