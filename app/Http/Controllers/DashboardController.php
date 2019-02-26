<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }
}
