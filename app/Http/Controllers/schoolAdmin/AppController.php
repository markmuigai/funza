<?php

namespace App\Http\Controllers\schoolAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    /**
     * School Admin Dashboard
     */
    public function dashboard()
    {
        return view('schoolAdmin.dashboard');
    }
}
