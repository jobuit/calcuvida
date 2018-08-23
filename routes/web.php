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

//Abre por defecto la pagina WELCOME
Route::get('/','welcome\ControllerWelcome@index');

//CALCULADORA
//Abre la pagina inicial de la calculadora
Route::get('calculadora','calculadora\ControllerCalculadora@index')->name('calculadora');
//Busca alimentos de la base de datos
Route::get('buscarAlimentos', 'calculadora\ControllerCalculadora@buscarAlimentos')->name('buscarAlimentos');
//Selecciona un alimento de la base de datos con el id
Route::get('cogerAlimento', 'calculadora\ControllerCalculadora@cogerAlimento')->name('cogerAlimento');

//DIABETES
//Abre la pagina inicial de que es la diabetes
Route::get('informacion_diabetes','diabetes\InformacionDiabetesController@index')->name('informacion_diabetes');
//Abre la pagina del conteo de carbohidratos
Route::get('conteo_carbohidratos','diabetes\InformacionDiabetesController@conteoCarbohidratos')->name('conteo_carbohidratos');
//Abre la pagina de diabetes gestacional
Route::get('diabetes_gestacional','diabetes\InformacionDiabetesController@diabetesGestacional')->name('diabetes_gestacional');
//Abre la pagina de aprender a contar carbohidratos
Route::get('aprender_contar_carbohidratos','diabetes\InformacionDiabetesController@diabetesGestacional')->name('aprender_contar_carbohidratos');

