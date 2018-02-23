<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="csrf-token" content="{{ csrf_token() }}">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>@yield('titulo')</title>


	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- font-awesome 5 -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

	<!-- Estilo -->
	<link href="css/style.css" rel="stylesheet">

</head>
<body>

	<div class="container-fluid p-0">
 		<div class="row-social w-100 d-flex flex-row justify-content-end align-items-center pr-5">
 			<div class="col-md-9 col-lg-6 col-xl-6 offset-lg-1 offset-xl-1 d-flex">
 				<div class="d-flex-row-center">
 					<i class="material-icons">phone</i>&nbsp;<span class="tel"><a href="tel:+559935920017">(99) 3592-0017</a></span>
 				</div>
 				<div class="d-flex-row-center">
 					<i class="fas fa-envelope pl-3"></i>&nbsp;<span><a href="mailto:contato@adonaicoc.com.br">contato@adonaicoc.com.br</a></span>
				</div>
				<div class="d-flex-row-center">
					<i class="fas fa-home pl-3"></i>&nbsp;<span>Rua São Francisco, 12 QD 13, Açailândia - MA</span>
				</div>
 			</div>
 			<div class="col-md-3 col-lg-5 col-xl-5 d-flex-row-end h-100">
	 			<a href="#" class="null h-100 relative d-flex-row-center twitter" target="_blank"><i class="fab fa-twitter text-center"></i><span class="fade-social fade-social-twitter"></span></a>
				<a href="https://www.facebook.com/Adonai-Coc-276378852736800/" class="null h-100 relative d-flex-row-center facebook" target="_blank"><i class="fab fa-facebook-f text-center"></i><span class="fade-social fade-social-facebook"></span></a>
				<a href="#" class="null h-100 relative d-flex-row-center in" target="_blank"><i class="fab fa-linkedin-in text-center"></i><span class="fade-social fade-social-in"></span></a>
				<a href="#" class="null h-100 relative d-flex-row-center p" target="_blank"><i class="fab fa-pinterest-p text-center"></i><span class="fade-social fade-social-p"></span></a>
				<a href="#" class="null h-100 relative d-flex-row-center rss" target="_blank"><i class="fas fa-rss text-center"></i><span class="fade-social fade-social-rss"></span></a>
				<a href="#" class="null h-100 relative d-flex-row-center google" target="_blank"><i class="fab fa-google-plus-g text-center"></i><span class="fade-social fade-social-google"></span></a>
			</div>
 		</div>

		<div class="row topo p-0">
			<div class="col-md-4 col-lg-4 col-xl-4 offset-md-1 offset-lg-1 offset-xl-1 pl-4 d-flex flex-row align-items-center">
				<a href="{{route('site.home')}}"><img src="{{asset('img/LOGOADONAI.png')}}" alt="LOGOMARCA" class="logo img-fluid"></a>
				<!-- <img src="http://via.placeholder.com/180x50" alt="LOGOMARCA" class="logo1"> -->
			</div>
			<div class="col-md-6 col-lg-6 col-xl-6 d-flex-row-end p-0 h-100 m-0">
				<nav class="w-100 h-100 d-flex-row-end">
					<div class="nav d-flex-row-center active p-3">
						<a href="#" class="null">Unidades</a>
					</div>
					<div class="nav d-flex-row-center faleconosco p-3">
						<a href="{{route('site.faleconosco')}}" class="fc">Fale Conosco</a>
					</div>
					<div class="nav d-flex-row-center relative p-3">
						<span>A Escola</span>
						<div class="sub-nav sub-nav-2">
							<ul>
								<li><a href="{{route('site.historia')}}">Nossa História</a></li>
								<li><a href="{{route('site.filosofia')}}">Filosofia</a></li>
								<li><a href="{{route('site.estrutura')}}">Estrutura</a></li>
								<li><a href="{{route('site.fundamentacaoteorica')}}">Fundamentação Teórica</a></li>
								<li><a href="{{route('site.organizacaocurricular')}}">Organização Curricular</a></li>
							</ul>
						</div>
					</div>
					<div class="nav d-flex-row-center relative p-3">
						<span>Links</span>
						<div class="sub-nav sub-nav-3">
							<ul>
								<li><a href="http://www.coc.com.br" target="_blank">Portal Coc</a></li>
								<li>Agenda Digital</li>
								<li><a href="http://186.193.186.244:8088/sg_web/Acesso.aspx?escola=4242" target="_blank">Diário Eletrônico</a></li>
								<li><a href="http://webmail.adonaicoc.com.br">Webmail</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="col-lg-1 col-xl-1"></div>
		</div>

		
 	</div>