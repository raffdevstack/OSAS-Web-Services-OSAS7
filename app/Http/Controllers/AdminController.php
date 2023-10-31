<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AdminType;
use App\Models\Office;
use App\Models\Offices;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Exception;
// added
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session as FacadesSession;
use Laravel\Socialite\Facades\Socialite;
// added


use function Laravel\Prompts\alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function offices()
    {
        return view('admin.offices.index');
    }
    public function manage()
    {
        $admins = Admin::all();
        $offices = Office::all();
        $admin_types = AdminType::all();
        return view('admin.manage.index', compact('admins', 'offices', 'admin_types'));
    }

    public function signup()
    {
        return view('admin.signup');
    }


    public function create()
    {
        $offices = Office::all();
        $admin_types = AdminType::all();
        return view('admin.manage.create', compact('offices', 'admin_types'));
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login')->with('message', 'Logout successful');
    }

    // storing super admin signup data
    public function store(Request $request)
    {
        $validated = $request->validate([
            "admin_lname" => ['required', 'min:2', 'alpha_spaces'],
            "admin_fname" => ['required', 'min:2', 'alpha_spaces'],
            "admin_mi" => ['required', 'regex:/^(N\/A|[A-Za-z])$/'], //require to be clearer, user must put N/A if they have no mi
            "employee_id" => ['required', 'max:6'],
            "admin_contact" => ['nullable', 'numeric', 'digits_between:10,15'],
            "email" => ['required', 'email', Rule::unique('admins', 'email')],
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[^A-Za-z0-9])/',
            ],
        ]);
        $validated['admintype_id'] =  1;
        $validated['office_id'] = 1;
        $validated['password'] = bcrypt($validated['password']);
        Admin::create($validated);

        return redirect('/admin/login')->with('message', 'Successfully Created an OSAS Coordinator Account');
    }

    public function storeNew(Request $request)
    {
        $validated = $request->validate([
            "admin_lname" => ['required', 'min:2', 'alpha_spaces'],
            "admin_fname" => ['required', 'min:2', 'alpha_spaces'],
            "admin_mi" => ['required', 'regex:/^(N\/A|[A-Za-z])$/'], //require to be clearer, user must put N/A if they have no mi
            "employee_id" => ['required', 'max:6'],
            "office_id" => ['required'],
            "admintype_id" => ['required'],
            "admin_contact" => ['nullable', 'numeric', 'digits_between:10,15'],
            "email" => ['required', 'email', Rule::unique('admins', 'email')],
        ]);

        // checking if there is a file
        if ($request->hasFile('admin_image')) {
            $request->validate([
                "admin_image" => 'mimes:jpeg,png,bmp,tiff | max:4096'
            ]);

            // to avoid duplication of image
            $filenameWithExtension = $request->file("admin_image");
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

            $extension = $request->file("admin_image")
                ->getClientOriginalExtension();

            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            $smallThumbnail = $filename . '_' . time() . '.' . $extension;

            $request->file('admin_image')->storeAs(
                'public/admin',
                $filenameToStore
            );

            $request->file('admin_image')->storeAs(
                'public/admin/thumbnail',
                $smallThumbnail
            );

            $thumbnail = 'storage/admin/thumbnail/' . $smallThumbnail;

            // dd($thumbnail);
            $this->createThumbnail($thumbnail, 150, 150);

            $validated['admin_image'] = $filenameToStore;
        }

        Admin::create($validated);
        return redirect(route('admin.manage'))->with('message', 'Successfully create new admin account!');
        // return redirect('/admin/login')->with('message',
    }

    public function createThumbnail($path, $width, $height)
    {
        $img = Image::make($path)->resize(
            $width,
            $height,
            function ($constraint) {
                $constraint->aspectRatio();
            }
        );
        $img->save($path);
    }

    public function showAdminProfile($adminId)
    {
        // Fetch the admin's data from the database based on the $adminId
        $admin = Admin::find($adminId);

        // Check if the admin exists
        if (!$admin) {
            // You can handle what to do if the admin is not found, such as displaying an error message or redirecting to a 404 page.
            // For example, you can return a view with an error message:
            return view('errors.admin_not_found');
        }

        // Pass the admin data to the view and display it
        return view('admin.profile', ['admin' => $admin]);
    }


    public function process(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            'password' => 'required'
        ]);
        if (auth()->attempt($validated)) {
            session()->regenerate();
            return redirect('/admin/')->with('message', 'Successfully Logged In!');
        }
        return back()->withErrors(['email' => 'Login failed! Incorrect Email or Password']);
    }

    public function redirect() // this for google sso
    {
        return Socialite::driver('google')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callback() //this is for google sso
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = Admin::where('google_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended('/');
            } else {
                $newUser = Admin::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => 'dummypass' // you can change auto generate password here and send it via email but you need to add checking that the user need to change the password for security reasons
                ]);

                Auth::login($newUser);

                return redirect()->intended('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
