@extends('layout.site')

@section('titulo', '.:: Adonai COC - Estrutura ::.')

@section('conteudo')

<div class="container-fluid">
	<div class="row secao-site">
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
		<div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 p-0 d-flex-row-start">
			<div class="titulo-secao">
				<h1>Estrutura Física da Escola</h1>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
			<div class="titulo-secao">
				
			</div>
		</div>
		<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
	</div>
</div>

<div class="container">
	<div class="row mt-4">
		<div class="col-sm-8 col-md-8 col-lg-9 col-xl-9 pr-3">
			<p class="geral">O Instituto Educacional Adonai é uma instituição de Educação Infantil, Ensino Fundamental, Ensino Médio e Educação Profissional Técnica de Nível Médio e possui uma estrutura física composta da seguinte forma:</p>

			<ul style="color:#777">
				<b>TÉRREO:</b>
				<li>1 recepção</li>
				<li>1 sala de direção</li>
				<li>1 sala de vice-direção</li>
				<li>1 sala de secretaria acadêmica</li>
				<li>1 sala de secretaria financeira</li>
				<li>1 sala de coordenador (Educação Infantil / Ensino Fundamental I)</li>
				<li>1 sala de Informática</li>
				<li>1 sala de biblioteca</li>
				<li>1 brinquedoteca</li>
				<li>9 salas sendo: 4 destinadas para Educação Infantil; 5 salas para Ensino Fundamental I</li>
				<li>1 WC feminino contendo:</li>
				<li>1 sanitário adaptado para crianças da Educação Infantil;</li>
				<li>1 sanitário adaptado para crianças com necessidades especiais ou com mobilidade reduzida;</li>
				<li>2 sanitários para crianças do Ensino Fundamental I</li>
				<li>1 trocador;</li>
				<li>1 chuveiro.</li>
					<ul style="color:#777;list-style: none;" class="mt-3">
						<b>1 WC masculino contendo:</b>
						<li>1 sanitário adaptado para crianças da Educação Infantil;</li>
						<li>1 sanitário adaptado para crianças com necessidades especiais ou com mobilidade reduzida;</li>
						<li>2 sanitários para crianças do Ensino Fundamental I</li>
						<li>1 trocador;</li>
						<li>1 chuveiro.</li>
						<li>1 DM – depósito de material</li>
					</ul>
			</ul>
			<ul>
				<b>1º PAVIMENTO:</b>
				<li>1 – coordenação (Ensino Fundamental II e Ensino Médio)</li>
				<li>1 laboratório de ciências</li>
				<li>1 laboratório multimídia</li>
				<li>1 sala de CPD</li>
				<li>1 sala de professores</li>
					<ul class="mt-3" style="list-style: none;">
						<b>1 WC feminino contendo:</b> 
						<li>1 sanitário adaptado para alunos com necessidades especiais ou com mobilidade reduzida;</li>
						<li>2 sanitários </li>
						<li>1 chuveiro.</li>
					</ul>
					<ul class="mt-3" style="list-style: none;">
						<b>1 WC masculino contendo:</b> 
						<li>1 sanitário adaptado para alunos com necessidades especiais ou com mobilidade reduzida;</li>
						<li>2 sanitários</li>
						<li>1 chuveiro.</li>
						<li>9 salas destinadas para o ensino fundamental II, ensino médio e cursos técnicos</li>
					</ul>
			</ul>
			
			<ul>
				<b>ÁREA EXTERNA:</b>
				<li>1 playground</li>
				<li>1 pátio descoberto</li>
				<li>1 praça de alimentação</li>
				<li>1 piscina</li>
				<li>1 quadra poliesportiva coberta</li>
				<li>1 ginásio poliesportivo coberto</li>
			</ul>
			
			<ul>
				<b>EM FASE DE CONSTRUÇÃO</b>
				<li>1 salão de jogos</li>
				<li>1 sala de departamento</li>
				<li>1 lanchonete / cozinha</li>
				<li>1 depósito</li>
				<li>1 WC feminino</li>
			</ul>

			<ul>
				<b>SUBSOLO</b>
				<li>1 sala de cinema</li>
				<li>1 sala de ballet</li>
			</ul>
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