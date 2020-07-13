<?php

namespace App\Http\Controllers\schoolAdmin;

use App\Subject;
use App\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * School Admin Dashboard
     */
    public function dashboard()
    {
        // Get auth user
        $user = auth()->user();

        // Fetch classroom
        if(auth()->user()->schools->first()->id == 1){
            $classroom = Classroom::find(21);

            // All student score totals
            $studentTotalScores = $classroom->currentStudents()->map(function($student){
            return $student->recentTotalScore();
        });
        }elseif(auth()->user()->schools->first()->students->isNotEmpty()){
            App\Classroom::has('students')->first();
        }else{
            $classroom = null;
        }

        return view('schoolAdmin.dashboard', [
            'classroom' => $classroom,
            'teachers' => collect([]),
            'students' => collect([]),
        ]);
    }
}
