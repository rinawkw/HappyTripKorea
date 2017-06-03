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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
	return view('contact.index');
});
Route::get('/about', function () {
	return view('about.index');
});

Route::get('/blog', function () {
    return view('blog.index');
});

/* Admin Routes*/
// Route::resource('blog','BlogController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/lihatpost','BlogController@lihat');
Route::get('/admin/tambahpost','BlogController@tambah');
Route::post('/admin/insertpost','BlogController@submitTambah');
Route::get('/admin/editpost/{id}','BlogController@edit');
Route::post('/admin/updatepost/{id}','BlogController@submitEdit');
Route::post('/admin/deletepost/{id}','BlogController@submitDelete');
