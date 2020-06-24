<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class lessonPlan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['substrand_id', 'lesson_count', 'start_date', 'end_date', 'status', 'started_on', 'ended_at', 'complete'];

    /**
     * Get the associated substrand
     */
    public function substrand()
    {
        return $this->belongsTo('App\Substrand');
    }

    /**
     * Convert date format
     */
    public function getStartDateAttribute($start_date)
    {
        return Carbon::parse($start_date)->toFormattedDateString();
    }

    /**
     * Convert date format
     */
    public function getEndDateAttribute($end_date)
    {
        return Carbon::parse($end_date)->toFormattedDateString();
    }
}
