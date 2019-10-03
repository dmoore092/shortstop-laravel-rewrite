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

Route::get('register/request', 'Auth\RegisterController@requestInvitation')->name('requestInvitation');
Route::post('invitations', 'InvitationsController@store')->middleware('guest')->name('storeInvitation');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        if (Auth::user()->role == 'admin')
            //return redirect('admin');
            return view('admin');
        elseif (Auth::user()->role == 'player')
            return view('profile');
        else
            return redirect('error');
    });
    Route::get('error', function () {
        return "Sorry, you are unauthorized to access this page.";
    });
});

Route::get('/profile/{id}', 'HomeController@index')->name('profile');
