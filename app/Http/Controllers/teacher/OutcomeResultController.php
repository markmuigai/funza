<?php

namespace App\Http\Controllers\teacher;

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
    public function create()
    {
        return view('teacher.outcome-results.create');
    }

    /**
     * Store a newly created outcome Result in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OutcomeResult::create([

        ]);

        return redirect()->back()->with([
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
