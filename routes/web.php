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
//Route::prefix('elasticearch')->group(function () {
//    Route::get('test', ['uses' => 'ClientController@elasticearchTest']);
//});
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/statute', 'StatutesController@index');
Route::get('/statute/{statute}', 'StatutesController@show');

Route::prefix('section')->group(function (){
   Route::get('search', ['uses' => 'SectionController@search', 'as' => 'pages.index']);
});

