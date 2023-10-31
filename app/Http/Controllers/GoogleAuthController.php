<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callback()
    {
        try {
            // $randomPassword = Str::random(10);
            $google_user_id = Socialite::driver('google')->user();
            // dd($user);
            // $finduser = User::where('google_id', $user->id)->first();
            $findStudent = Student::where('google_id', $google_user_id->getId())->first();
            if ( $findStudent ) {
                Auth::login($findStudent);
                return redirect('/admin')->with('message', 'Successfully Logged In!');
                // return redirect()->intended('/admin')->with('message', 'Successfully Logged In!'); old code
            } else {
                dd($google_user_id);
                $newAdmin = Student::Create([
                    'student_lname' => $google_user_id->user['family_name'],
                    'student_fname' => $google_user_id->user['given_name'],
                    'student_mi' => 'N/A',
                    'email' => $google_user_id->user['email'],
                    // 'admin_email' => $google_user_id->user['email'],
                    'google_id'=> $google_user_id->user['id'],
                    // 'password' => '' // you can change auto generate password here and send it via email but you need to add checking that the user need to change the password for security reasons
                ]);
                // Auth::login($newAdmin);
                return redirect('/admin/login')->with('message', 'Successfully Created an OSAS Coordinator Account!');
            }
        } catch (Exception $e) {
            back();
        }

    }


}