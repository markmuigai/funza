<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'email', 'name'
    ];

    protected $table = 'parents';

    /**
     * Change name to uppercase
     */
    public function getNameAttribute($name)
    {
        return ucfirst(strtolower($name));
    }
}
