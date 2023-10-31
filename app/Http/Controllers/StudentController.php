<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showIndex()
    {
        return view('students.index');
    }
    public function showLogin()
    {
        return view('students.login');
    }

}
