<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserApps;
use View;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function project($projectName)
    {
        if (!$projectName) {
            return redirect('/overview');
        }
        view()->share('projectName', $projectName);

        return view('home', compact('projectName'));
    }
    public function manage($projectName)
    {

        return view('products/chart', compact('projectName'));
    }
    public function landing()
    {
        $apps = UserApps::all()->where('user_id', Auth::id());
        // print_r($apps);
        return view('home-landing', compact('apps'));
    }
    public function price()
    {
      
        return view('price');
    }

}
