<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('dashboard.index');
    }
    public function dataproyekdashboard() {
        return view('dashboard.dataproyek');
    }
    public function memberdashboard() {
        return view('dashboard.member');
    }
    public function userdashboard() {
        return view('dashboard.user');
    }
    public function articledashboard() {
        return view('dashboard.article');
    }
}
