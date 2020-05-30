<?php

use Illuminate\Support\Facades\Route;

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

// Guest Routing...
Route::get('/', function () {
    return view('site');
});
Route::get('/about', function () {
    return view('guest.about');
});
Route::get('/userPackage', 'ContactController@guestPackage');
Route::get('/userChannel', function () {
    return view('guest.channelList');
}); 
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@store');
Route::get('/userMessage','ContactController@userMessage');
Route::get('/userMessageDelete/{message_id}','ContactController@userMessageDelete');

//User Routing...
Auth::routes();
Route::get('/package','PackageController@index');
Route::get('/userChannel', function () {
    return view('guest.channelList');
}); 

// Admin Routing...
Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/userDashboard', 'HomeController@userDashboard')->name('userDashboard');
    });
    Route::get('/userProfile/{user_id}','UserController@userProfile');

    Route::middleware(['admin'])->group(function () {
        Route::get('/adminDashboard', function () {
            return view('adminDashboard');
        });
        Route::get('/confirmPayment','UserController@confirmPayment');
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
        Route::post('/confirm/{user_id}','UserController@confirm');

        // create Admin Routing for add,delete user and package
        Route::get('/addUser','UserController@create');
        Route::post('/storeUser','UserController@store');
        Route::get('/deleteUser','UserController@deleteIndex');
        Route::get('/deleteUser/{user_id}','UserController@delete');
        Route::get('/addPackage','PackageController@create');
        Route::post('/storePackage','PackageController@store');
        Route::get('/deletePackage','PackageController@deleteIndex');
        Route::get('/deletePackage/{package_id}','PackageController@delete');
    });
});

// Authentication Routes...
Route::get('/admin/login', function () { return view('auth/login2'); });
Route::get('login2', 'Auth\LoginController2@showLoginForm')->name('login2');
Route::post('login2', 'Auth\LoginController2@login');
Route::post('logout2', 'Auth\LoginController2@logout')->name('logout2');


