<?php

namespace App\Http\Controllers;

use App\Models\Student;
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

    public function showSignup1()
    {
        $google_id = session('google_id');

        // Retrieve students with the specific google_id
        $student = Student::where('google_id', $google_id)->get();
        foreach ($student as $student_instance) {
            return view('students.signup_step1')->with('student',$student_instance);
        }
    }
}
