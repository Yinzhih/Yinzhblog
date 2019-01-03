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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/home', function () {
//    return view('home.index');
//});


Route::namespace('Home')->group(function (){
    Route::get('/','IndexController@index');
    Route::get('/article/{id}','IndexController@article');
});


// 后台登录页面
Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::prefix('login')->group(function() {
        // 登录页面
        Route::get('index', 'LoginController@index')->middleware('admin.login');
        // 退出
        Route::get('logout', 'LoginController@logout');
    });
});


// auth
Route::prefix('auth')->namespace('Auth')->group(function(){
    // 后台登录
    Route::prefix('admin')->group(function () {
        Route::post('login', 'AdminController@login');
    });
});

//admin 模块
Route::prefix('admin')->namespace('admin')->middleware('admin.auth')->group(function(){

    Route::prefix('index')->group(function(){
        Route::get('index','IndexController@index');
    });

    //文章管理
    Route::prefix('article')->group(function(){
        Route::get('index','ArticleController@index');
        Route::get('create','ArticleController@create');
        Route::post('store','ArticleController@store');
        Route::get('edit/{id}','ArticleController@edit');
        Route::post('update/{id}','ArticleController@update');
        Route::get('destroy/{id}','ArticleController@destroy');
        Route::get('restore/{id}','ArticleController@restore');
        Route::get('forceDelete/{id}','ArticleController@forceDelete');
    });

    //分类管理
    Route::prefix('category')->group(function(){
        Route::get('index','CategoryController@index');
        Route::get('create','CategoryController@create');
        Route::post('store','CategoryController@store');
        Route::get('edit/{id}','CategoryController@edit');
        Route::post('update/{id}','CategoryController@update');
        Route::get('destroy/{id}','CategoryController@destroy');
        Route::get('restore/{id}','CategoryController@restore');
        Route::get('forceDelete/{id}','CategoryController@forceDelete');
    });
    //标签管理
    Route::prefix('tag')->group(function(){
        Route::get('index','TagController@index');
        Route::get('create','TagController@create');
        Route::post('store','TagController@store');
        Route::get('edit/{id}','TagController@edit');
        Route::post('update/{id}','TagController@update');
        Route::get('destroy/{id}','TagController@destroy');
        Route::get('restore/{id}','TagController@restore');
        Route::get('forceDelete/{id}','TagController@forceDelete');
    });



});



Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
