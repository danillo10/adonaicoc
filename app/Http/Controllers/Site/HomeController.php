<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contato;

use Mail;

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

		Mail::to('contato@adonaicoc.com.br')->send();

		$errors = new MessageBag(['mensagem' => ['E-mail enviado com sucesso.']]);
		return Redirect::back()->withErrors($errors)->withInput(Input::except('mensagem'));


	}

}
