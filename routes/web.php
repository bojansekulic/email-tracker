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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [

    'as'=>'home',
    'uses'=>'EmailController@index'
]);

Route::post('send', [

    'as'=>'sendmail',
    'uses'=>'EmailController@sendEmail'
]);




//Route::post('generate', [
//
//    'as'=>'generate',
//    'uses'=>'EmailController@generateUrl'
//]);
//
//
//Route::get('url', [
//
//    'as'=>'url',
//    'uses'=>'EmailController@url'
//]);
