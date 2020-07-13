<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    /**
     * Fetch teachers of a school
     */
    public function teachers()
    {
        return $this->users->filter(function ($user) {
            return $user->schoolAdministration($this)->hasRole('teacher');
        })->sortByDesc('created_at');
        ;
    }

    /**
     * Fetch students of a school
     */
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }

    /**
     * Get the associated grade
     */
    public function grades()
    {
        return $this->belongsToMany('App\Grade', 'grade_schools');
    }

    /**
     * Get the associated school grade pivot
     */
    public function GradeSchools()
    {
        return $this->hasMany('App\GradeSchool', 'school_id');
    }
}
