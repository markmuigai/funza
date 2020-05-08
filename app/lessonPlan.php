<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lessonPlan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['substrand_id', 'start_date', 'end_date', 'status', 'started_on', 'ended_at', 'complete'];
}
