<?php

namespace App\Http\Controllers;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentAuthController extends Controller
{
    public function redirect() {
        return Socialite::driver('google')->redirect();
    }
    public function callback() {
        try {
            $google_user_id = Socialite::driver('google')->user();
            $findStudent = Student::where('google_id', $google_user_id->getId())->first();
            if($findStudent) {
                Auth::login($findStudent);
                return redirect('/student/index')->with('message', 'Successfully Logged In!');
            } else {
                return redirect(route('show_login'))->with('error', 'Account not found!');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
