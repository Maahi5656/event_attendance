<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function registerPage()
    {
        return view('register.index');
    }
}
