<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductsStock as Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Excel;
use DB;


class ProductsController extends Controller
{
    
    function __construct(){
       
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($projectName)
    {
        //

        $products = Products::all();
        
        return view('products/view-products', compact('products', 'projectName'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($projectName, $upload = NULL)
    {
       
        return view('products/add-products', compact('projectName', 'upload'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_from_excel($projectName, Request $request)
    {
        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function($reader) {})->get();

            if(!empty($data) && $data->count()){

                foreach ($data->toArray() as $key => $value) {
                    if(!empty($value)){
                        // print_r($value);
                        // foreach ($value as $v) {        
                            $insert[] = 
                            [
                                'name' => $value['name'], 
                                'sku' => $value['sku'], 
                                'weight' => $value['weight'], 
                                'buy_price' => $value['buy_price'], 
                                'sell_price' => $value['sell_price'], 
                                'stock' => $value['stock'], 
                                'description' => $value['description']
                            ];
                        // }
                    }
                }

                
                if(!empty($insert)){
                    
                    // $products = Products::all();
                    // $upload = $insert;
                    // return view('products/view-products', compact('products', 'projectName', 'upload'));
                    return $this->create($projectName, $insert);
                   
                }

            }

        }
        // return Response()->json($request);
        return back()->with('error','Please Check your file, Something is wrong there.');
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_from_excel(Request $request)
    {
        //
        // echo(json_decode($request->all(), true));
        $data = [];
        $checkbox = $request->json()->all();
        foreach ($checkbox as $key => $value) {
            if ($value) {
                $value['invento_vendor_id'] = Auth::id();
                // $value['created_at'] = date('Y-m-d h:i:s');
                // $value['updated_at'] = date('Y-m-d h:i:s');
                 $data[] = $value;
            }
          
        }
        print_r($data);
        // return Products::create($request->all());
        DB::table('invento_products')->insert($data);

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
