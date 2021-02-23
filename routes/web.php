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

// Route::get('/', 'AppController@AppController')->name('app.index');

Route::prefix('/champion')->group(function(){
    Route::get('/{champ}', 'AppController@AppControllerChamp')->name('app.champ');
    Route::get('/champion/{$role}', function(){
        echo 'Role Champion';
    });
});
