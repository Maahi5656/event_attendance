<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRController extends Controller
{
    //
    public function QRPage(){
        return view('qrcode.index');
    }

    public function details(){
        return view('qrcode.details');
    }
}
