<?php

namespace App\Http\Controllers;

use App\Brands;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return Brands::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Brands::find($id);
    }
    /**
     * Display the all resource.
     *
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function view($trash)
    {
        //
        if($trash=='noTrash'){
            return Brands::all();
        }else if($trash=='withTrash'){
            return Brands::withTrashed()->get();
        }else if($trash=='trash'){
            return Brands::onlyTrashed()->get();
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $brands = Brands::find($id);
        if($brands)
        {
            if( $brands->update( $request->all() ) )
            {
                return $brands;
            }
            return array('failed to getting info from this value', $request->all());
        }
        return array('failed to getting info from this id', $id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brands  $brands
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $brands->find();
        //
        $model = Brands::find($id);
        $model->delete();
        return $model;
    }
}
