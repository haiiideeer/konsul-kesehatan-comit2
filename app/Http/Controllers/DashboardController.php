<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Konsultasi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalKonsultasi = Konsultasi::count();

        return view('admin.dashboard', compact('totalUsers', 'totalKonsultasi'));
    }
}
