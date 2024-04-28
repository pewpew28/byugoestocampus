<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    // Mendapatkan pengguna yang sedang login
    $user = Auth::user()->getRoleNames();

    foreach( $user as $role ) {
        if ($role == "admin") {
            return view('admin.dashboard');
        } elseif($role == "peserta") {
            return view('peserta.dashboard');
        }
    }
}

}
