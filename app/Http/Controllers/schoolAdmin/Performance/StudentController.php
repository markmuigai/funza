<?php

namespace App\Http\Controllers\SchoolAdmin\Performance;

use App\Grade;
use App\Subject;
use App\Student;
use App\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = auth()->user()->schools->first();

        // Fetch classroom
        if($school->id == 1){
            $classroom = Classroom::where('name', '4A')->get()->first();

            $studentScoreTotalsChart = $classroom->getStudentScoreTotalsChart();

            $students = $classroom->students->paginate(10);

        }elseif(auth()->user()->schools->first()->students->isNotEmpty()){
            $classroom = $school->assessedClassroom();

            $studentScoreTotalsChart = $classroom->getStudentScoreTotalsChart();

            $students = $classroom->students->paginate(10);
        }else{
            $classroom = null;
            $students = [];
            $studentScoreTotalsChart = [];
        }

        // Fetch students of a class
        return view('schoolAdmin.performance.student.index',[
            'classroom' => $classroom,
            'grades' => Grade::all(),
            'subjects' => Subject::all(),
            'students' => $students,
            'studentScoreTotalsChart' => $studentScoreTotalsChart
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $school = auth()->user()->schools->first();

        // Fetch classroom
        if($school->id == 1){
            $classroom = Classroom::where('name', '4A')->get()->first();
        }elseif(auth()->user()->schools->first()->students->isNotEmpty()){
            $classroom = $school->assessedClassroom();
        }else{
            $classroom = null;
        }
        return view('schoolAdmin.performance.student.show', [
            'student' => $student,
            'classroom' => $classroom,
            'grades' => Grade::all(),
            'subjects' => Subject::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
