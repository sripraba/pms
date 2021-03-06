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
Route::middleware(['auth'])->group(function () {
	Route::get('/logout', function(){
		auth()->logout();
		return redirect('/');
	});
	Route::get('/', 'HomeController@dashboard')->name('home');
	Route::resource('/passwords', 'PasswordController');
	Route::resource('/hostings', 'HostingController');
});
Auth::routes();


