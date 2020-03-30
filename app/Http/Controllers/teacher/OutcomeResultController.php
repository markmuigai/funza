<?php

namespace App\Http\Controllers\teacher;

use App\Topic;
use App\Subject;
use App\Classroom;
use App\outcomeResult;
use Illuminate\Http\Request;
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
    public function create(Classroom $classroom, Subject $subject , Topic $topic)
    {
        return view('teacher.outcome-result.create',[
            'classroom' => $classroom,
            'subject' => $subject,
            'topic' => $topic
        ]);
    }

    /**
     * Store a newly created outcome Result in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Classroom $classroom, Subject $subject , Topic $topic)
    {   
        // Create for each student
        foreach($request->students as $student_id){
            foreach($request->results as $outcome_id => $result){
                OutcomeResult::create([
                    'student_id' => $student_id,
                    'outcome_id' => $outcome_id,
                    'result' => $result
                ]);
            }
        }

        // Create result for each outcome

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
