<?php

namespace App\Http\Controllers\Asseverator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function asseveratorHome()
    {
        return view('asseverator.dashboard');
    }
}
