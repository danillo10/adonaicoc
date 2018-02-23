@extends('layout.site')

@section('titulo', '.:: Adonai COC - Sistema Escolar e Organização Curricular ::.')

@section('conteudo')

<div class="container-fluid">
	<div class="row secao-site">
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
		<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 p-0 d-flex-row-start">
			<div class="titulo-secao">
				<h1>Sistema Escolar e Organização Curricular</h1>
			</div>
		</div>
		<div class="col-sm-0 col-md-2 col-lg-2 col-xl-2">
			<div class="titulo-secao">
				
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
	</div>
</div>

<div class="container">
	<div class="row mt-4">
		<div class="col-sm-8 col-md-8 col-lg-9 col-xl-9 pr-3">
			<p class="geral">Visando um melhor atendimento a clientela escolar, atualmente o Instituto Educacional Adonai oferece os seguintes segmentos:</p>
			<ul style="color:#777">
				<li>Educação Infantil;</li>
				<li>Ensino Fundamental de 1o ao 9o ano</li>
				<li>Ensino Médio (1 a série, 2a série, 3a série,)</li>
				<li>Educação Profissional Técnica de Nível Médio</li>
			</ul>
			<p class="geral">As diretrizes da Escola estão fundamentadas na Lei de Diretrizes e Bases n° 9.394/96, conforme a legislação atual de ensino.</p>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 p-0">
			<div class="info-top">
				<h4 class="title-on">Informações de Contato</h4>

				<div class="d-flex-column-start info-row p-0">
					<span class="title-info">Email</span>
					<a href="mailto:contato@adonaicoc.com.br">contato@adonaicoc.com.br</a>
				</div>

				<div class="d-flex-column-start info-row p-0 mt-3">
					<span class="title-info">Telefone</span>
					<a href="#">(99) 3592-0017</a>
				</div>

				<div class="d-flex-column-start info-row p-0 mt-3">
					<span class="title-info">Website</span>
					<a href="http://www.adonaicoc.com.br" target="_blank">www.adonaicoc.com.br</a>
				</div>

				<div class="d-flex-column-start info-row p-0 mt-3">
					<span class="title-info">Endereço</span>
					<p class="geral">Rua São Francisco, 12 QD 13, Açailândia - MA</p>
				</div>
			</div>
			<div class="info-bottom mt-4">
				<h4 class="title-on">Mantenha-se Contectado</h4>

				<p class="geral">Acesse nossas redes sociais, siga-nos e inscreva-se para ficar por dentro das novidades e informações do Instituto Educacional Adonai COC</p>

				<div class="d-flex-row-start w-100 fade-social-secao">
					<a href="#" class="null"><i class="fab fa-facebook fa-3x m-1"></i></a>
					<a href="#" class="null"><i class="fab fa-twitter-square fa-3x m-1"></i></a>
					<a href="#" class="null"><i class="fab fa-google-plus-square fa-3x m-1"></i></a>
					<a href="#" class="null"><i class="fab fa-youtube-square fa-3x m-1"></i></a>

				</div>
			</div>
		</div>
	</div>
</div>

@endsection