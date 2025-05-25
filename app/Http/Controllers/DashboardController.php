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

        $data = array(
            'title' => 'Dashboard',
            'header' => 'Dashboard',
            'active_dashboard' => 'active',
        );

        if (Auth::guard('web')->check()) {
            $user = Auth::guard('web')->user();
            $data['userx'] = User::find($user->id, ['name', 'role', 'foto']);
            $data['role'] = 'Admin';
        } elseif (Auth::guard('personal')->check()) {
            $pegawai = Auth::guard('personal')->user();
            $data['userx'] = Personal::find($pegawai->id_pegawai, ['nama_pegawai as name', 'role', 'foto_pegawai as foto']);
            $data['role'] = 'Pegawai';
        } else {
            abort(403);
        }

        return view('dashboard', $data);
    }
}
