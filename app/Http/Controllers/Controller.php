<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        return view('welcome');
    }

    public function showDataPrivacyPolicy() {
        return view('data_privacy_stmt');
    }

    public function showTermsAndConditions() {
        return view('terms_conditions');
    }

    public function showScanner() {
        return view('qr_scanner');
    }

    public function showScanner2() {
        return view('qr_scanner2');
    }



}
