@extends('master')
@section('menu')
	<li ><a href="{{ url('/') }}" >Inicio</a></li>
	<li class="active"><a href="{{ url('/informacion') }}" >Quienes Somos</a></li>
	<li><a href="{{ url('/post') }}" >Noticias</a></li>
	<li><a href="{{ url('/cursos') }}" >Cursos</a></li>
	<li><a href="{{ url('/fotos') }}" >Fotos</a></li>
	<li><a href="{{ url('/contacto')}}" >Contáctanos</a></li>
	<li><a target="_blank" href="/aula" >Aula Virtual</a></li>
@endsection

@section('cabecera')
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>¿Quienes Somos?</h1>
				</div>
			</div>
		</div>
	</header>
@endsection

@section('contenido')
		<!-- container -->
	<section class="container">
		<div class="row">
			<!-- main content -->
			<section class="col-sm-8 maincontent">
				<h3>¿Quienes Somos?</h3>
				<p>
					<img src="assets/images/about.jpg" alt="" class="img-rounded pull-right" width="300">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.
				</p>
				<p>Consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
				<h3>Nuestros Logros</h3>
				<strong>2014</strong>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
				<strong>2013</strong>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
				<strong>2012</strong>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
				<strong>2011</strong>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
			</section>
			<!-- /main -->

			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="panel">
					<h4>Servicios a los Participantes</h4>
					<ul class="list-unstyled list-spaces">
						<li><a href="">Responsive Design</a><br>
							<span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span></li>
						<li><a href="">HTML5, CSS3 and JavaScript</a><br>
							<span class="small text-muted">Consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam</span></li>
						<li><a href="">Bootstrap</a><br>
							<span class="small text-muted">Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</span></li>
						<li><a href="">Clean Template</a><br>
							<span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span></li>
						<li><a href="">Premium Quality</a><br>
							<span class="small text-muted">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</section>
	<!-- /container -->
	<section class="team-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Nuestro Equipo</h3>
					<br />
				</div>
			</div>
			<div class="row">

				<div class="col-md-3 col-sm-6 col-xs-6">
					<!-- Team Member -->
					<div class="team-member">
						<!-- Image Hover Block -->
						<div class="member-img">
							<!-- Image  -->
							<img class="img-responsive" src="{{asset('images/photo-1.jpg')}}" alt="">
						</div>
						<!-- Member Details -->
						<h4>John Doe</h4>
						<!-- Designation -->
						<span class="pos">CEO</span>
						<div class="team-socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<!-- Team Member -->
					<div class="team-member pDark">
						<!-- Image Hover Block -->
						<div class="member-img">
							<!-- Image  -->
							<img class="img-responsive" src="{{asset('images/photo-2.jpg')}}" alt="">
						</div>
						<!-- Member Details -->
						<h4>Larry Doe</h4>
						<!-- Designation -->
						<span class="pos">Art Director</span>
						<div class="team-socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<!-- Team Member -->
					<div class="team-member pDark">
						<!-- Image Hover Block -->
						<div class="member-img">
							<!-- Image  -->
							<img class="img-responsive" src="{{asset('images/photo-3.jpg')}}" alt="">
						</div>
						<!-- Member Details -->
						<h4>Ranith Kays</h4>
						<!-- Designation -->
						<span class="pos">Manager</span>
						<div class="team-socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<!-- Team Member -->
					<div class="team-member pDark">
						<!-- Image Hover Block -->
						<div class="member-img">
							<!-- Image  -->
							<img class="img-responsive" src="{{asset('images/photo-4.jpg')}}" alt="">
						</div>
						<!-- Member Details -->
						<h4>Joan Ray</h4>
						<!-- Designation -->
						<span class="pos">Creative</span>
						<div class="team-socials">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-github"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection