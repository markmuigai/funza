<?php

namespace App\Http\Controllers\Guest;

use App\User;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class SchoolController extends Controller
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
        return view('guest.school.create');
    }

    /**
     * Store school details
     */
    public function storeSchoolDetails(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required', 
            'email' => 'required', 
            'telno' => 'required', 
            'address' => 'required',  
            'county' => 'required', 
            'subcounty' => 'required' 
        ]);

        // Create school
        $school = School::create($request->all());

        // Notify school admin on school creation

        return redirect()->route('school.admin.create', ['school' => $school]);
    }

    /**
     * Show school admin form
     */
    public function createAdmin(School $school)
    {
        return view('guest.schoolAdmin.create', [
            'school' => $school
        ]);
    }

    /**
     * Store school admin details
     */
    public function storeSchoolAdminDetails(Request $request, School $school)
    {
        // // Validation
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);

        DB::transaction(function () use ($request, $school) {
            // Create User
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            
            // Assign user to school
            $school->users()->attach($user->id);

            // Assign school admin role to the pivot table instances of the users selected
            $user->schoolAdministration($school)->roles()->attach(Role::where('name','school_admin')->first()->id);
        });

        return redirect()->route('school.confirm-registration.create');
    }

    /**
     * Show confirm school registration form
     */
    public function confirmSchoolRegistrationForm()
    {
        return view('guest.school.confirm-registration');
    }

    /**
     * Confirm Registration
     */
    public function confirmSchoolRegistration(Request $request)
    {
        return redirect()->route('login');
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
}
