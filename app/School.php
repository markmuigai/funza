<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'telno', 'telno2', 'address', 'address2', 'county', 'subcounty'
    ];

    /**
     * School can have many users
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
