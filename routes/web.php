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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Creating and storing medicine
Route::get('/medicine/create', 'MedicineController@create');
Route::post('/medicine/create', 'MedicineController@store');

//Viewing medicines
Route::get('/medicines','MedicineController@index');

//Route for a pharmarcist to choose the medicines for a patient
Route::get('/medicines/choose', 'MedicineController@choose');

//Searching for the key word entered by the pharmacist
Route::get('/medicine/search/{key_word}', 'MedicineController@search');
