<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within accueil group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   
     return view('accueil');
     
});

Route::get('/accueil',"AccueilController@index");
Route::resource('/Contact',"ContactlistController");
Route::get('/contacts', "ProductsController@index" );

Auth::routes(); //la route pour authentification

// Auth::routes(['login' => false]); ca permet  de retire l'affiche du button login

// Route::get('/User',"UsersController@Afficher");

// Route::get('/Employ',"EmployController@index" );



Route:: group(['middleware'=>'auth'], //groupe middleware avec la page d'accueil.
        function(){
   //  Route::get('/accueil',"AccueilController@index");

  Route::resource('Employ','EmploysController');
Route::get("/Employ/edit/{id}", "EmploysController@edit")->name('editer_employs');
Route::patch("/Employ/edit/{id}", "EmploysController@update")->name('update.Employs');


   Route::resource('Production','ProductionsController'); 
Route::get("/Production/edit/{id}", "ProductionsController@edit")->name('productions.edite');
Route::patch("/Production/edit/{id}", "ProductionsController@update")->name('update.Production');

   Route::resource('Product','ProductsController');
Route::get("/Product/edit/{id}","ProductsController@edit")->name('products.edit');
Route::patch("/Product/edit/{id}","ProductsController@update")->name('update_produit');
   Route::resource('Parcel','ParcelController');
Route::get("/Parcel/edit/{id}", "ParcelController@edit")->name('parcelles.edit');
Route::patch("/Parcel/edit/{id}", "ParcelController@update")->name('update.parcels');


Route::resource('/Occupation','OccupationsController');

Route::resource('/Department','DepartmentController');
//Route::get("/Department/edit/{id}","DepartmentController")->name('departments.edit');
//Route::patch("/Department/edit/{id}","DepartmentController")->name('departments.update');

   Route::resource('/Materiel','MaterielsController');
Route::get("/Materiel/edit/{id}","MaterielsController@edit")->name('Materiel.edit');
Route::patch("/Materiel/edit/{id}","MaterielsController@update")->name('Materiel.update');

   Route::resource('/User','usersController');
Route::get("/User/edit/{id}","usersController@edit")->name('User.edit');
Route::patch("/User/edit/{id}","usersController@update")->name('User.update');

   Route::resource ('/Client','ClientsController');
Route::get("/Client/edit/{id}","ClientsController@edit")->name('Client.edit');
Route::patch("/Client/edit/{id}","ClientsController@update")->name('Client.update');

    Route::resource('/Command','CommandesController');
Route::get("/Command/edit/{id}","CommandesController@edit")->name('command.edit');
Route::patch("/Command/edit/{id}","CommandesController@update")->name('Command_update');



});







//Route::get('/accueil', 'HomeController@index');

// Auth::routes();














