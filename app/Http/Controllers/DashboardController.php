<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\Finance;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard() {
        $berlanggananCount = Profile::where('premium', 1)->count();
        $assetsByMonth = Finance::asset()->orderBy('date')
        ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();
    $liabilitiesByMonth = Finance::liability()->orderBy('date')
        ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();
        return view('dashboard.index',[
            'usersCount' => User::count(),
            'plansCount' => Plan::count(),
            'berlanggananCount' => $berlanggananCount,
            'assetsTotal' => Finance::asset()->total(),
            'liabilitiesTotal' => Finance::liability()->total(),
            'financesTotal' => Finance::totalAll(),
            'assetsCount' => Finance::asset()->count(),
            'liabilitiesCount' => Finance::liability()->count(),
            'assetsByMonth' => $assetsByMonth,
            'liabilitiesByMonth' => $liabilitiesByMonth,
        ]);
    }
    public function dataproyekdashboard() {
        $usersCount = User::count();
        $berlanggananCount = Profile::where('premium', 1)->count();
        return view('dashboard.dataproyek',[
            'usersCount' => $usersCount,
            'berlanggananCount' => $berlanggananCount,
        ]);
    }
    public function memberdashboard()
    {
        $usersCount = User::count();
        $berlanggananCount = Profile::where('premium', 1)->count();
        $allberlangganan = Profile::where('premium', 1)->get();
    
        return view('dashboard.member', [
            'usersCount' => $usersCount,
            'berlanggananCount' => $berlanggananCount,
            'allberlangganan' => $allberlangganan,
        ]);
    }
    public function userdashboard() {
        $usersCount = User::count();
        $berlanggananCount = Profile::where('premium', 1)->count();
        return view('dashboard.user',[
            'usersCount' => $usersCount,
            'berlanggananCount' => $berlanggananCount,
            'allUsers' => User::all(),
        ]);
    }
    

    
    public function articledashboard() {
        $usersCount = User::count();
        $berlanggananCount = Profile::where('premium', 1)->count();
        return view('dashboard.article',[
            'usersCount' => $usersCount,
            'berlanggananCount' => $berlanggananCount,
        ]);
    }
}
