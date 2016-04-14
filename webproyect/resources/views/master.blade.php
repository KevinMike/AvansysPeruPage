<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Cecap Avansys Perú">
	<meta name="author" content="Kevin Mike Herera Vega">
	<title>Cecap Avansys Perú</title>
	<link rel="favicon" href="{{asset('images/favicon.png')}}assets/">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{{asset('css/bootstrap-theme.css')}}" media="screen">
	<link rel="stylesheet" type="text/css" href="{{asset('css/isotope.css')}}" media="screen" />
	<link rel="stylesheet" href="{{asset('js/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/da-slider.css')}}" />
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			<a class="navbar-brand" href="#">
				<img src="{{asset('images/logo.png')}}" width="167px" alt="Logo"><br><br></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right mainNav">
				@yield('menu')
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
<!-- /.navbar -->

<!-- Header -->
@yield('cabecera')
<!-- /Header -->

@yield('contenido')

<footer id="footer">
	<div class="container">
		<div class="social text-center">
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-google-plus-square"></i></a>
		</div>

		<div class="clear"></div>
		<!--CLEAR FLOATS-->
	</div>
	<div class="footer2">
		<div class="container">
			<div class="row">

				<!--<div class="col-md-6 panel">
					<div class="panel-body">
						<p class="simplenav">
							<a href="index.html">Home</a> |
							<a href="about.html">About</a> |
							<a href="courses.html">Courses</a> |
							<a href="fees.html">Fees</a> |
							<a href="portfolio.html">Portfolio</a> |
							<a href="contact.html">Contact</a>
						</p>
					</div>
				</div>-->

				<div class="col-md-12 panel">
					<div class="panel-body">
						<p class="text-right">
							Copyright &copy; 2016. Desarrollado por <a href="#" rel="develop">Kevin Herrera Vega</a>
						</p>
					</div>
				</div>

			</div>
			<!-- /row of panels -->
		</div>
	</div>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/jquery.cslider.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
@yield('javascript')
</body>
</html>
