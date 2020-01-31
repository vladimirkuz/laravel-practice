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

// define all routes here

//Route::get('/', function () {
//    return view('welcome'); // return the html file in views/welcome.blade.php
//});

// use controller file to deal with all logic (in this case relating to home page)

Route::get('/', 'HomeController@index'); //@(function name) in HomeController.php

Route::post('/create', 'MessageController@create'); // for the form
// create is form action

Route::get('/message/{id}', 'MessageController@view');



// models are usually linked to database tables
