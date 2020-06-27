<?php

namespace App\Http\Controllers\schoolAdmin;

use App\User;
use App\Grade;
use App\Subject;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Exports\UsersExportTemplate;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

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
        DB::transaction(function () use ($request){        
            // Fetch auth user's school
            $school = auth()->user()->schools->first();

            // Create user
            $teacher = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('secret'),
            ]);

            // Store subjects they can teach
            $teacher->subjects()->attach($request->subjects);

            // Assign user to school    
            $school->users()->attach($teacher->id);

            // Assign school admin role to the pivot table instances of the users selected
            $teacher->schoolAdministration($school)->roles()->attach(Role::where('name','teacher')->first()->id);

        });

        return redirect()->route('schoolAdmin.teachers.index')->with([
            'success' => 'Teacher created successfully'
        ]);
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
        // Fetch user
        $user = User::find($user_id);

        return view('schoolAdmin.teacher.classAssignment',[
            'teacher' => $user,
            'grades' => Grade::all(),
            'subjects' => $user->subjects
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
