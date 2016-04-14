@extends('master')
@section('menu')
	<li class="active" ><a href="{{ url('/') }}" >Inicio</a></li>
	<li><a href="{{ url('/informacion') }}" >Quienes Somos</a></li>
	<li><a href="{{ url('/post') }}" >Noticias</a></li>
	<li><a href="{{ url('/cursos') }}" >Cursos</a></li>
	<li><a href="{{ url('/fotos') }}" >Fotos</a></li>
	<li><a href="{{ url('/contacto')}}" >Contáctanos</a></li>
	<li><a target="_blank" href="http://home.lan:90/moodle/" >Aula Virtual</a></li>
@stop
@section('cabecera')
	<style>

		/*slider area*/
		.slider-row{
			margin: 0;
			padding: 0;
		}
		.slider-wrapper{
			margin: 0;
			padding: 0 !important;
			background: #000 !important;
		}
		.carousel-caption h1{
			font-size: 157px;
			color: #fff;
			text-transform: uppercase;
			margin-bottom: 0;
		}
		.carousel-caption p{
			font-size: 40px;
			color: #fff;
			text-transform: uppercase;
			font-weight: bold;
			margin-top: 0;
		}
		.carousel-caption button{
			width: 240px;
			height: 60px;
			background: #3a9ecb;
			color: #fff;
			font-size: 30px;
			text-transform: uppercase;
			border:0;
			transition:all .5s ease 0s;
			-webkit-transition:all .5s ease 0s;
			-moz-transition:all .5s ease 0s;
			-o-transition:all .5s ease 0s;
			-ms-transition:all .5s ease 0s;
		}
		.carousel-caption button:hover{
			background: #2a2a2a;
		}
		.carousel-control{
			width: 5%;
		}
		.carousel-inner{
			background: -webkit-linear-gradient(left, #000 , blue); /* For Safari 5.1 to 6.0 */
			background: -o-linear-gradient(left, #000, blue); /* For Opera 11.1 to 12.0 */
			background: -moz-linear-gradient(left, #000, blue); /* For Firefox 3.6 to 15 */
			background: linear-gradient(to left, #000 , blue); /* Standard syntax */
		}
		.item{
			position: relative;
		}
		.carousel-caption {
			position: absolute;
			text-align: left;
			left: 12%;
			line-height: 1;
			top: 50%;
			margin-top: -100px;
		}
		.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev {
			font-size: 18px;
			padding: 5px;
			background: #fff;
			border-radius: 50%;
			color: transparent;
			margin-left: 0;
			margin-top: 50px;
		}
		.carousel-control .glyphicon-chevron-right, .carousel-control .icon-next {
			font-size: 18px;
			padding: 5px;
			background: #fff;
			border-radius: 50%;
			color: transparent;
			margin-right: 0;
			margin-top: 50px;
		}
	</style>
		<section class="slider" id="home">
			<div class="container-fluid">
				<div class="row">
					<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="header-backup"></div>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="{{asset('images/slider/slide-one.jpg')}}" alt="">
								<div class="carousel-caption">
									<h1>Tax</h1>
									<p>good business consulting service</p>
									<button>learn more</button>
								</div>
							</div>
							<div class="item">
								<img src="{{asset('images/slider/slide-two.jpg')}}" alt="">
								<div class="carousel-caption">
									<h1>Financial</h1>
									<p>good business consulting service</p>
									<button>learn more</button>
								</div>
							</div>
							<div class="item">
								<img src="{{asset('images/slider/slide-three.jpg')}}" alt="">
								<div class="carousel-caption">
									<h1>Consulting</h1>
									<p>good business consulting service</p>
									<button>learn more</button>
								</div>
							</div>
							<div class="item">
								<img src="{{asset('images/slider/slide-four.jpg')}}" alt="">
								<div class="carousel-caption">
									<h1>Money</h1>
									<p>good business consulting service</p>
									<button>learn more</button>
								</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
							<span class="sr-only">Next</span>
						</a>
					</div>

				</div>
			</div>
		</section><!-- end of slider section -->
@stop

@section('contenido')
	<section class="container">
		<div class="heading">
			<!-- Heading -->
			<h2>Acerca del Instituto</h2>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="{{asset('images/logo.jpg')}}" alt="" class="Logo de la Instituación">
			</div>
			<div class="col-md-8">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
				<blockquote class="blockquote-1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>
		</div>
	</section>


	<section class="container">
		<div class="row">
			<div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Nuestros Estudiantes</h2></div>
				<p><span>Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui.</span></p>
				<p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p>
				<a href="#" title="read more" class="btn-inline " target="_self">read more</a> </div>

			<div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Cursos</h2></div>
				<div class="list styled custom-list">
					<ul>
						<li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Mathematics and Computer Science</a></li>
						<li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mathematics and Philosophy</a></li>
						<li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Philosophy and Modern Languages</a></li>
						<li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">History (Ancient and Modern)</a></li>
						<li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Classical Archaeology and Ancient History</a></li>
						<li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Physics and Philosophy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Sedes</h2></div>
				<figure class="frame thumbnail alignnone clearfix">
					<p><img class="size-full " alt="usa" src="{{asset('images/ny.png')}}" width="" height="197"></p>
				</figure></div>

		</div>
	</section>


@endsection
