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

Route::post('login_success', function() {
    //

    // Initialize variables
    $app_id = '1412798915422551';
    $secret = '7440c3f73248a13290d907a36ebba04e';
    $version = 'v2.10'; // 'v1.1' for example

    $code = '';
      
   

    // Exchange authorization code for access token
    $token_exchange_url = 'https://graph.accountkit.com/'.$version.'/access_token?'.
      'grant_type=authorization_code'.
      '&code='.$code.
      "&access_token=AA|$app_id|$secret";
      echo $token_exchange_url;
      echo '<br>';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $token_exchange_url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $data = json_decode(curl_exec($ch), true);

      print_r($data);
      // curl_close($ch);
    // $data = doCurl($token_exchange_url);
    // $user_id = $data['id'];
    // $user_access_token = $data['access_token'];
    // $refresh_interval = $data['token_refresh_interval_sec'];

    // Get Account Kit information
    // $me_endpoint_url = 'https://graph.accountkit.com/'.$version.'/me?'.
    //   'access_token='.$user_access_token;

    // $ch = curl_init();
    //   curl_setopt($ch, CURLOPT_URL, $me_endpoint_url);
    //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //   $data = json_decode(curl_exec($ch), true);
    // curl_close($ch);
    // $data = doCurl($me_endpoint_url);
    // $phone = isset($data['phone']) ? $data['phone']['number'] : '';
    // $email = isset($data['email']) ? $data['email']['address'] : '';



});

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
    Route::post('/products/importExcel', 'ProductsController@create_from_excel');
    Route::resource('/products', 'ProductsController');
    // Route::get('/products/view/{trash}', 'ProductsController@view');
    // Route::resource('/products', 'ProductsController');
    // Route::post('/products', 'ProductsController@store');
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


Route::group(['prefix' => 'admin'], function () {
    //Login Routes...
    Route::get('/login','admin\AuthController@showLoginForm');
    Route::post('/login','admin\AuthController@authenticate');
    Route::get('/logout','admin\AuthController@logout');

    // Registration Routes...
    Route::get('/register', 'admin\AuthController@showRegistrationForm');
    Route::post('/register', 'admin\Auth\RegisterController@register');

});  
Route::group(['prefix' => 'admin','middleware' => 'auth:admin'], function () {
    //Login Routes...


    Route::resource('home', 'admin\AdminController');
    Route::resource('dashboard', 'admin\DashboardController');
    Route::resource('doc', 'admin\DocumentationController');
});  