<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substrand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    // Get the outcomes of a substrand
    public function outcomes()
    {
        return $this->hasMany('App\Outcome');
    }

    // Get the lesson plans of s substrand
    public function lessonPlans()
    {
        return $this->hasOne('App\LessonPlan');
    }
}
