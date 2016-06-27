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
use App\Note;

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

Route::get('notes', function () {
	$notes=Note::all();
    return view('notes', compact('notes'));
});


Route::post('vistas', function () {
    return 'Notas creadas';
});



Route::get('notas/{nota}/{otra?}', function ($nota,$otra=null) {    
    dd($nota,$otra);
})->where(['nota' => '[0-9]+']);