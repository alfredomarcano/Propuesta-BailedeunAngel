@extends('layouts.web')

@section('content')
	<section class="SectionCarrito" style="padding: 3rem 0 2rem; background: black; color: grey; min-height: 100vh">
		<div class="container">
			<h1 style="font-size: 2.5rem;">Tu Carrito</h1>
			<section style="width: 90%; margin: 25px auto;">
				<article>
					
				</article>
				{{-- @foreach() --}}
				<article class="d-flex align-items-center w-100 cart-list">
					<figure class="cart-figure">
						<a href="{{ route('Producto') }}"><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" width="100%" height="100%"></a>
					</figure>
					<ul class="cart-descripcion">
						<li>Baile de un Angel</li>
						<li>GRADO DE ALCOHOL: 14° G.L.</li>
						<li>CONSUMO: Agítese muy bien antes de servir. Sírvase bien frío sin hielo. Conservar refrigerado.</li>
						<li>CONTENIDO: 0.70LTS</li>
					</ul>
					<select name="" id="" class="cart-select">
						@for($i=0; $i <= 50; $i++)
							<option value="">{{ $i }}</option>
						@endfor
					</select>
					<span class="cart-trash">
						<i class="fa fa-trash"></i>
					</span>
				</article>
				<article class="d-flex align-items-center w-100 cart-list">
					<figure class="cart-figure">
						<a href="{{ route('Producto') }}"><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" width="100%" height="100%"></a>
					</figure>
					<ul class="cart-descripcion">
						<li>Baile de un Angel</li>
						<li>GRADO DE ALCOHOL: 14° G.L.</li>
						<li>CONSUMO: Agítese muy bien antes de servir. Sírvase bien frío sin hielo. Conservar refrigerado.</li>
						<li>CONTENIDO: 0.70LTS</li>
					</ul>
					<select name="" id="" class="cart-select">
						@for($i=0; $i <= 50; $i++)
							<option value="">{{ $i }}</option>
						@endfor
					</select>
					<span class="cart-trash">
						<i class="fa fa-trash"></i>
					</span>
				</article>
				<article class="d-flex align-items-center w-100 cart-list">
					<figure class="cart-figure">
						<a href="{{ route('Producto') }}"><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" width="100%" height="100%"></a>
					</figure>
					<ul class="cart-descripcion">
						<li>Baile de un Angel</li>
						<li>GRADO DE ALCOHOL: 14° G.L.</li>
						<li>CONSUMO: Agítese muy bien antes de servir. Sírvase bien frío sin hielo. Conservar refrigerado.</li>
						<li>CONTENIDO: 0.70LTS</li>
					</ul>
					<select name="" id="" class="cart-select">
						@for($i=0; $i <= 50; $i++)
							<option value="">{{ $i }}</option>
						@endfor
					</select>
					<span class="cart-trash">
						<i class="fa fa-trash"></i>
					</span>
				</article>
				{{-- @endforeach --}}
			</section>
			<section class="d-flex justify-content-between">
				<a href="{{ route('Index') }}" class="btn-regresar">Regresar</a>
				<a href="{{ route('Pagar') }}" class="btn-pagar">Pagar Orden</a>
			</section>
		</div>
		
	</section>

@endsection