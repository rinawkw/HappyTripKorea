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


Route::get('/blog', function () {
    return view('blog.index');
});
//=======
Route::get('/home/lihatpost', function () {
    return view('/admin/lihatpost');
});
Route::get('/home/tambahpost', function () {
    return view('/admin/createpost');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//>>>>>>> cc554d19fff17dd1d7669b4c0028684912407e09
