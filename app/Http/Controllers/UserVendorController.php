<?php

namespace App\Http\Controllers;

use App\UserVendor;
use App\UserApps;
use App\ApiKey;
use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class UserVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $apps = new UserApps;
        $apps->name = $request->name;
        $apps->user_id = Auth::id();
        $apps->description = $request->description;
        $apps->app_key = substr(md5('invento'),0, 5).substr(md5($request->name),0, 5).substr(md5($request->_token.uniqid()), 15);
        $apps->tipe = $request->type;
        $apps->save();
        return $apps;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserVendor  $userVendor
     * @return \Illuminate\Http\Response
     */
    public function show(UserVendor $userVendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserVendor  $userVendor
     * @return \Illuminate\Http\Response
     */
    public function edit(UserVendor $userVendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserVendor  $userVendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserVendor $userVendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserVendor  $userVendor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apps = UserApps::find($id);

        $apps->delete();

        return redirect('setting');
    }
}
