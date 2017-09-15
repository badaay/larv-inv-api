<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', 'UserController@register');
Route::post('auth/login', 'UserController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user', 'UserController@getAuthUser');
});

// Route::post('/test', 'ProductsController@store');
// Route::resource('products', 'ProductsController');
// Route::get('products/{id}', function ($id) {
//     return array(
//       1 => "expertphp",
//       2 => "demo"
//     );
// });
Route::resource('/products', 'ProductsController');
Route::post('/products', 'ProductsController@store');
Route::get('/products/view/{trash}', 'ProductsController@view');
Route::put('/products/stok/{id}', 'ProductsController@insert_stock');

Route::resource('/brands', 'BrandsController');
Route::post('/brands', 'BrandsController@store');
Route::get('/brands/view/{trash}', 'BrandsController@view');

Route::resource('/categories', 'CategoriesController');
Route::post('/categories', 'CategoriesController@store');
Route::get('/categories/view', 'CategoriesController@view');

    Route::post('/add_apps', [
            'as' => '/api/add_apps',
            'uses' => 'UserVendorController@store',
        ]);