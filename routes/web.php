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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/setting', 'SettingController@index')->name('setting');

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