<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomStrandScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'classroom_id', 'strand_id', 'score'];
}
