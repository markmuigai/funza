<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeSchool extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grade_id', 'school_id'
    ];

    protected $table = 'grade_schools';
    
    /**
     * Get the associated classrooms
     */
    public function classrooms()
    {
        return $this->hasMany('App\Classroom', 'grade_school_id');
    }
    
    /**
     * Get the associated grade
     */
    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }
}
