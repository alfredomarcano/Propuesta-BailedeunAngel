@extends('layouts.web')

@section('content')
	<section class="headered owl-carousel" style="margin-bottom: -4px;">
		<figure class="header-items">
			<img src="{{ asset('public/imagenes/bannerNuevonuevo2.jpg') }}" alt="">
			<div class="container">
				<div class="text-img">
					<span>Baile de un angel</span>
					<a href="{{ route('Producto') }}" class="d-flex justify-content-between align-items-center">Comprar 
						<img src="{{ asset('public/imagenes/svg/Carrito.svg') }}" alt="" style="margin-left:10px; width: 19px; height: 16px;">
					</a>
				</div>					
			</div>		
		</figure>
		<figure class="header-items" >
			<img src="{{ asset('public/imagenes/bannerNuevo1.jpg') }}" alt="">		
			<div class="text-img">
				<span>Baile de un angel</span>
				<a href="{{ route('Producto') }}" class="d-flex justify-content-between align-items-center">Comprar 
					<img src="{{ asset('public/imagenes/svg/Carrito.svg') }}" alt="" style="margin-left:10px; width: 19px; height: 16px;">
				</a>
			</div>
		</figure>
		<figure class="header-items">
			<img src="{{ asset('public/imagenes/bannerNuevo2.jpg') }}" alt="">		
			<div class="text-img">
				<span>Baile de un angel</span>
				<a href="{{ route('Producto') }}" class="d-flex justify-content-between align-items-center">Comprar 
					<img src="{{ asset('public/imagenes/svg/Carrito.svg') }}" alt="" style="margin-left:10px; width: 19px; height: 16px;">
				</a>
			</div>
		</figure>
		<figure class="header-items">
			<img src="{{ asset('public/imagenes/bannerNuevonuevo.jpg') }}" alt="">
			<div class="container">
				<div class="text-img">
					<span>Baile de un angel</span>
					<a href="{{ route('Producto') }}" class="d-flex justify-content-between align-items-center">Comprar 
						<img src="{{ asset('public/imagenes/svg/Carrito.svg') }}" alt="" style="margin-left:10px; width: 19px; height: 16px;">
					</a>
				</div>					
			</div>		
		</figure>
	</section>
	<section class="publicity">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center" style="padding: 7px 0 10px 0;">
				<h2><i class="fa fa-calendar"></i> Próximos Eventos</h2>
				<i class="fa fa-chevron-down click-bottom" style="color: orange;"></i>
			</div>
			<div class="d-flex" style="padding: 10px 0">
				<div style="width: 35%; height: 160px; margin-right: 10px;">
					<iframe src="https://www.youtube.com/embed/sOnqjkJTMaA" frameborder="0" allowfullscreen="allowfullscreen" style="width: 100%; height: 100%; box-shadow: 0px 0px 2px grey"></iframe>
				</div>
				<section class="promociones owl-carousel" style="width: 65%;">
					<article class="" style="width: 100%; border-left: 1px solid #fcb827; padding: 0rem 0.7rem 0.7rem 0.7rem;">
						<figure style="margin-bottom: 10px; height: 60px;">
							<img src="{{ asset('public/imagenes/eventos/evento-1.jpg') }}" alt="" style="width: 100%; height: 100%;">
						</figure>
						<span>Presentación de Productos</span><br>
						<span>Domingo 12 de Diciembre</span><br>
						<span>C.C Los Aviadores</span>
						<span></span>
					</article>
					<article class="" style="width: 100%; border-left: 1px solid #fcb827; padding: 0rem 0.7rem 0.7rem 0.7rem;">
						<figure style="margin-bottom: 10px;height: 60px;">
							<img src="{{ asset('public/imagenes/eventos/evento-2.png') }}" alt="" style="width: 100%;height: 100%;">
						</figure>
						<span>Presentación de Productos</span><br>
						<span>Domingo 26 de Diciembre</span><br>
						<span>C.C Sambil Caracas</span>
						<span>
							
						</span>
					</article>
					<article class="" style="width: 100%; border-left: 1px solid #fcb827; padding: 0rem 0.7rem 0.7rem 0.7rem;">
						<figure style="margin-bottom: 10px; height: 60px;">
							<img src="{{ asset('public/imagenes/eventos/evento-1.jpg') }}" alt="" style="width: 100%; height: 100%;">
						</figure>
						<span>Presentación de Productos</span><br>
						<span>Sabado 11 de Diciembre</span><br>
						<span>C.C.C.T Caracas</span>
						<span>
							
						</span>
					</article>
					<article class="" style="width: 100%; border-left: 1px solid #fcb827; padding: 0rem 0.7rem 0.7rem 0.7rem;">
						<figure style="margin-bottom: 10px; height: 60px;">
							<img src="{{ asset('public/imagenes/eventos/evento-1.jpg') }}" alt="" style="width: 100%; height: 100%;">
						</figure>
						<span>Presentación de Productos</span><br>
						<span>Domingo 12 de Diciembre</span><br>
						<span>C.C Sambil Valencia</span>
						<span>
							
						</span>
					</article>
					<article class="" style="width: 100%; border-left: 1px solid #fcb827; padding: 0rem 0.7rem 0.7rem 0.7rem;">
						<figure style="margin-bottom: 10px;height: 60px;">
							<img src="{{ asset('public/imagenes/eventos/evento-2.png') }}" alt="" style="width: 100%;height: 100%;">
						</figure>
						<span>Presentación de Productos</span><br>
						<span>Domingo 26 de Diciembre</span><br>
						<span>C.C Sambil Caracas</span>
						<span>
							
						</span>
					</article>
					<article class="" style="width: 100%; border-left: 1px solid #fcb827; padding: 0rem 0.7rem 0.7rem 0.7rem;">
						<figure style="margin-bottom: 10px; height: 60px;">
							<img src="{{ asset('public/imagenes/eventos/evento-1.jpg') }}" alt="" style="width: 100%; height: 100%;">
						</figure>
						<span>Presentación de Productos</span><br>
						<span>Sabado 11 de Diciembre</span><br>
						<span>C.C.C.T Caracas</span>
						<span>
							
						</span>
					</article>
					<article class="" style="width: 100%; border-left: 1px solid #fcb827; padding: 0rem 0.7rem 0.7rem 0.7rem;">
						<figure style="margin-bottom: 10px; height: 60px;">
							<img src="{{ asset('public/imagenes/eventos/evento-1.jpg') }}" alt="" style="width: 100%; height: 100%;">
						</figure>
						<span>Presentación de Productos</span><br>
						<span>Domingo 12 de Diciembre</span><br>
						<span>C.C Sambil Valencia</span>
						<span>
							
						</span>
					</article>
				</section>
			</div>
		</div>
	</section>

@endsection