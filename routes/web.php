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

Route::get('/accueil',"AccueilController@index");

Route::get('/Employ',"EmployController@index" );

Route::get('/contacts', "ProductsController@index" );
 
Route::get("/productions/{id}", function ($id) {
    return "je suis un productions $id";
});

Route::resource('Product','ProductsController');
Route::get("/Product/edit/{id}","ProductsController@edit")->name('editer_produit');
Route::patch("/Product/edit/{id}","ProductsController@update")->name('update_produit');

Route::resource('Employ','EmploysController');
Route::get("/Employ/edit/{id}", "EmploysController@edit")->name('editer_Employs');


Route::resource('/Occupation','OccupationsController');

Route::resource('/Department','DepartmentController');

Route::resource('/Materiel','MaterielController');



Route::get("/productions/{id}","HomeController@show");











