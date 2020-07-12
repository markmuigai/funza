<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutcomeOption extends Model
{
    /**
     * Get the associated outcome
     */
    public function outcome()
    {
        return $this->belongsTo('App\Outcome');
    }
}
