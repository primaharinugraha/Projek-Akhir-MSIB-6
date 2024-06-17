<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Post;
use App\Models\User;
use App\Models\Finance;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard() {
        if(Auth::user()->role != 'admin')
        {
            return redirect()->route('dashboardUser')->with('error', 'user must be admin to access admin dashboard.');
        }
        $berlanggananCount = Profile::where('premium', 1)->count();
        $assetsByMonth = Finance::asset()
        ->orderBy('date')
        ->select(DB::raw('SUM(value) AS sums'), DB::raw("DATE_FORMAT(date, '%M %Y') AS months"))
        ->groupBy('months')
        ->get()
        ->keyBy('months');

    $liabilitiesByMonth = Finance::liability()
        ->orderBy('date')
        ->select(DB::raw('SUM(value) AS sums'), DB::raw("DATE_FORMAT(date, '%M %Y') AS months"))
        ->groupBy('months')
        ->get()
        ->keyBy('months');
        return view('dashboard.index',[
            'usersCount' => User::count(),
            'plansCount' => Plan::count(),
            'articleCount' => Post::count(),
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
        $articleCount = Post::count();
        $berlanggananCount = Profile::where('premium', 1)->count();
        $allberlangganan = Profile::where('premium', 1)->get();
    
        return view('dashboard.member', [
            'usersCount' => $usersCount,
            'articleCount' => $articleCount,
            'berlanggananCount' => $berlanggananCount,
            'allberlangganan' => $allberlangganan,
        ]);
    }
    public function userdashboard() {
        $articleCount = Post::count();
        $usersCount = User::count();
        $berlanggananCount = Profile::where('premium', 1)->count();
        return view('dashboard.user',[
            'usersCount' => $usersCount,
            'articleCount' => $articleCount,
            'berlanggananCount' => $berlanggananCount,
            'allUsers' => User::all(),
        ]);
    }


    

    
    public function articledashboard() {
        $articleCount = Post::count();
        $usersCount = User::count();
        $berlanggananCount = Profile::where('premium', 1)->count();
        $posts = Post::all(); // Ambil semua data post
        return view('dashboard.article', [
            'usersCount' => $usersCount,
            'articleCount' => $articleCount,
            'berlanggananCount' => $berlanggananCount,
            'posts' => $posts, // Kirim data post ke view
        ]);
    }

    public function dashboardUser()
    {
        $assetsByMonth = Auth::user()->finances()->asset()->orderBy('date')
            ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();
        $liabilitiesByMonth = Auth::user()->finances()->liability()->orderBy('date')
            ->select(DB::raw('sum(value) as sums'), DB::raw("DATE_FORMAT(date,'%M %Y') as months"))->groupBy('months')->get();

        return view('dashboard.dashboarduser', [
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
