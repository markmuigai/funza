<?php

namespace App\Http\Controllers\Teacher;

use App\Grade;
use App\Classroom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * Teacher Dashboard
     */
    public function dashboard()
    {
        return view('teacher.dashboard',[
            'classes' => auth()->user()->assignedClasses()
        ]);
    }
}
