<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Substrand extends Model
{
    // Ftech the outcomes of a substrand
    public function outcomes()
    {
        return $this->hasMany('App\Outcome');
    }
}
