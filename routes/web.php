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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Routes des produits

Route::get('produit_list','ProduitsController@index');
Route::post('ajouter_produit', 'ProduitsController@store');
Route::get('creer_produit','ProduitsController@form');

// Routes des cathegories

Route::get('lot_list', 'LotsController@list');
Route::post('ajouter_lot', 'LotsController@store');
Route::get('lot_form', 'LotsController@create');


// //Routes des vents

Route::get('list_vente', 'VentesController@index');
Route::post('ajouter_vente', 'VentesController@store');
Route::get('form_vente', 'VentesController@create');


// // Routes des stoks

Route::get('list_stock', 'StocksController@index');
Route::post('ajouter_stock', 'StocksController@store');
Route::get('form_stock', 'StocksController@create');