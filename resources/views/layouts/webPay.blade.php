<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="url" content="{{ url('/') }}">
	<title>{{('Bailedeunangel')}} @yield('title') </title>
	{{-- <title>{{('Document')}} @yield('title') </title> --}}
	<link  rel="icon" href="{{ asset('public/imagenes/fondo_baile.png') }}" type="image/png">
	<link rel="stylesheet" href="{{ asset('public/css/webstyle.css') }}">
	<link rel="stylesheet" href="{{ asset('public/bootstrap4/css/bootstrap.min.css') }}" >
	<link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/owlcarousel/owl.carousel.min.css') }}">
	<script type="text/javascript" src="{{ asset('public/js/jquery-3.5.1.min.js') }}"></script>
</head>

<body>
	@include('template.loader')
	<header class="header">
		<div class="container">
			<div class="header-content">
				<div class="header-img">
					<i class="fa fa-phone-square"> </i>
					<span>+58(424)234-5678 De Lunes a Viernes de 9:00am a 5:00pm</span>
				</div>
				<ul class="header-link">
					<li><i class="fa fa-facebook-square"></i></li>
					<li><i class="fa fa-instagram"></i></li>
					<li><i class="fa fa-twitter-square"></i></li>
					<li class="d-flex justify-content-between align-items-center">
						<i class="fa fa-envelope-o"></i>
						<span>bailedeunangel@gmail.com</span>
					</li>
				</ul>
			</div>
		</div>
	</header>
	
	<section class="carousel">
		<div class="navegador">
			<div class="container">
				<div class="d-flex justify-content-end">
					<a href="{{ route('Index') }}" style="color: grey; font-size: 20px; text-decoration: none"><i class="fa fa-home"> </i> Ir a inicio</a>
				</div>
			</div>
		</div>
		@include('modal.nav_modal')
		@yield('content')
	</section>
	<footer>
		<div class="container">		
			<div class="d-flex justify-content-between">
				<div class="d-flex justify-content-start align-items-center w-33">
					<div style="width: 65px; height: 50px; padding: 3px 0px; margin-right: 10px;">
						<img src="{{ asset('public/imagenes/fondo_baile.png') }}" alt="" style="width: 100%; height: 100%; object-fit: scale-down;">
					</div>
					<div style="display: block;">
						<span class="">Lorem, ipsum, dolor.</span> <br>
						<span class="">N° 61 Maracay - Aragua</span>
					</div>
				</div>
				<ul class="d-flex justify-content-center align-items-center w-33" style="margin-bottom: 0;">
					<a href="{{ route('Index') }}" style="color: #888888"><li style="padding:0px 15px">Home</li></a>
					<a href="{{ route('Nosotros') }}" style="color: #888888"><li style="padding:0px 15px">Nosotros</li></a>
					<a href="{{ route('Producto') }}" style="color: #888888"><li style="padding:0px 15px">Producto</li></a>
					<a href="{{ route('Unirte') }}" style="color: #888888"><li style="padding:0px 15px">Unirte</li></a>
					<a href="{{ route('Contacto') }}" style="color: #888888"><li style="padding:0px 15px">Contacto</li></a>
				</ul>
				<div class="w-33" style="display: flex; flex-direction: column; justify-content: center;">
					<div class="d-flex justify-content-end align-items-center" style="margin-bottom: 10px;">
						<img src="{{ asset('public/imagenes/svg/Paypal.svg') }}" alt="" style="width: 70px; height: 25px; padding-left: 20px">
						<img src="{{ asset('public/imagenes/svg/Zinli.svg') }}" alt="" style="width: 70px; height: 25px; padding-left: 20px">
						<img src="{{ asset('public/imagenes/svg/Zelle.svg') }}" alt="" style="width: 70px; height: 25px; padding-left: 20px">
						<img src="{{ asset('public/imagenes/svg/Stripe.svg') }}" alt="" style="width: 70px; height: 25px; padding-left: 20px">
					</div>
					<span style="font-size: 12px; text-align: end; display: block;">
						Diseñado y Desarrollado por <b>MAS</b> Soluciones Tecnológicas
					</span>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript" src="{{ asset('public/owlcarousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript">
		$(`.headered`).owlCarousel({
			loop:true,
		    margin:0,
		    nav:false,
		    autoplay:true,
		    autoplayTimeout:6000,
		    autoplayHoverPause:false,
		    responsive:{
		        0:{ items:1 },
		        1000:{ items:1 }
		    }
		});

		$(`.promociones`).owlCarousel({
			loop:true,
			margin:0,
			nav:false,
			autoplay:true,
			autoplayTimeout:10000,
			autoplayHoverPause:false,
			responsive:{
				0:{ itmes: 1},
				1000:{ items:3 }
			}
		});

		// $(`.click-bottom`).on('click', function(){
			
		// })
	
		$(".open").on("click", function(){
		  $(".modal").addClass("active");
		});

		$(".close").on("click", function(){
		   $(".modal").removeClass("active");
		});

		$(`.openCart`).on('click', function(){
			$(`.modal-carts`).toggle();
		});

		$(`.btn-close`).on(`click`, function(){
			$(`.modal-carts`).toggle();
		})

		$("document").ready(function(){
			var nave = $('.navegador');
			var mod = $('.modal');

			$(window).scroll(function () {
			    if ($(this).scrollTop() > 45) {
			        nave.addClass('fixed');
			    } else {
			        nave.removeClass('fixed');
			    }
			    if ($(this).scrollTop() > 1) {
			    	mod.addClass('modalfixed');
			    }else{
			    	mod.removeClass('modalfixed');
			    }
			});
		});

	</script>
</body>
</html>