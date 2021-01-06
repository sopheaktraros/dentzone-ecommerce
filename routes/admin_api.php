<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ADMIN API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:admin')->group(function (){
    Route::prefix('admin')->group(function () {
        Route::name('admin.')->group(function () {
            Route::apiResources([
                'navigations'=>'NavigationController',
                'shops' => 'ShopController',
                'roles' => 'RoleController',
                'permissions' => 'PermissionController',
                'users' => 'UserController',
            ]);
        });
    });
});
