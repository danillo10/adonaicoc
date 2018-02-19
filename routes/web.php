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

/* 
	ROTAS DE ABERTURA DE PÁGINAS 
*/
Route::get('/contato', ['as'=>'site.contato', 'uses'=>'Site\HomeController@contato']);
Route::get('/eventos', ['as'=>'site.eventos', 'uses'=>'Site\HomeController@eventos']);
Route::get('/ensino-medio', ['as'=>'site.ensinomedio', 'uses'=>'Site\HomeController@ensinoMedio']);
Route::get('/ensino-fundamental', ['as'=>'site.ensinofundamental', 'uses'=>'Site\HomeController@ensinoFundamental']);
Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@principal']);
