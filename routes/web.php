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


Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
	
	Route::get('/', function(){
	return view('admin.pages.dashboard');
	})->name('admin.home');
	
	/* User */
	Route::prefix('user')->group(function(){

			Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
			Route::delete('/','UserController@delete')->middleware('akses.admin');

			Route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
			Route::post('/add','UserController@save')->middleware('akses.admin');
			
			Route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
			Route::post('/edit/{id}','UserController@update')->middleware('akses.admin');

			Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
			Route::post('/setting','UserSettingController@update');
	});
	/* Kategori */
	Route::group(['prefix'=>'kategori','middleware'=>'akses.admin:asisten'], function(){
		Route::get('/','KategoriController@daftar')->name('admin.kategori');
		Route::delete('/','KategoriController@delete')->middleware('akses.admin');
		
		Route::get('/add','KategoriController@add')->name('admin.kategori.add');
		Route::post('/add','KategoriController@save');
		Route::get('/edit/{id}','KategoriController@edit')->name('admin.kategori.edit');
		Route::post('/edit/{id}','KategoriController@update');
	});

	/* Produk */
	Route::group(['prefix'=>'produk','middleware'=>'akses.admin:asisten'], function(){
		Route::get('/','ProdukController@daftar')->name('admin.produk');
		Route::get('/add','ProdukController@add')->name('admin.produk.add');
		Route::post('/add','ProdukController@save');
		});

});

Auth::routes();

Route::any('register', function(){ return abort(404); });