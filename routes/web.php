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
    return redirect()->route('login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student', 'StudentController');

Auth::routes();

Route::post('storeLibrarian', 'LibrarianController@register')->name('storeLibrarian');
Route::get('registerLibrarian', 'LibrarianController@create')->name('registerLibrarian');
Route::resource('book', 'BookController');
Route::resource('profile', 'ProfileController');
Route::resource('borrow', 'BorrowController');
Route::resource('notif', 'NotifController');
