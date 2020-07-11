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
        $classroom = Classroom::find(21);

        // All student score totals
        $studentTotalScores = $classroom->currentStudents()->map(function($student){
            return $student->recentTotalScore();
        });

        return view('schoolAdmin.dashboard', [
            'classroom' => Classroom::find(21),
            'teachers' => collect([]),
            'students' => collect([]),
        ]);
    }
}
