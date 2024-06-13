<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function home()
    {
        return view('subscription.home');
    }

    public function subscribe()
    {
        Auth::user()->profile()->update(['premium' => true]);
        
        return redirect()->route('subscription.home')->with('success', 'Subscription successful');
    }

    public function cancel()
    {
        Auth::user()->profile()->update(['premium' => false]);
        
        return redirect()->route('subscription.home')->with('success', 'Subscription cancelled');
    }
}
