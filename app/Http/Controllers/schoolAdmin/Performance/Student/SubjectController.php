<?php

namespace App\Http\Controllers\SchoolAdmin\Performance\Student;

use App\Subject;
use App\Student;
use App\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(Student $student, Subject $subject)
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

        // Fetch students of a class
        return view('schoolAdmin.performance.student.subject.show',[
            'student' => $student,
            'subject' =>  $subject,
            // 'classroom' => $classroom
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
