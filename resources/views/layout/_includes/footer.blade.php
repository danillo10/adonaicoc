	<footer>
		<div class="footer-bottom">
			<div class="container d-flex flex-row mt-3">
				<div class="col-md-3 col-lg-3 col-xl-3 p-0">
					<img src="{{asset('img/LOGOADONAIBRANDO2.png')}}" alt="LOGOMARCA" class="logo">

					<ul class="footer p-0">
						<li>Educação Infantil</li>
						<li>Ensino Fundamental</li>
						<li>Ensino Médio</li>
						<li>Ensino Superior</li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-3 col-xl-3">
					<h6 class="title">Adonai Coc</h6>

					<ul class="footer-2 p-0">
						<li><i class="fas fa-envelope" style="font-size: 12px;"></i> &nbsp;<a href="#">contato@adonaicoc.com.br</a></li>
						<li><i class="material-icons" style="font-size: 12px;">phone</i>&nbsp; <a href="#">(99) 3592-0017</a></li>
						<li><i class="fas fa-globe" style="font-size: 12px;"></i>&nbsp; <a href="#">www.adonaicoc.com.br</a></li>
						<li><i class="fas fa-home" style="font-size: 12px;"></i>&nbsp; Rua São Francisco, 12 QD 13, Açailândia</li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-3 col-xl-3">
					<h6 class="title">Últimos Tópicos</h6>

					<ul class="footer-2 p-0">
						<li class="news"><a href="http://www.coc.com.br/noticias/como-inovar-nas-aulas-de-ciencias-com-tecnologias-digitais" target="_blank">Como inovar nas aulas de ciências com tecnologias digitais</a></li>
						<li class="news"><a href="http://www.coc.com.br/noticias/4-atitudes-que-voce-precisa-tomar-para-fazer-seu-tempo-de-estudos-render" target="_blank">4 Atitudes que você precisa tomar para fazer seu tempo de estudos render</a></li>
						<li class="news"><a href="http://www.coc.com.br/noticias/como-se-preparar-para-apresentar-trabalhos-na-sala-de-aula" target="_blank">Como se preparar para apresentar trabalhos na sala de aula</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-lg-3 col-xl-3">
					<h6 class="title">Links Rápidos</h6>

					<ul class="footer-2 p-0">
						<li class="news"><a href="http://www.coc.com.br">Portal Coc</a></li>
						<li class="news"><a href="#">Agenda Digital</a></li>
						<li class="news"><a href="#"><a href="http://186.193.186.244:8088/sg_web/Acesso.aspx?escola=4242" target="_blank">Diário Eletrônico</a></a></li>
						<li class="news"><a href="http://webmail.adonaicoc.com.br">Webmail</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer-copyright">
			<div class="container p-0 d-flex flex-row align-items-center h-100">
				<div class="col-md-9 col-lg-9 col-xl-9 pl-0">
					Copyright © 2016-2018 Instituto Educacional Adonai COC
				</div>
				<div class="col-md-3 col-lg-3 col-xl-3 d-flex flex-row">
					<a class="fb" href="#"><i class="fab fa-twitter"></i></a>
					<a class="fb" href="https://www.facebook.com/Adonai-Coc-276378852736800/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					<a class="fb" href="#"><i class="fab fa-linkedin-in"></i></a>
					<a class="fb" href="#"><i class="fab fa-pinterest-p"></i></a>
					<a class="fb" href="#"><i class="fas fa-rss"></i></a>
					<a class="fb" href="#"><i class="fab fa-google-plus-g"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <script src="{{asset('js/home.js')}}"></script>

    <script>
		$('.card1').click(function(){
		  $(this).toggleClass('flipped');
		})
	</script>
    
  </body>
</html>