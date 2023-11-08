<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OsasAdminController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\QrScannerController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\StudentController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// superadmincheck - cchecks if there is super admin
Route::middleware(['superadmincheck'])->group(function () {
});

// all outside routes, we can add 

Route::get('/', [Controller::class, 'index']); // welcome page
Route::get('/data-privacy', [Controller::class, 'showDataPrivacyPolicy'])->name('data-privacy-policy');
Route::get('/terms-conditions', [Controller::class, 'showTermsAndConditions'])->name('terms-conditions');
Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('google_redirect');
Route::get('/qr-scanner', [Controller::class, 'showScanner'])->name('qr_scanner');
Route::get('/qr-scanner2', [Controller::class, 'showScanner2'])->name('qr_scanner2');
Route::get('/qr-value-get', [QrScannerController::class, 'getValue'])->name('qr_value');

// all admin routes here
Route::group(['prefix' => 'admin'], function () {

    // signup and login
    Route::middleware(['your_middleware_name'])->group(function () {
    });
    Route::get('/signup', [AdminController::class, 'showSignup'])
        ->name('admin_signup');
    Route::get('/signup2', [AdminController::class, 'showSignup2'])
        ->name('admin_signup2');
    Route::post('/signup-store', [AdminController::class, 'signupStore'])
        ->name('admin_signupstore');
    Route::post('/signup-store2', [AdminController::class, 'signupStore2'])
        ->name('admin_signupstore2');
    Route::get('/login', [AdminController::class, 'showLogin'])
        ->name('admin_showlogin');
    Route::post('/login/process-login', [AdminController::class, 'processLogin'])
        ->name('process_login');
    Route::post('/logout', [AdminController::class, 'logout'])
        ->name('admin_logout');

    // dashboard
    Route::get('/', [AdminController::class, 'index'])
        ->name('admin_dashboard');

    // admin profile
    Route::get('/manage/profile/{admin}', [AdminController::class, 'showAdminProfile'])
        ->name('admin_profile');


    // manage admins
    Route::get('/create', [AdminController::class, 'create'])
        ->name('admin_create');

    Route::get('/manage', [AdminController::class, 'manage'])
        ->name('manage_admins');

    // admin offices
    Route::get('/offices', [AdminController::class, 'offices'])
        ->name('admin_offices');
});

// all student routes here
Route::group(['prefix' => 'student'], function () {
    Route::get('/', [StudentController::class, 'showIndex'])
        ->name('student_home');
    Route::get('/login', [StudentController::class, 'showLogin'])
        ->name('student_showlogin');
    Route::get('/signup-step1', [StudentController::class, 'showSignup1'])
        ->name('signup1');
    // for google single sign on
    Route::get('/auth/google/callback/', [GoogleAuthController::class, 'callback'])
        ->name('google_callback');
});
