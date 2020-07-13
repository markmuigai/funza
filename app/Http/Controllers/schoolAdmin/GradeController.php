<?php

namespace App\Http\Controllers\schoolAdmin;

use App\Grade;
use App\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    /**
     * Display a listing of the grade.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch auth user grades
        $grades = auth()->user()->schools->first()->grades;
        
        // Return grades view
        return view('schoolAdmin.grade.index', [
            'grades' => $grades
        ]); 
    }

    /**
     * Show the form for creating a new grade.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schoolAdmin.grade.create',[
            'grades' => Grade::all() 
        ]);
    }

    /**
     * Store a newly created grade in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			DB::transaction(function () use ($request){  
				$school = auth()->user()->schools()->first();

				// Assign grades to the school
				foreach($request->grades as $grade)
				{
						$school->grades()->attach($grade);
				}

				// Assign classes to the gradeschool pivot instances
				foreach($school->gradeSchools as $gradeSchool)
				{
					foreach($request->streams as $stream)
					{
						Classroom::create([
								'grade_school_id' => $gradeSchool->id,
								'name' => $gradeSchool->grade->name.$stream['name']
						]);
					}
				}
			});
			
			return redirect()->route('schoolAdmin.grades.index')->with([
					'success' => 'Classes created successfully'
			]);
    }

    /**
     * Display the specified grade.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified grade.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified grade in storage.
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
     * Remove the specified grade from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
