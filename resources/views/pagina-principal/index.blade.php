@extends('layout.site')

@section('titulo', '.:: Adonai COC - Açailândia ::.')

@section('conteudo')

	<div class="container-fluid p-0">
		<!-- SLIDER -->
		<section>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="http://via.placeholder.com/1200x400" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://via.placeholder.com/1200x400" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="http://via.placeholder.com/1200x400" alt="Third slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</section>
		<!-- FIM SLIDER -->

		<section>
			<div class="content-01">
				<!-- <h3>Adonai COC Instituto Educacional</h3>
				<h4 class="msv">Missão: Formar cidadãos, socialmente responsáveis, para atuarem como agentes tranformadores de forma empreendedora e desofiadora</h4>
				<h4 class="msv">Visão: Ser o centro de referência nacinal em aprendizagem e convivência onde as potencialidades do indivíduo possam ser desenvoldidas</h4>
				<h4 class="msv">Valores: A abordagem do Projeto Político, como organização do trabalho da escola como um todo, está fundada nos valores que deverão nortear a nossa prática pedagógica</h4> -->
			</div>
		</section>

		<section>
			<div class="mt-5 text-center">
				<h1>Sistema de Ensino COC - Apresentação</h1>
				<div class="typeoff"></div>
			</div>
		</section>
	</div>



@endsection