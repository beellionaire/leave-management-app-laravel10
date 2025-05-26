<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


        if (!Auth::check()) {
            abort(403);
        }

        $user = Auth::user();

        $data = [
            'title' => 'Dashboard',
            'header' => 'Dashboard',
            'active_dashboard' => 'active',
            'role' => $user->role,
        ];

        return view('dashboard', $data);
    }
}
