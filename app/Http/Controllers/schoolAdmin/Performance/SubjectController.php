<?php

namespace App\Http\Controllers\SchoolAdmin\Performance;

use App\Grade;
use App\Subject;
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
        $school = auth()->user()->schools->first();

                // Fetch classroom
        if($school->id == 1){
            $classroom = Classroom::where('name', '4A')->get()->first();

            // All student score totals
            $subjectChartScores = $classroom->getSubjectChartScores([1,2]);
        }elseif(auth()->user()->schools->first()->students->isNotEmpty()){
            $classroom = $school->assessedClassroom();

            // All student score totals
            $subjectChartScores = $classroom->getSubjectChartScores([1,2]);

        }else{
            $classroom = null;
            $subjectChartScores = [];
        }
        // Fetch students of a class
        return view('schoolAdmin.performance.subject.index',[
            'grades' => Grade::all(),
            'classroom' => $classroom,
            'subjects' => Subject::all(),
            'subjectChartScores' => $subjectChartScores
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
    public function show(Subject $subject)
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
        return view('schoolAdmin.performance.subject.show',[
            'subject' =>  $subject,
            'classroom' => $classroom
        ]);
    }

    /**
     * Return classroom subjects chart data
     */
    public function ClassSubjectChartScores(Request $request)
    {
        if(auth()->user()->schools->first()->id == 1){
            $classroom = Classroom::where('name', '4A')->get()->first();

            return $classroom->getSubjectChartScores($request->query('subjects'));

        }elseif(auth()->user()->schools->first()->students->isNotEmpty()){
            $classroom = App\Classroom::has('students')->first();

            return $classroom->getSubjectChartScores($request->query('subjects'));
        }else{
            $classroom = null;

            return [];
        }
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
