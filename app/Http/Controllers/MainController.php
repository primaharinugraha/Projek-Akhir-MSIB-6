<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use App\Models\Post;
use App\Models\Finance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function dashboardAdmin()
    {   
        if(Auth::user()->role != 'admin')
        {
            return redirect()->route('main.dashboardUser')->with('error', 'user must be admin to access admin dashboard.');
        }

        $assetsByMonth = Finance::asset()->orderBy('date')
            ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();
        $liabilitiesByMonth = Finance::liability()->orderBy('date')
            ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();

        return view('main.dashboardAdmin', [
            'usersCount' => User::count(),
            'berlanggananCount' => Profile::count(),
            'plansCount' => Plan::count(),
            'articlesCount' => Post::count(),
            'assetsTotal' => Finance::asset()->total(),
            'liabilitiesTotal' => Finance::liability()->total(),
            'financesTotal' => Finance::totalAll(),
            'assetsCount' => Finance::asset()->count(),
            'liabilitiesCount' => Finance::liability()->count(),
            'assetsByMonth' => $assetsByMonth,
            'liabilitiesByMonth' => $liabilitiesByMonth,
        ]);
    }

    public function dashboardUser()
    {
        $assetsByMonth = Auth::user()->finances()->asset()->orderBy('date')
            ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();
        $liabilitiesByMonth = Auth::user()->finances()->liability()->orderBy('date')
            ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();

        return view('main.dashboardUser', [
            'plansCount' => Auth::user()->plans()->count(),
            'assetsTotal' => Auth::user()->finances()->asset()->total(),
            'liabilitiesTotal' => Auth::user()->finances()->liability()->total(),
            'financesTotal' => Auth::user()->finances()->totalAll(),
            'assetsCount' => Auth::user()->finances()->asset()->count(),
            'liabilitiesCount' => Auth::user()->finances()->liability()->count(),
            'assetsByMonth' => $assetsByMonth,
            'liabilitiesByMonth' => $liabilitiesByMonth,
        ]);
    }
}
