<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function showProfile(User $user)
    {
        return view('profile', ['profile' => $user->profile, 'user' => $user]);
    }
}
