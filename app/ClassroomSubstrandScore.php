<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomSubstrandScore extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'classroom_id', 'substrand_id', 'score'];

    /**
     * Get the associated substrand
     */
    public function substrand()
    {
        return $this->belongsTo('App\Substrand');
    }
}
