<?php

namespace App\Http\Controllers\homelogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        return view('Log In.homelogin');
    }
}
