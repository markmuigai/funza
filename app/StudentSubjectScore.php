<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSubjectScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'student_id', 'subject_id', 'score'];
}
