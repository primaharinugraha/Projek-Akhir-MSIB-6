<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Finance;
use App\Models\FinanceMonth;
use Illuminate\Http\Request;
use App\Exports\FinancesExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\FinanceRequest;

class FinanceController extends Controller
{
    public function index()
    {

        return view('kelolauang.indexkelolauang', [
            'assets' => Auth::user()->finances()->asset()->get(),
            'liabilities' => Auth::user()->finances()->liability()->get(),
            'totalAssets' => Auth::user()->finances()->asset()->total(),
            'totalLiabilities' => Auth::user()->finances()->liability()->total(),
            'total' => Auth::user()->finances()->totalAll(),
        ]);
    }

    public function create($year, $month)
    {
        return view('kelolauang.createkelolauang', ['year' => $year, 'month' => $month]);
    }

    public function store(FinanceRequest $request)
    {
        $data = $request->validated();
        
        $yearMonth = Carbon::createFromFormat('Y-m', $data['date']);
        $data['date'] = Carbon::create($yearMonth->year, $yearMonth->month, 1, 0, 0, 0);

        Auth::user()->finances()->create($data);

        return redirect()->route('finances.index')
            ->with('success', 'Finance entry created successfully.');
    }

  

    

    public function destroy(Finance $finance)
    {
        $finance->delete();

        return back()
            ->with('success', 'Finance entry deleted successfully.');
    }

    public function year($year)
    {
        $assetsByMonth = Auth::user()->finances()->year($year)->asset()->orderBy('date')
             ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();
        $liabilitiesByMonth = Auth::user()->finances()->year($year)->liability()->orderBy('date')
            ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();

        return view('kelolauang.indexkelolauang', [
            'assets' => Auth::user()->finances()->year($year)->asset()->get(),
            'liabilities' => Auth::user()->finances()->year($year)->liability()->get(),
            'year' => $year,
            'totalAssets' => Auth::user()->finances()->year($year)->asset()->total(),
            'totalLiabilities' => Auth::user()->finances()->year($year)->liability()->total(),
            'total' => Auth::user()->finances()->year($year)->totalAll(),
            'assetsByMonth' => $assetsByMonth,
            'liabilitiesByMonth' => $liabilitiesByMonth,
        ]);
    }

    public function yearMonth($year, $month)
    {
        return view('kelolauang.indexkelolauang', [
            'assets' => Auth::user()->finances()->year($year)->month($month)->asset()->get(),
            'liabilities' => Auth::user()->finances()->year($year)->month($month)->liability()->get(),
            'year' => $year, 'month' => $month,
            'totalAssets' => Auth::user()->finances()->year($year)->month($month)->asset()->total(),
            'totalLiabilities' => Auth::user()->finances()->year($year)->month($month)->liability()->total(),
            'total' => Auth::user()->finances()->year($year)->month($month)->totalAll()
        ]);
    }

    public function export() {
        return Excel::download(new FinancesExport(Auth::user()), 'users.xlsx');
    }
}
