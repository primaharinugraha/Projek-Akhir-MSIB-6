<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexlogin(){
        return view('auth.login');
    }

    public function home() {
        return view('landingpage');
    }
    public function indexregister() {
        return view('auth.register');
    }
    public function profile(){
        return view('profile');
    }
    


}
