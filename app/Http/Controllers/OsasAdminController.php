<?php

namespace App\Http\Controllers;

use App\Models\OsasAdmin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Exception;
// added
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;
use Laravel\Socialite\Facades\Socialite;
// added

use function Laravel\Prompts\alert;

class OsasAdminController extends Controller
{
    public function index() {
        return view('osas.index');
    }

    public function signup() {
        return view('osas.signup');
    }

    public function login() {
        return view('osas.login');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/osas/login')->with('message', 'Logout successful');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            "name" => [''],
            "email" => ['required', 'email', Rule::unique('osasadmin', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        $validated['name'] = 'OSAS Admin';
        $validated['password'] = bcrypt($validated['password']);
        $osasadmin = OsasAdmin::create($validated);
        auth()->login($osasadmin);
        return redirect('/osas/')->with('message', 'Welcome back');

    }

    public function process(Request $request) {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($validated)) {
            session()->regenerate();
            return redirect('/osas/')->with('message', 'Welcome back');
        }
        return back()->withErrors(['email' => 'Login failed! Incorrect Email or Password']);
    }


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
      
            $user = Socialite::driver('google')->user();
       
            $finduser = OsasAdmin::where('google_id', $user->id)->first();
       
            if ( $finduser ) {
       
                Auth::login($finduser);
      
                return redirect()->intended('/');
       
            } else {
                $newUser = OsasAdmin::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => 'dummypass'// you can change auto generate password here and send it via email but you need to add checking that the user need to change the password for security reasons
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('/');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }



    
}
