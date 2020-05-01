<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strand extends Model
{
    //
    public function substrands()
    {
        return $this->hasMany('App\Substrand');
    }
}
