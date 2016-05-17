@extends('master')
@section('menu')
	<li><a href="{{ url('/') }}" id="inicio" >Inicio</a></li>
	<li><a href="{{ url('/informacion') }}" id="quienes_somos" >Quienes Somos</a></li>
	<li><a href="{{ url('/post') }}" id="mapa">Noticias</a></li>
	<li><a href="{{ url('/cursos') }}" id ="cursos" >Cursos</a></li>
	<li  class="active"><a href="{{ url('/fotos') }}" id="fotos">Fotos</a></li>
	<li><a href="{{ url('/contacto')}}" id="contactanos" >Contáctanos</a></li>
	<li><a target="_blank" href="http://home.lan:90/moodle/" id="aula_virtual">Aula Virtual</a></li>
@endsection

@section('contenido')

		<!-- container -->
			<div class="col-md-12">
				<div id="portfolio" class="page-section section appear clearfix">
					<p>
						<br />
						<br />
					</p>
					<div class="row">
						<nav id="filter" class="col-md-12 text-center">
							<ul>
								<li><a href="#" class="current btn-theme btn-small" data-filter="*">Todas</a></li>
								@foreach($categorias as $item)
									<li><a href="#" class="btn-theme btn-small" data-filter=".{{$item->nombre}}">{{$item->nombre}}</a>
								@endforeach
							</ul>
						</nav>
						<div class="col-md-12">
							<div class="row">
								<div class="portfolio-items isotopeWrapper clearfix" id="3">
									@foreach($fotos as $item)
									<article class="col-sm-4 isotopeItem {{$item->categoria_item->nombre}}">
										<div class="portfolio-item">
											<img src="{{asset('media/galeria/'.$item->foto)}}" alt="" />
											<div class="portfolio-desc align-center">
												<div class="folio-info">
													<a href="{{asset('media/galeria/'.$item->foto)}}" class="fancybox">
														<h5>{{$item->descripcion}}</h5>
														<i class="fa fa-link fa-2x"></i></a>
												</div>
											</div>
										</div>
									</article>
									@endforeach

								</div>

							</div>


						</div>
					</div>

				</div>
			</div>
	<!-- /container -->
@endsection