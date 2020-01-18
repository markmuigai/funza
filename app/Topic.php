<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    // Fetch the subject a topic belongs to

    // Fetch the learning outcomes of a topic
    public function outcomes()
    {
        return $this->hasMany('App\Outcome');
    }

}
