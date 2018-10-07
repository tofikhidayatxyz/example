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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/storage/images/product/{image}',['uses'=>'MediaController@view'])->name('image');

Route::group(['prefix'=>'admin' , 'middleware'=>['auth','role:admin']],function(){
 	route::get('/','AdminController@index')->name('admin.home');
 	route::get('/store','Admin\StoreController@add')->name('admin.store');
 	route::get('/product/list','Admin\StoreController@index')->name('admin.list');
 
 	route::post('/product/store/create','Admin\StoreController@store')->name('admin.create');
 	route::patch('/product/store/update','Admin\StoreController@update')->name('admin.update');
 	route::post('/product/store/delete','Admin\StoreController@destroy')->name('admin.destroy');	
 	route::get('/product/store/edit/{id}','Admin\StoreController@edit')->name('admin.edit');

 	route::get('/user','AdminController@userList')->name('admin.user');
	route::get('/user/edit/{id}','Admin\UserController@edit')->name('user.edit');
	route::patch('/user/update','Admin\UserController@update')->name('user.update');


});



Route::group(['prefix'=>'user' , 'middleware'=>['auth','role:user']],function(){
	route::get('/','UserController@index')->name('user.home');
});
