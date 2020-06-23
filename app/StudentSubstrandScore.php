<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSubstrandScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'student_id', 'substrand_id', 'score'];
}
