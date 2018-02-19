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

}
