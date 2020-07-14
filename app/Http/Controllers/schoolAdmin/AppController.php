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
        // Get auth school
        $school = auth()->user()->schools->first();

        // Fetch classroom
        if($school->id == 1){
            $classroom = Classroom::where('name', '4A')->get()->first();

            // All student score totals
            $studentTotalScores = $classroom->currentStudents()->map(function($student){
                return $student->recentTotalScore();
            });

			$subjectAverageChartLabels = $classroom->getSubjectAverageChartScores()->pluck('name');

            $subjectAverageChartScores = $classroom->getSubjectAverageChartScores()->pluck('score');
            
            $studentScoreTotalsChart = $classroom->getStudentScoreTotalsChart();
            
        }elseif(auth()->user()->schools->first()->students->isNotEmpty()){
            $classroom = $school->assessedClassroom();

            // All student score totals
            $studentTotalScores = $classroom->currentStudents()->map(function($student){
                return $student->recentTotalScore();
            });

			$subjectAverageChartLabels = $classroom->getSubjectAverageChartScores()->pluck('name');

            $subjectAverageChartScores = $classroom->getSubjectAverageChartScores()->pluck('score');
            
            $studentScoreTotalsChart = $classroom->getStudentScoreTotalsChart();

        }else{
            $classroom = null;

            $subjectAverageChartLabels = [];

            $subjectAverageChartScores = [];
            
            $studentScoreTotalsChart = [];
        }

        return view('schoolAdmin.dashboard', [
            'classroom' => $classroom,
            'teachers' => collect([]),
            'students' => collect([]),
            'subjectAverageChartLabels' => $subjectAverageChartLabels,
            'subjectAverageChartScores' => $subjectAverageChartScores,
            'studentScoreTotalsChart' => $studentScoreTotalsChart
        ]);
    }
}
