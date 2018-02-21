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

		<section class="cards-top relative d-flex flex-row">
			<div class="wrapper1 cards1 w-100">
			  <div class="container1">
			    <div class="card1">
			      <div class="front1 d-flex flex-row justify-content-center align-items-center"><h2>Missão</h2></div>
			      <div class="back1">
			        <div class="content1 d-flex flex-row justify-content-center align-items-center">
			          <h3 class="cardTitle1"></h3>
			          <p>Formar cidadãos, socialmente responsáveis, para atuarem como agentes transformadores de forma empreendedora e desafiadora.</p>
			        </div>
			      </div>
			    </div>
			  </div>
			  
			   <div class="container1">
			    <div class="card1">
			      <div class="front1 d-flex flex-row justify-content-center align-items-center"><h2>Visão</h2></div>
			      <div class="back1">
			        <div class="content1 d-flex flex-row justify-content-center align-items-center">
			          <h3 class="cardTitle1"></h3>
			          <p>Ser o centro de referência nacional em aprendizagem e convivência onde as pontencialidades do indivíduo possam ser desenvolvidas.</p>
			        </div>
			      </div>
			    </div>
			  </div>

			  <div class="container1">
			    <div class="card1">
			      <div class="front1 d-flex flex-row justify-content-center align-items-center"><h2>Valores</h2></div>
			      <div class="back1">
			        <div class="content1 d-flex flex-row justify-content-center align-items-center">
			          <h3 class="cardTitle1"></h3>
			          <p>A abordagem do Projeto Político, como organização do trabalho da escola como um todo, está fundada nos valores que deverão nortear a nossa prática pedagógica.</p>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="d-flex flex-row justify-content-center">
					<h1 class="title-on principal">Sistema de Ensino COC</h1>
				</div>

				<div id="youtube" class="text-center mt-4 mb-5">
					<iframe width="100%" height="615" src="https://www.youtube.com/embed/hWSK0I_wzWU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</section>

		<section class="whycoc pb-5">
			<h1 class="title-on">POR QUE SER COC ?</h1>
			<h6 class="subtitle">Tradição e tecnologia para a educação</h6>

			<p>O Sistema COC de Ensino, há mais de 50 anos no mercado de educação, alia pioneirismo em tecnologia dentro e fora da sala de aula, qualidade de ensino, aprovações em universidades e muito mais. Sua metodologia exclusiva proporciona ao aluno um mix completo de soluções educacionais que o ajudam a se preparar não só para o vestibular, mas para a vida inteira.</p>

			<div class="row mt-5 pr-5 card-mid">
				<div class="col-lg-4 col-xl-4 d-flex-column-center">
					<img class="rounded-circle" src="{{asset('img/img1.jpg')}}">
					<h1 class="menor mt-2">Pais e Alunos</h1>
					<p>Material didático diferenciado e atualizado e ferramentas complementares como o plantão on-line que ajudam o aluno em todos os momentos. Suporte completo para acompanhamento do aprendizado.</p>
				</div>
				<div class="col-lg-4 col-xl-4 d-flex-column-center">
					<img class="rounded-circle" src="{{asset('img/img2.jpg')}}">
					<h1 class="menor mt-2">Professores</h1>
					<p>Capacitação e treinamentos constantes para manter as equipes atualizadas com as mais modernas técnicas de ensino. Proposta pedagógica integrada, multimídia e multiconectada adaptada à cada escola.</p>
				</div>
				<div class="col-lg-4 col-xl-4 d-flex-column-center">
					<img class="rounded-circle" src="{{asset('img/img3.jpg')}}">
					<h1 class="menor mt-2">Mantenedores</h1>
					<p>Marca forte e reconhecida no mercado, presente em todos os segmentos, com um portfólio completo de produtos para maximizar os resultados. Ampla consultoria para desenvolvimento contínuo e exclusivo Programa de Excelência.</p>
				</div>
			</div>
		</section>

		<div class="container">

			<section id="sobre" class="mt-5">

				<div class="d-flex flex-row">
					<div class="col-lg-7 col-xl-7">

						<h1 class="title-on">Desde 1983</h1>

						<p class="geral text-justify">Em maio de 1983, um grupo de professores de São Paulo estabeleceu-se em Santos, iniciando as atividades do então Cursinho Universitário de Santos. Calcados em metodologia triunfante e utilizada por vários anos na capital, o Cursinho Universitário, em pouco tempo, tornou-se referência obrigatória aos interessados em concorrer aos exames vestibulares de todo o país. Iniciava-se, aí, a longa história de um curso preparatório responsável pela aprovação de inúmeros estudantes, hoje profissionais de destaque em diferentes áreas do mercado de trabalho.
						Não se sobrevive 34 anos sem predicados, entre eles destacando-se a permanente qualidade de ensino, a responsabilidade e o profundo respeito pelos estudantes e seus familiares. Aliás, sobre famílias importa destacar que muito do que se conseguiu em termos de educação e formação de nossos alunos deveu-se às sólidas parcerias que sempre se estabeleceram entre elas e a escola. De fato, constituem-se os pais e responsáveis em parte integrante e fundamental do processo educacional que adotamos, o qual se traduz no sucesso alcançado pelos nossos alunos.</p>

					</div>

					<div class="col-lg-5 col-xl-5 d-flex flex-row justify-content-center align-items-center">
						<img src="{{asset('img/coc01.png')}}">
					</div>
				</div>

			</section>

			<section id="noticias" class="mt-5 mb-5">

				<div class="d-flex flex-row">
					<div class="col-lg-9 col-xl-9">

						<h1 class="title-on">Últimas Notícias</h1>

						<div class="d-flex flex-row justify-content-start">	
							<div class="card">
								<div class="card-img">
									<img class="img-fluid" src="{{asset('img/1.jpg')}}">
								</div>
								<div class="card-content p-2">
									<h4 class="card-title">Manifesto Institucional COC by Pearson</h4>
									<span class="date-notice">20 de fevereiro de 2018 | in <a href="#">Blog</a></span>
									Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum.
								</div>
								<div class="vejamais text-right pr-2 pt-2">
									<a href="" class="btn btn-warning btn-sm">Leia mais</a>
								</div>
							</div>

							<div class="card ml-4">
								<div class="card-img">
									<img class="img-fluid" src="{{asset('img/2.jpg')}}">
								</div>
								<div class="card-content p-2">
									<h4 class="card-title">Manifesto Institucional COC by Pearson</h4>
									<span class="date-notice">20 de fevereiro de 2018 | in <a href="#">Blog</a></span>
									Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum.
								</div>
								<div class="vejamais text-right pr-2 pt-2">
									<a href="" class="btn btn-warning btn-sm">Leia mais</a>
								</div>
							</div>

							<div class="card ml-4">
								<div class="card-img">
									<img class="img-fluid" src="{{asset('img/3.jpg')}}">
								</div>
								<div class="card-content p-2">
									<h4 class="card-title">Manifesto Institucional COC by Pearson</h4>
									<span class="date-notice">20 de fevereiro de 2018 | in <a href="#">Blog</a></span>
									Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum.
								</div>
								<div class="vejamais text-right pr-2 pt-2">
									<a href="" class="btn btn-warning btn-sm">Leia mais</a>
								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-3 col-xl-3">

						<h1 class="title-on">Facebook</h1>

						<div class="fb-page" data-href="https://www.facebook.com/Adonai-Coc-276378852736800/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Adonai-Coc-276378852736800/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Adonai-Coc-276378852736800/">Adonai Coc</a></blockquote></div>

					</div>
				</div>

			</section>

		</div>

		<section class="informativo pb-5 pt-1">
			<div class="container">
				<div class="mt-5 d-flex flex-row justify-content-start pt-2 pl-5 pr-5">
					<div class="col-lg-10 col-xl-10">
						<h2>Conheça o Enem</h2>
						<p>O Exame Nacional do Ensino Médio é uma prova realizada pelo Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira, autarquia vinculada ao Ministério da Educação do Brasil, e foi criada em 1998. Ela é utilizada para avaliar a qualidade do ensino médio no país. Seu resultado serve para acesso ao ensino superior em universidades públicas brasileiras, através do Sistema de Seleção Unificada (SiSU), assim como em algumas universidades no exterior.</p>
					</div>
					<div class="col-lg-2 col-xl-2 d-flex flex-row justify-content-center align-items-center">	
						<a href="https://enem.inep.gov.br/" target="_blank" class="btn btn-outline-light btn-lg">Acesse agora!</a>
					</div>
				</div>
			</div>
		</section>

	</div>



@endsection