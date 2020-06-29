<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * Change name to uppercase
     */
    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }
    
    /**
     * Get associated substrands
     */
    public function substrands()
    {
        return $this->hasMany('App\Substrand');
    }

    /**
     * Get associated subject
     */
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
