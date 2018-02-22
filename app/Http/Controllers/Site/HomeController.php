<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    

    /* 
		MÉTODOS PARA ABRIR PÁGINAS
	*/

	public function principal()
	{

		return view('pagina-principal.index');

	}

	public function ensinoFundamental()
	{

		return view('pagina-ensino-fundamental.index');

	}

	public function ensinoMedio()
	{

		return view('pagina-ensino-medio.index');

	}

	public function eventos()
	{

		return view('pagina-eventos.index');

	}

	public function contato()
	{

		return view('pagina-contato.index');

	}

	public function historia()
	{

		return view('pagina-historia.index');

	}

	public function filosofia()
	{

		return view('pagina-filosofia.index');

	}

	public function fundamentacaoTeorica()
	{

		return view('pagina-fundamentacao-teorica.index');
		
	}

	public function organizacaoCurricular()
	{

		return view('pagina-organizacao-curricular.index');
		
	}

	public function estrutura()
	{

		return view('pagina-estrutura.index');

	}

	public function faleConosco()
	{

		return view('pagina-faleconosco.index');

	}

	public function enviarContato(Request $request)
	{

		$this->validate($request, [ 'nome' => 'required', 'email' => 'required|email', 'mensagem' => 'required' ]);

		$errors = new MessageBag;
		
		$status = Mail::send('emails.contato',
        array(
           'nome' => $request->get('nome'),
           'email' => $request->get('email'),
           'mensagem' => $request->get('mensagem')
        ), function($message)
		{
		   $message->from('contato@adonaicoc.com.br');
		   $message->to('contato@adonaicoc.com.br', 'Adonai COC')->subject('Contato Site');
		});

		$errors = new MessageBag(['mensagem' => ['E-mail enviado com sucesso.']]);
		return Redirect::back()->withErrors($errors)->withInput(Input::except('mensagem'));


	}

}
