<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admins routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admins" middleware group. Now create something great!
|
*/


Route::middleware(['auth:admin'])->group(function () {

    /*========Main========*/
    Route::get('/', 'DashboardController@index')->name('/');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::resource('navigations','NavigationController')->except(['show']);

    /*========Ecommerce========*/
    Route::resource('/shops','ShopController');
    Route::resource('/shop/list/register','ShopListRegisterController');
    Route::resource('/shop/list/approve','ShopListApproveController');
    Route::resource('/shop/list/block','ShopListBlockController');
    Route::resource('/shop/list/reject','ShopListRejectController');

    //Role
    Route::resource('roles','RoleController')->except([
        'show'
    ]);

    //Role
    Route::resource('permissions','PermissionController')->except([
        'show'
    ]);

    //User
    Route::resource('users','UserController');

    //profile
    Route::resource('profile', 'ProfileController');
    Route::get('/logout', function () {
        \auth()->logout();
        return redirect('/login');
    })->name('logout');

});
Auth::routes(['register']);
