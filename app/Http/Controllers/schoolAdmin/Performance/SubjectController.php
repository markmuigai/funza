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
        // dd(Classroom::find(21)->recentSubjectScore(Subject::find(2)));
        // Fetch students of a class
        return view('schoolAdmin.performance.subject.index',[
            'grades' => Grade::all(),
            'classroom' => Classroom::find(21),
            'subjects' => Subject::all()
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
        // Fetch students of a class
        return view('schoolAdmin.performance.subject.show',[
            'subject' =>  $subject,
            'classroom' => Classroom::find(21),
        ]);
    }

    /**
     * Return classroom subjects chart data
     */
    public function ClassSubjectChartScores(Request $request)
    {
        return Classroom::find(21)->getSubjectChartScores($request->query('subjects'));
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
