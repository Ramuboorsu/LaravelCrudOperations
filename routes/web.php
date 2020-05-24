<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\Router;

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

//Opens Register page
// Route::any('/Register',function(){
// return view('crudOperations.Register');
// });
Route::view('Register','crudOperations.Register');

// //insert data after register successfull
Route::any("/insert",'CrudOperationsController@store');