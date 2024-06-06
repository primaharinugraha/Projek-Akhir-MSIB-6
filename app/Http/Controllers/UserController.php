<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function home()
    {
        return view('landingpage');
    }

    public function register(){
        return view('register');
    }
    public function register_user(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|confirmed',
            'first_name' =>'required',
            'last_name' =>'required',
            'phone_number' =>'required',
            'gender' =>'required',
            'job' =>'required',
        ]);


        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $user = User::create([
                'email' => $request->email,
                'password' => $request->password,
            ]);
        }

        $user->profile()->create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'job' => $request->job,
        ]);


        return redirect('login');
    }

    public function showProfile($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('profile', compact('user'));
    }

}
