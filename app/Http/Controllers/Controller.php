<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   	// protected $all_app;

   	// function __construct(){
   	// 	$app_list = UserApps::all()->where('user_id', Auth::id());
   	// 	view()->share('app_list', $app_list);
   	// }
}
