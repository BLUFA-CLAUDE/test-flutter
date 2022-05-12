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


/*
//Pour definir les route web
Route::get('contact', function(){
    return view('contact');
});
*/
//2ème partie: les routes
//pour faire plus simple vue que les route par defaut utilise get
Route::view('contact','contact');

Route::get('a-propos', function(){
    return view('a-propos');
});

Route::get('clients', 'ClientsController@list');
