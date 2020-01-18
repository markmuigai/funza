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
}
