<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        return view('backend.pages.dashboard');
    }

    public function companyDashboard()
    {
        return view('backend.pages.company-dashboard');
    }
}
