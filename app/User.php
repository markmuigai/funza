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

    /**
     * Currently, one school per user
     */
    public function school()
    {
        $this->schools->first();
    }
}
