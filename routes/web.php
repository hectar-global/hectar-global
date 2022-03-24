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

Route::get('/', function () {
    // return view('index');

    return "Home";
});

// Route::get('/', 'IndexController@index');


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
    Route::get('/edit-product/{id}', 'ProductController@edit');
    Route::post('/update-product/{id}', 'ProductController@update');
    Route::post('/update-product-status/', 'ProductController@updateStatus');
    Route::get('/product-delete/{id}', 'ProductController@delete');


    // Product Dashboard

    Route::get('/product/dashboard/{id}', 'ProductDashboardController@index');


    // Route::get('/add-news', 'PostController@addPost');

    // Route::post('/save-news', 'PostController@saveNews');
    // Route::get('/view-news', 'PostController@postList');

    // Route::get('/edit-news/{id}', 'PostController@editPost');
    // Route::post('/update-news/{id}', 'PostController@updatePost');
    // Route::get('/news-delete/{id}', 'PostController@deletePost');
    //Route::get('/news/{id}', 'PostController@postByCategory');

    // Route::get('/add-video', 'VideoController@addVideo');
    // Route::post('/save-video', 'VideoController@saveVideo');
    // Route::get('/video-list', 'VideoController@videoList');
    // Route::get('/edit-video/{id}', 'VideoController@editVideo');
    // Route::post('/update-video/{id}', 'VideoController@updateVideo');
    // Route::get('/video-delete/{id}', 'VideoController@deleteVideo');
    // Route::post('/search-news', 'PostController@searchNews');


});

// Route::get('/news/{id}', 'PostController@subHome');
// Route::get('/details/{category}/{cate_name}', 'PostController@postDetails');
// Route::get('/detail-news/{id}/{title}', 'PostController@postDetails');
// Route::get('/video', 'VideoController@listVideo');

// Route::get('/ourteam', 'PostController@teamPage');
