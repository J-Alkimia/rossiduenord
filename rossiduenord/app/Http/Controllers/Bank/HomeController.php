<?php

namespace App\Http\Controllers\Bank;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bankHome()
    {
        return view('bank.dashboard');
    }

}
