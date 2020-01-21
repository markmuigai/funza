<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    // Fetch results for an outcome
    public function outcomeResults()
    {
        return $this->hasMany('App\OutcomeResult');
    }

    // Fetch outcomeresult for a student
    public function outcomeResultForStudent($student_id)
    {
        // Check of the outcome has any outcome results
        if(!$this->outcomeResults->isEmpty()){
            return $this->outcomeResults()->whereHas('student', function($query) use($student_id){
                $query->where('id', $student_id);
            })->first()->result;
        }
    }
}
