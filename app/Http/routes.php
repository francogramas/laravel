<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('errores', function () {
    return view('errors/503');
});

Route::get('foo', function () {
    return 'HOLA MUNDO!!!!!';
});

Route::get('vistas', function () {
    return view('vistasPrueba/vistas');
});

Route::post('vistas', function () {
    return 'Notas creadas';
});


Route::get('notas/{nota}/{otra?}', function ($nota,$otra=null) {    
    dd($nota,$otra);
})->where(['nota' => '[0-9]+']);