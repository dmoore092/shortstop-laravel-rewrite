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

Route::get('/home', function () {
    return view('welcome');
});

// Auth scaffolding
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

/**
 * Override the default auth register route to add middleware.
 */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('hasInvitation');
Route::get('register/request', 'Auth\RegisterController@requestInvitation')->name('requestInvitation');

/**
 * Invitations group with auth middleware.
 * Eventhough we only have one route currently, the route group is for future updates.
 */
Route::group([
    'middleware' => ['auth', 'admin'],
    'prefix' => 'invitations'
], function() {
    Route::get('', 'InvitationsController@index')->name('showInvitations');
});

/**
 * Route for storing the invitation. Only for guest users.
 */
Route::post('invitations', 'InvitationsController@store')->middleware('guest')->name('storeInvitation');
