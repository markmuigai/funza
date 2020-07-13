<?php

namespace App\Http\Controllers\schoolAdmin;

use App\User;
use App\Grade;
use App\Subject;
use App\classroomSubject;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\TeachersImport;
use App\Exports\TeachersExport;
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
    public function import(Request $request) 
    {
        // $path1 = $request->file('teachersCsv')->store('temp'); 
        // $path=storage_path('app').'/'.$path1;  
        
        // Excel::import(new TeachersImport, $path);

        Excel::import(new TeachersImport,$request->file('teachersCsv'));
           
        return back();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function export() 
    {
        return Excel::download(new TeachersExport(auth()->user()->schools->first()->teachers()->toArray()), 'teachers.xlsx');
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
     * Ajax call to fetch subjects that can be taught by a teacher for a class
     */
    public function fetchClassSubjects($class_id, $user_id)
    {
        // Fetch teacher
        $teacher = User::find($user_id);

        // Subjects already assigned to the teacher for selected class
        $assigned_subjects_for_class = $teacher->subjectsForClass($class_id)->pluck('id');

        // Fetch subjects that can be taught for a particular class
        $subjects = $teacher->subjects->whereNotIn('id',$assigned_subjects_for_class);

        return json_encode($subjects->pluck('name','id'));
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

        return redirect()->back()->with([
            'success' => 'Classroms taught by '.$teacher->name.' updated' 
        ]);
    }

    /**
     * Delete class assignment
     */
    public function deleteClassAssignment(Request $request, User $teacher, classroomSubject $classroomSubject)
    {
        // dd($classroom_subject);
        
        // Assign grade and subject pivot instance to the teacher
        $classroomSubject->delete();

        return redirect()->back()->with([
            'success' => 'Classes taught by '.$teacher->name.' updated successfully' 
        ]);
    }
}
