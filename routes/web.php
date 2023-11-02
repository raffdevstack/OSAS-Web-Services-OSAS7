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
    // routes that only accessible if there are super admins
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
    Route::get('/admin/manage/profile/{admin}', [AdminController::class, 'showAdminProfile'])->name('admin.profile');
    Route::get('/admin/offices', [AdminController::class, 'offices'])->name('admin.offices')->middleware('auth');
    Route::get('/admin/login', [AdminController::class, 'login'])->name('login')->middleware('guest');
    Route::get('/admin/manage', [AdminController::class, 'manage'])->name('admin.manage')->middleware('auth');
    Route::post('/admin/logout', [AdminController::class, 'logout']);
    // creation of new admins
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store_new', [AdminController::class, 'storeNew'])->name('admin.store_new');
});

Route::group([], function () {
    Route::get('/', [Controller::class, 'index']); // welcome page
    Route::get('/data-privacy', [Controller::class, 'showDataPrivacyPolicy'])->name('data-privacy-policy');
    Route::get('/terms-conditions', [Controller::class, 'showTermsAndConditions'])->name('terms-conditions');
    Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('google_redirect');
   
    Route::get('/qr-scanner', [Controller::class, 'showScanner'])->name('qr_scanner');
    Route::get('/qr-scanner2', [Controller::class, 'showScanner2'])->name('qr_scanner2');
    Route::get('/qr-value-get', [QrScannerController::class, 'getValue'])->name('qr_value');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/signup', [AdminController::class, 'signup'])->name('super_signup')->middleware('super_admin_setup');
    Route::post('/signup/store', [AdminController::class, 'storeNewAdmin']);
    Route::post('/login/process-login', [AdminController::class, 'processLogin'])->name('process-login');
});

Route::group(['prefix' => 'student'], function () {
    Route::get('/', [StudentController::class, 'showIndex'])->name('student_home');
    Route::get('/login',[StudentController::class, 'showLogin'])->name('show_login');
    Route::get('/auth/google/callback/', [GoogleAuthController::class, 'callback'])->name('google_callback');
    Route::get('/signup-step1',[StudentController::class, 'showSignup1'])->name('signup1');
});
