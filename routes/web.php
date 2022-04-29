<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {

//      return view('index');

// });

 Route::get('/', 'IndexController@index');

 Route::post('/get-quote', 'QuoteController@getQuote');
 Route::post('/completequote', 'QuoteController@completeQuote');
 Route::post('/completequote-steptwo', 'QuoteController@completeQuoteTwo');
//  Route::post('/place-order', 'QuoteController@placeOrder');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'admin']], function () {
  
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // });

    Route::get('/dashboard', 'DashboardController@Home');

    Route::get('add-category', 'CategoryController@addCategory');
    Route::post('/save-category', 'CategoryController@saveCategory')->name('save-category');
    Route::get('/view-categories', 'CategoryController@listCategory')->name('view-categories');
    Route::post('/updatehome', 'CategoryController@updateHome')->name('/updatehome');
   // Route::post('/updatestatus', 'CategoryController@updateStatus')->name('/updatestatus');
    //Route::post('/update-order', 'CategoryController@updateOrder')->name('/update-order');
    Route::post('/update-category/{id}', 'CategoryController@updateCategory');
    Route::get('/edit-category/{id}', 'CategoryController@editCategory');
    Route::get('/category-delete/{id}', 'CategoryController@deleteCategory');

    Route::get('add-subcategory', 'CategoryController@addSubCategory');
    Route::post('save-subcategory', 'CategoryController@saveSubCategory');

    Route::get('/products', 'ProductController@index');
    Route::post('/add-product', 'ProductController@addProduct');
    Route::get('/edit-product/{prod_id}', 'ProductController@edit');
    Route::post('/update-product/{id}', 'ProductController@update');
    Route::post('/update-product-status/', 'ProductController@updateStatus');
    Route::get('/product-delete/{id}', 'ProductController@delete');

    // Orsers
    Route::get('/orders', 'OrderController@orderList');
    Route::get('/order-edit/{id}', 'OrderController@edit');
    Route::post('/update-order-status/', 'OrderController@updateStatus');
    Route::get('/order-details/{id}', 'OrderController@orderDetails');
    Route::post('/update-order-details-status/{id}', 'OrderController@updateDetailsStatus');


    // Quotes
    Route::get('/quotes', 'QuoteController@quoteList');
    Route::post('/update-quote-status/', 'QuoteController@updateStatus');


    // Product Dashboard

    Route::get('/product/dashboard/{prod_id}', 'ProductDashboardController@index');

    Route::get('/freight/{prod_id}', 'FreightController@index');
    Route::post('/add-freight/{id}', 'FreightController@addFreight');
    Route::post('/update-freight-price/{id}', 'FreightController@updatePrice');
    Route::get('/edit-freight/{prod_id}/{id}', 'FreightController@editFreight');
    Route::post('/update-freight/{id}', 'FreightController@update');
    Route::get('/delete-freight/{id}', 'FreightController@delete');

    Route::get('/packaging/{prod_id}', 'PackagingController@index');
    Route::post('/add-packaging/{prod_id}', 'PackagingController@addPackaging');
    Route::get('/edit-packaging/{prod_id}/{id}', 'PackagingController@editPackaging');
    Route::post('/update-packaging/{id}', 'PackagingController@update');
    Route::get('/delete-packaging/{id}', 'PackagingController@delete');

    Route::get('/certificate/{prod_id}', 'CertificateController@index');
    Route::post('/add-certificate/{prod_id}', 'CertificateController@addCertificate');
    Route::get('/edit-certificate/{prod_id}/{id}', 'CertificateController@editCertificate');
    Route::post('/update-certificate/{id}', 'CertificateController@update');
    Route::get('/delete-certificate/{id}', 'CertificateController@delete');

    // update certification description
    Route::post('/update-certificate-description/{prod_id}', 'ProductDetailsController@updateCertificationDescription');

    // Edit Product Description
    Route::get('/product-description/{prod_id}', 'ProductDetailsController@productDescription');

    // update product description
    Route::post('/update-product-description/{prod_id}', 'ProductDetailsController@updateProductDescription');


    // Edit Farming Production
    Route::get('/farming-production/{prod_id}', 'ProductDetailsController@farmingProduction');

    // update farming production
    Route::post('/update-farming-production/{prod_id}', 'ProductDetailsController@updateFarmingProduction');

    // Gallery

    Route::get('/gallery/{prod_id}', 'GalleryController@index');
    Route::post('upload-images/{prod_id}', 'GalleryController@upload');
    Route::get('/delete-image/{id}', 'GalleryController@delete');

    // Variants

    Route::get('/variants/{prod_id}', 'VariantController@index');
    Route::post('/add-variant/{prod_id}', 'VariantController@addVariant');
    Route::get('/edit-variant/{prod_id}/{id}', 'VariantController@editVariant');
    Route::post('/update-variant/{id}', 'VariantController@update');
    Route::get('/delete-variant/{id}', 'VariantController@delete');


    //Type

    Route::get('/type/{prod_id}', 'TypeController@index');
    Route::post('/add-type/{prod_id}', 'TypeController@addType');
    Route::get('/edit-type/{prod_id}/{id}', 'TypeController@edit');
    Route::post('/update-type/{id}', 'TypeController@update');
    Route::get('/delete-type/{id}', 'TypeController@delete');


    //Qality

    Route::get('/quality/{prod_id}', 'QualityController@index');
    Route::post('/add-quality/{prod_id}', 'QualityController@addQuality');
    Route::get('/edit-quality/{prod_id}/{id}', 'QualityController@edit');
    Route::post('/update-quality/{id}', 'QualityController@update');
    Route::get('/delete-quality/{id}', 'QualityController@delete');

    // Price
    Route::get('/price/{prod_id}', 'PriceController@index');
    Route::post('/update-price/{prod_id}/{vid}', 'PriceController@update');



    // Cutomers
    Route::get('/customers', 'User\CustomerController@index');
    Route::get('/customer-deatils/{id}', 'User\CustomerController@customerById');
    Route::get('/customer-edit/{id}', 'User\CustomerController@edit');
    Route::post('/customer-update/{id}', 'User\CustomerController@update');

    // country and ports

    Route::post('/get_port','CountryPortController@getPort')->name('ajaxdata.get_port');
    
    
    

});

//Route::group(['middleware' => ['user']], function () {
    Route::group(['middleware' => ['auth', 'user']], function () {

    //Route::get('/products-list', 'ProductController@listProducts');
    //Route::get('/product-details/{prod_id}', 'ProductController@productById');

    Route::post('/generate-quote/{prod_id}', 'QuoteController@generateQuote');
    Route::post('/calculate-quote/{prod_id}', 'QuoteController@calculateQuote');

    Route::post('/place-orders', 'QuoteController@placeOrder');
    Route::get('/orderplace', 'QuoteController@orderPlace');

    Route::get('/mydashboard', 'UserDashboardController@index');

    

    // Route::get('/test', function () {

    //     return "dasdasda";
        
    //      });
    
    


});

Route::get('/products-list', 'ProductController@listProducts');
Route::get('/product-details/{prod_id}', 'ProductController@productById');
Route::post('signup', 'User\SignupController@userRegister');
Route::get('/getotp', 'User\SignupController@getOtp');
Route::post('/verifyotp', 'User\SignupController@verifyOtp');
Route::post('/get_ports','CountryPortController@getPort')->name('ajaxdata.get_ports');
Route::get('/customer-login', 'User\CustomerController@customerLogin');
Route::get('/about', 'PagesController@aboutUs');
Route::get('/userlogin', 'User\CustomerController@userLogin');

// Route::get('/userlogin', function () {

//         return view('user-login');
        
// });