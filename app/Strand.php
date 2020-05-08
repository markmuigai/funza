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
    
    public function substrands()
    {
        return $this->hasMany('App\Substrand');
    }
}
