<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductsStock as Stock;
use Illuminate\Http\Request;


class ProductsController extends Controller
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
        return Products::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = Products::find($id);
        
        // $data = $products;
        // $data['categories'] = $products->categories;
        // $data['suppliers'] = $products->suppliers; 

        // echo $products->categories;
        // echo $products->suppliers;

        return $products;
    }
    /**
     * Display the all resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($trash=FALSE)
    {
        //
        if($trash){
            return Products::withTrashed()->get();
        }
        return Products::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $product = Products::find($id);
        if($product){
            if($product->update($request->all()) ){
                return $product;
            }
        }
       
        return "this {$id} was not found";
         
        // return $request->all();
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id id_product
     * @return \Illuminate\Http\Response
     */
    public function insert_stock(Request $request, $id)
    {
        //

        print_r($request);
        

        $product = Products::find($id);

        print_r($product);
        // if($product){

        //     if($product->update($request->all()) ){
        //        $stok = Stock::create($request->all());
        //     }

        // }
       
        // return "this {$id} was not found";
         
        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);

        $product->delete();

        //
    }
}
