<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Illuminate\Auth\Events\Login;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user()->role_id;
        if ($user === 1) {

            return view('pemkab.dashboard');
        } elseif ($user === 2) {

            return view('dinasperikanan.dashboard');
        } elseif ($user === 3) {

            return view('kelompokusaha.dashboard');
        } else {
            return "salah";
        }
    }
    public function pengajuan()
    {
        return view('kelompokusaha.pengajuan');
    }
}
