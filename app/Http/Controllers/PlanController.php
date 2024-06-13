<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PlanRequest;

class PlanController extends Controller
{
    public function create()
    {
        if(!(Auth::user()->profile->premium || Auth::user()->role == 'admin') && Auth::user()->plans()->count() >= 1)
        {
            return redirect()->route('subscription.home')->with('error', 'You can only have one plan. Subscribe for more.');
        }
        return view('plans.create');
    }

    public function store(PlanRequest $request)
    {
        $data = $request->validated();

        Auth::user()->plans()->create($data);

        return redirect()->route('plans.index')->with('success', 'Plan created successfully.');
    }

    public function index()
    {
        $plans = Plan::all();
        return view('plans.index', compact('plans'));
    }

    public function show(Plan $plan)
    {
        $installment = $plan->getInstallment();

        return view('plans.show', ['plan' => $plan, 'installment' => $installment]);
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();

        return back()
            ->with('success', 'Finance entry deleted successfully.');
    }
}
