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
    return view('layout');
});



Route::get('/contacts', "Productscontroller@index" );


Route::get("/productions/{id}", function ($id) {
    return "je suis un productions $id";
});
Route::get("/productions","Productscontroller@index");
Route::get("/productions","Productscontroller@index");

   
Route::get("/productions/{id}","Productscontroller@show");

Route::get("/","HomeController@index");

Route::get("/productions/{id}","HomeController@show");







