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

Route::get('/signout','Auth\LoginController@logout')->name('singout');

Route::get('/','FrontendController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/storage/images/product/{image}',['uses'=>'MediaController@view'])->name('image');

Route::group(['prefix'=>'admin' , 'middleware'=>['auth','role:admin']],function(){


	route::get('/payment/image/{image}','MediaController@viewConfirmation')->name('view.confirmation');
	route::get('/payment/','Admin\PaymentController@view')->name('view.payment');
	route::get('/payment/edit/{id}','Admin\PaymentController@edit')->name('payment.admin.edit');
	route::patch('/payment/update','Admin\PaymentController@update')->name('payment.admin.update');	
	
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
	
	route::get('/invoice','UserController@invoice')->name('user.invoice');

	route::post('/invoice/delete','User\InvoiceController@destroy')->name('invoice.delete');

	route::get('/payment/{id}','User\InvoiceController@payment')->name('user.payment');
	route::post('/payment/pay','User\PaymentController@store')->name('payment.pay');

	route::get('/show/{id}','UserController@view')->name('show.product');
	route::post('/product/add','User\ProductController@store')->name('user.product.add');
});
