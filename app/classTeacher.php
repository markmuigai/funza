<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassTeacher extends Model
{
    /**
     * Fetch the subject being taught by a teacher for a certain class
     */
    public function subjects()
    {
        return $this->hasMany('App\Subject')->oldest('name');
    }
}
