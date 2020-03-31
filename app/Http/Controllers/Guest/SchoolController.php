<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
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
        return redirect()->route('school.admin.create');
    }

    /**
     * Show school admin form
     */
    public function createAdmin()
    {
        return view('guest.schoolAdmin.create');
    }

    /**
     * Store school admin details
     */
    public function storeSchoolAdminDetails(Request $request)
    {
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
        return 'School Registered Succeddfully';
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
