<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function indexlogin(){
    //     return view('auth.login');
    // }

    public function home() {
        return view('landingpage');
    }
    public function register() {
        return view('auth.register');
    }
    // public function profile(){
    //     return view('profile');
    // }

    public function proyek(){
        return view('proyek.indexproyek');
    }
    public function create(){
        return view('proyek.createproyek');
    }

     public function kelolauang(){
        return view('kelolauang.indexkelolauang');
    }
     public function article(){
        return view('article');
    }
     
    }
