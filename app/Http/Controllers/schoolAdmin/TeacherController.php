<?php

namespace App\Http\Controllers\schoolAdmin;

use App\User;
use App\Grade;
use App\Subject;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\UsersExportTemplate;
use App\Imports\UsersImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('schoolAdmin.teacher.index',[
            'teachers' => auth()->user()->schools->first()->teachers()->paginate(5)
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
        return view('schoolAdmin.teacher.create',[
            'grades' => Grade::all(),
            'subjects' => Subject::all()
        ]);
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
        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new UsersExport(auth()->user()->schools->first()->teachers()->toArray()), 'users.xlsx');
    }

        /**
    * @return \Illuminate\Support\Collection
    */
    public function exportCSVTemplate() 
    {
        return Excel::download(new UsersExportTemplate, 'users.xlsx');
    }

    /**
     * Show teacher class assignments
     */
    public function classAssignment($user_id)
    {
        return view('schoolAdmin.teacher.classAssignment',[
            'teacher' => User::find($user_id),
            'grades' => Grade::all(),
            'subjects' => Subject::all()
        ]);
    }

    /**
     * Ajax call to fetch classes based on a grade
     */
    public function fetchGradeClasses($grade_id)
    {
        return json_encode(Grade::find($grade_id)->classrooms->pluck('name','id'));
    }

    /**
     * Store class assignment
     */
    public function storeClassAssignment(Request $request, User $teacher)
    {
        // Assign grade and subject pivot instance to the teacher
        $teacher->classroomSubject()->create([
            'classroom_id' => $request->class,
            'subject_id' => $request->subject
        ]);

        return redirect()->back();
    }
}
