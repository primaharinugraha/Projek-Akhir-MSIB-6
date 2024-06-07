<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
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
    public function profile(){
        return view('profile');
    }
    


}
