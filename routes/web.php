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


Route::group(['middleware'=>'auth'], function(){
	
	//tag 
	Route::get('/tags', 'TagController@create')->name('tag.create');
	Route::post('/tags/store', 'TagController@store')->name('tags.store');

	Route::get('/ingredients', 'IngredientController@create')->name('ingredient.create');
	Route::post('/ingredients/store', 'IngredientController@store')->name('ingredient.store');

});