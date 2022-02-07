<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);


Route::get('/','IndexController@index')->name('home');
Route::get('/reservaciones','ReservationController@index')->name('reservaciones');
Route::get('/nosotros','AboutController@index')-> name('nosotros');
Route::get('/category', 'EventCategoyController@index')->name('Categoria');
Route::get('/alone', 'EventAloneController@index')->name('Individual');
Route::get('/menu', 'PageMenuControlle@index')-> name('Menus');
Route::get('/404', 'Page404Controller@index')-> name('404');
Route::get('/galeria', 'PageGaleriaControll@index')-> name('Galeria');
Route::get('/equipo', 'PageTeamControl@index')-> name('Equipo');
Route::get('/categoria', 'BlogCategoriaControl@index')-> name('Blog Categoria');
Route::get('/individual', 'BlogIndividualController@index')-> name('Blog Individual');
Route::get('/contacto','ContactoController@index')-> name('contacto');



Route::get('/dashboard','DashboardController@index')->name ('Dashboard');
Route::get('/inbox','InboxController@index')->name ('Inbox');
Route::get('/email','EmailController@index')->name ('Email');
Route::get('/ecompose','EcomposeController@index')->name ('Compose');
Route::get('/start','StarterController@index')->name ('Start');

Route::get('/users','UserController@index')->name('users');
Route::post('/user-store','UserController@store');
Route::post('/user-update','UserController@update');
Route::post('/user-update-state','UserController@updateState');
