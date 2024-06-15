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
        if(!(Auth::user()->profile->premium ))
        {
            return redirect()->route('subscription.home')->with('error', 'You can only have one plan. Subscribe for more.');
        }
        return view('proyek.createproyek');
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
        return view('proyek.indexproyek', compact('plans'));
    }

    public function show(Plan $plan)
    {
        $installment = $plan->getInstallment();

        return view('proyek.showproyek', ['plan' => $plan, 'installment' => $installment]);
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();

        return back()
            ->with('success', 'Finance entry deleted successfully.');
    }
}
