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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('vakken')->group(function(){
    Route::get('/', 'VakkenController@index');
    Route::get('/toevoegen', 'VakkenController@toevoegen');
    Route::post('/opslaan', 'VakkenController@opslaan');
});

Route::prefix('serverside')->group(function(){
    Route::get('/', 'OpdrachtenController@serverside');
    Route::get('/customers/overview', 'CustomerController@overview');
    Route::get('/customer/{id}/overview', 'CustomerController@allBought');
    Route::get('/customer/{uid}/product/{pid}/{oid}', 'CustomerController@productSelect');
});

Route::prefix('clientside')->group(function(){
    Route::get('/', 'OpdrachtenController@clientside');
    Route::get('/calendar', 'CalendarController@index');
    Route::post('/calendar/save', 'CalendarController@save');
    Route::get('/calendar/get', 'CalendarController@getEvent');
});

//Route::prefix('/{vak}')->group(function(){
//    Route::get('/', 'VakkenController@dynamic');
//    Route::get('/{opdracht}', 'VakkenController@dynamic');
//    Route::get('/{opdracht}/{page}', 'VakkenController@dynamic');
//    Route::post('/{opdracht}/save', 'VakkenController@dynamic');
//});

//naw
//aantal
//product
//btw
//totaal
//subtotaal
//6 21%
//totaal
//dienst 6%
//product 21%