<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return redirect()->route('home');
    }
    public function register() {
        return view('auth.register');
    }

    public function registerUser(UserRequest $request)
    {
        $data = $request->validated();
    
        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();
    
        // Jika user tidak ditemukan, buat user baru
        if (!$user) {
            $user = User::create($data);
        }
    
        // Pastikan ada profil untuk user (jika belum ada)
        if (!$user->profile) {
            $user->profile()->create($data);
        }
    
        // Redirect ke halaman login
        return redirect('login');
    }
    // public function profile(){
    //     return view('profile');
    // }

    public function edit(User $user)
    {
        return view('profiles.edit', ['profile' => $user->profile, 'user' => $user]);
    }

    public function update(UpdateProfileRequest $request, User $user)
    {
        $data = $request->validated();

        if ($data['email'] == '') {
            unset($data['email']);
        }

        if (isset($data['photo'])) {
            $data['photo_path'] = $data['photo']->store('media', 'public');
        }

        $user->update($data);
        $user->profile->update($data);

        return redirect()->route('profiles.edit', ['user' => $user])->with('success', 'Update successfully.');
    }


    

     public function article(){
        return view('article');
    }
     
    }
