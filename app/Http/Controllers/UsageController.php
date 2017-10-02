<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsageController extends Controller
{
    function index(){
    	return view('usage/test');
    }
}
