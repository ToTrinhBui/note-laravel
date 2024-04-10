<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomControler extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
