<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentStrandScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'student_id', 'strand_id', 'score'];
}
