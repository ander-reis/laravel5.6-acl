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

//Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:is-admin']], function(){
//    Route::get('users', function(){
//        echo 'meus usuários';
//    });
//
//    Route::resource('post', 'PostController');
//
//});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::resource('post', 'PostController');
});

//Route::get('post/{post}/edit', function(\App\Post $post){
//    if(\Gate::denies('update-post', $post)){
//        abort(403, 'não é possível editar esse post');
//    }
//
//    if(\Gate::allows('update-post', $post)){
//        abort(403, 'não é possível editar esse post');
//    }
//    echo $post->title;
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
