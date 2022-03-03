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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', function () {
    // lettura dal DB
    $array_fumetti = config('comics');
    
    // logica filtro sui dati

    // restituisco la vista
    return view('fumettiLista',['fumetti'=>$array_fumetti]);
});
