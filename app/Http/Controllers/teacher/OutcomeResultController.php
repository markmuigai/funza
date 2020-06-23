<?php

namespace App\Http\Controllers\teacher;

use App\Topic;
use App\Subject;
use App\Student;
use App\Classroom;
use App\Substrand;
use App\outcomeResult;
use App\OutcomeOption;
use Illuminate\Http\Request;
use App\Events\ClassAssessed;
use App\Events\StudentAssessed;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OutcomeResultController extends Controller
{
    /**
     * Display a listing of the outcome Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // View outcomes of all students
        return view('teacher.outcome-results.index',[
            'outcomeResults' => $outcomeResults
        ]);
    }

    /**
     * Show the form for creating an outcome result
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Classroom $classroom, Subject $subject , Substrand $substrand, $assessment_count)
    {
        // Only return students who have not  been assessed


        // return $substrand;
        return view('teacher.outcome-result.create',[
            'classroom' => $classroom,
            'subject' => $subject,
            'substrand' => $substrand,
            'assessment_count' => $assessment_count
        ]);
    }

    /**
     * Store a newly created outcome Result in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Classroom $classroom, Subject $subject , Substrand $substrand, $assessment_count)
    {
        DB::transaction(function () use ($request, $classroom, $subject, $substrand, $assessment_count){           
            // Create for each student
            foreach($request->students as $student_id){
                foreach($request->results as $outcome_id => $outcome_option_id){
                    OutcomeResult::create([
                        'student_id' => $student_id,
                        'outcome_id' => $outcome_id,
                        'outcome_option_id' => $outcome_option_id,
                        'count' => $request->count
                    ]);
                }
            }

            // Generate results algorithm
            event(new StudentAssessed($request->students, $substrand));

            // Generate results algorithm
            event(new ClassAssessed($classroom, $substrand));
        });
        
        return redirect()->route('teacher.classroom.subject', ['classroom'=> $classroom, 'subject' => $subject])->with([
            'success' => 'Outcome result uploaded successfully'
        ]);
    }

    /**
     * Display the specified outcome Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Outcome $outcome)
    {
        return view('teacher.outcome-result.show');
    }

    /**
     * Show the form for editing the specified outcome Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified outcome Result in storage.
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
     * Remove the specified outcome Result from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
