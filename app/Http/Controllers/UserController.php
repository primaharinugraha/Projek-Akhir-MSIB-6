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
    public function register()
    {
        return view('auth.register');
    }
    public function register_user(UserRequest $request)
    {
        $data = $request->validated();


        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $user = User::create($data);
        }

        if (!$user->profile) {
            $user->profile()->create($data);
        }


        return redirect('login');
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

    public function edit(User $user)
    {
        return view('profiles.edit', ['profile' => $user->profile, 'user' => $user]);
    }
}
