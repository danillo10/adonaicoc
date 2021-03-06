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

Route::get('send_test_email', function(){
	Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
	{
		$message->to('contato@adonaicoc.com.br');
	});
});
Route::post('/enviar-contato', ['as'=>'site.enviarcontato', 'uses'=>'Site\HomeController@enviarContato']);
Route::get('/faleconosco', ['as'=>'site.faleconosco', 'uses'=>'Site\HomeController@faleConosco']);
Route::get('/estrutura', ['as'=>'site.estrutura', 'uses'=>'Site\HomeController@estrutura']);
Route::get('/organizacao-curricular', ['as'=>'site.organizacaocurricular', 'uses'=>'Site\HomeController@organizacaoCurricular']);
Route::get('/fundamentacao-teorica', ['as'=>'site.fundamentacaoteorica', 'uses'=>'Site\HomeController@fundamentacaoTeorica']);
Route::get('/filosofia', ['as'=>'site.filosofia', 'uses'=>'Site\HomeController@filosofia']);
Route::get('/historia', ['as'=>'site.historia', 'uses'=>'Site\HomeController@historia']);
Route::get('/contato', ['as'=>'site.contato', 'uses'=>'Site\HomeController@contato']);
Route::get('/eventos', ['as'=>'site.eventos', 'uses'=>'Site\HomeController@eventos']);
Route::get('/ensino-medio', ['as'=>'site.ensinomedio', 'uses'=>'Site\HomeController@ensinoMedio']);
Route::get('/ensino-fundamental', ['as'=>'site.ensinofundamental', 'uses'=>'Site\HomeController@ensinoFundamental']);
Route::get('/', ['as'=>'site.home', 'uses'=>'Site\HomeController@principal']);
