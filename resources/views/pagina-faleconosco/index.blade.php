@extends('layout.site')

@section('titulo', '.:: Adonai COC - Fale Conosco ::.')

@section('conteudo')

<div class="container-fluid">
	<div class="row secao-site">
		<div class="col-lg-1 col-xl-1"></div>
		<div class="col-lg-8 col-xl-8 p-0 d-flex-row-start">
			<div class="titulo-secao">
				<h1>Fale Conosco</h1>
			</div>
		</div>
		<div class="col-lg-2 col-xl-2">
			<div class="titulo-secao">
				
			</div>
		</div>
		<div class="col-lg-1 col-xl-1"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.9790992187927!2d-47.49753458585244!3d-4.9431218964113075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92c5f44ed74c3257%3A0xec8b87bd48180088!2sInstituto+Educacional+Adonai-COC!5e0!3m2!1spt-BR!2sbr!4v1519310521272" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
<div class="container">
	<div class="row mt-4 mb-4">
		<div class="col-lg-6 col-xl-6">
			<div class="content">
				<h4>Contato</h4>

				<p class="geral">
					Você pode utilizar as Informações de Contato ao lado para entrar em contato conosco.
					Se preferir mandar um e-mail pode utilizar o formulário abaixo para tirar suas dúvidas, saber mais sobre nossos serviços ou agendar uma visita.
					Assim que possível estaremos respondendo, pois sua mensagem sempre é bem vinda!
				</p>

				<form>
				  <div class="form-group">
				    <label for="nome"><b>Seu nome</b></label>
				    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="name" required>
				    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				  </div>
				  <div class="form-group">
				    <label for="email"><b>Seu e-mail</b></label>
				    <input type="email" class="form-control" id="email" name="email" required>
				  </div>
				  <div class="form-group">
				    <label for="assunto"><b>Assunto</b></label>
				    <input type="text" class="form-control" id="assunto" name="subject" required>
				  </div>
				  <div class="form-group">
				    <label for="mensagem"><b>Mensagem</b></label>
				    <textarea class="form-control" id="mensagem" rows="5" name="message" required></textarea>
				  </div>
				  <button type="button" class="btn btn-warning btn-sm sendMail" style="color:#fff">Enviar</button>
				</form>
			</div>
		</div>
		<div class="col-lg-5 col-xl-5 pt-2 pl-0 offset-lg-1 offset-xl-1">
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