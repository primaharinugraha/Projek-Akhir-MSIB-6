<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('signIn');
    }

    public function home() {
        return view('landingpage');
    }
    public function signup() {
        return view('signup');
    }
}
