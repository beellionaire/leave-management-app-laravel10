<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $header = 'Dashboard';
        $active_dashboard = 'active';
        return view('dashboard', compact('title', 'header', 'active_dashboard'));
    }
}
