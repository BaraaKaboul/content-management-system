<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();
Route::post('logout',[LoginController::class,'logout'])->name('logout');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() { //...
                                                                                        //ال as متل كأنو عمل قلو dashboard.dashboard  .  dashboard.settings
        Route::group(['prefix' => 'dashboard','controller' => SettingsController::class,'as' => 'dashboard.'],function (){
            Route::get('/', 'index')->name('dashboard');

            Route::group(['middleware' => ['auth','checkAuth']],function (){
                Route::get('/settings', 'showSettings')->name('settings');
                Route::post('/store', 'store')->name('sittings.store');
            });
        });


});




