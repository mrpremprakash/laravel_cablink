<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['prefix' => '/'], function () {
    Route::get('/', ['as' => 'frontend.index', 'uses' => 'frontendController@index']);
    Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'productController@dashboard']);
    Route::get('/products', ['as' => 'admin.products', 'uses' => 'productController@index']);
    Route::get('/categories', ['as' => 'admin.categories', 'uses' => 'categoryController@index']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', ['as' => 'admin.login', 'uses' => 'loginController@index']);
    Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'productController@dashboard']);
    Route::get('/products', ['as' => 'admin.products', 'uses' => 'productController@index']);
    Route::get('/product/add', ['as' => 'admin.product.add', 'uses' => 'productController@add']);
    Route::get('/categories', ['as' => 'admin.categories', 'uses' => 'categoryController@index']);
    Route::get('/category/add', ['as' => 'admin.category.add', 'uses' => 'categoryController@add']);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
