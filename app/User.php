<?php

namespace App;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Fetch classSubject pivot assigned to a teacher
     */
    public function classroomSubject()
    {
        return $this->hasMany('App\classroomSubject');
    }

    /**
     * School can have many users
     */
    public function schools()
    {
        return $this->belongsToMany('App\School');
    }

    /**
     * Get the schoolAdministration pivot instance as a model instance
     *
     */
    public function schoolAdministration($school)
    {
        return SchoolUser::where('user_id', $this->id)
                                ->where('school_id', $school->id)
                                ->first();
    }

    // Fetch subjects teaching for a certain class 
    public function subjectsForClass($class_id)
    {
        // Fetch classroom subject pivot instance
        $classroomSubjects =  $this->classroomSubject()->where('classroom_id', $class_id)->get();

        return $classroomSubjects->map(function($classroomSubject){
            return $classroomSubject->subject;
        });
    }
}
