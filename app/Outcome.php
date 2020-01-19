<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    // Fetch results for an outcome
    public function outcomeResults()
    {
        return $this->hasMany('App\OutcomeResult');
    }
}
