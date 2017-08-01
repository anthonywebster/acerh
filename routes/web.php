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
    return redirect('jobs');
});

//Route::domain('admin')->group(function(){
Route::prefix('jobs')->group(function() {
    Route::get('/', 'JobsController@index');
});
Route::prefix('clients')->group(function() {
    Route::get('/', 'ClientsController@index');
});

Route::get('aplicar', 'CandidateController@form');
Route::post('aplicar/listo', 'CandidateController@submit');
//});
