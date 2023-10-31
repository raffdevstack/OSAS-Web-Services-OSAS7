<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrScannerController extends Controller
{
    public function getValue(Request $request)
    {
        if ($request->data) 
        return $request->data;
    }
}
