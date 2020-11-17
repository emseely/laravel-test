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

// Route::get('/', function () {
//     return ("Hello World");
// });



Route::get('/about-one', function () {
    //can parse html!
    return ('<h1> About World </h1>');

});


Route::get('/about', "PagesController@about");

Route::get('/users/{id}', function ($id) {
    //id == "req params id", . concatenates $id
    return "This is user ".$id;

});

Route::get('/users/{id}/{name}', function ($id, $name) {
    //can pass more thna 1 dynamic value into url
    return "This is user ".$name." with ID ".$id;

});

//ControllerName@methodname
Route::get('/', "PagesController@index");
