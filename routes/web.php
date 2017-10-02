<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/token', 'AuthenticateController@makeToken');

Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

// Route::get('{projectName}/overview', 'HomeController@project')->name('project');
Route::get('/overview', 'HomeController@landing')->name('overview');
// Route::get('/home', 'HomeController@project')->name('home');
Route::get('/price', 'HomeController@price')->name('price');
   
Route::group(['prefix' => 'setting', 'middleware' => 'auth'], function(){
    Route::get('/', 'SettingController@index')->name('setting');
    Route::get('/profile', 'SettingController@profile')->name('profile');
});

Route::group(['prefix' => 'doc'], function(){
    Route::get('/', 'UsageController@index')->name('doc');
});

Route::group(['prefix' => '{projectName}', 'middleware' => 'auth'], function(){
    Route::get('/overview', 'HomeController@project')->name('project');

    Route::get('/manage', 'HomeController@manage');
    Route::resource('/products', 'ProductsController');
    Route::post('/products/importExcel', 'ProductsController@create_from_excel');
    // Route::resource('/products', 'ProductsController');
    // Route::post('/products', 'ProductsController@store');
    // Route::get('/products/view/{trash}', 'ProductsController@view');
    // Route::put('/products/stok/{id}', 'ProductsController@insert_stock');

    // Route::resource('/brands', 'BrandsController');
    // Route::post('/brands', 'BrandsController@store');
    // Route::get('/brands/view/{trash}', 'BrandsController@view');

    // Route::resource('/categories', 'CategoriesController');
    // Route::post('/categories', 'CategoriesController@store');
    // Route::get('/categories/view', 'CategoriesController@view');
});
Route::post('/products/importExcelSave', 'ProductsController@store_from_excel');

Route::get('/setting', 'SettingController@index')->name('setting');
Route::get('/usage', 'UsageController@index')->name('usage');

Route::get('importExport', 'testController@importExport');
Route::get('downloadExcel/{type}', 'testController@downloadExcel');
Route::post('importExcel', 'testController@importExcel');

// Route::prefix('services')->group( function(){
    // Route::post('/add_apps', [
    //         'as' => '/add_apps',
    //         'uses' => 'UserVendorController@store',
    //     ]);

Route::resource('/application', 'UserVendorController');

// });

// Route::resource('products', 'ProductsController');
Route::put('/test', 'ProductsController@store');

Route::get('/faker', function(){
  
    $faker = Faker\Factory::create('id_ID');

    for($i=0;$i<10;$i++){
        $tmp['name'] = $faker->name;
        $tmp['phone'] = $faker->phoneNumber;
        $tmp['address'] = $faker->address;
        $tmp['phone_other'] = $faker->phoneNumber;
        
        $data[] = $tmp;
        // Supplier::create($data);
    }
    return $data;
});