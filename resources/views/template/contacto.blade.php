@extends('layouts.web')

@section('content')
	<section class="SectionNosotros" style="background: #000; color: white; padding: 3rem 0 0rem;">
		<div class="container">
			<h1 style="font-size: 2.5rem">Contactanos</h1>
		</div>
		<figure>
			<img src="{{ asset('public/imagenes/contacto.jpg') }}" alt="">
		</figure>

		<div class="container">
			<div class="d-flex" style="padding-top: 1rem">
				<figure class="logo-contact">
					<img src="{{ asset('public/imagenes/fondo_baile.png') }}" alt="" width="100%" height="100%" class="img-contact">
				</figure>
				<form action="" style="width: 100%;">
					<h1 style="margin-bottom: 10px;">Escribanos su inquietud</h1>
					<div class="from-group-contact">
						<input type="text" placeholder="Nombre" class="form-contact">
					</div>
					<div class="from-group-contact">
						<input type="text" placeholder="E-mail" class="form-contact">
					</div>
					<div class="from-group-contact">
						<textarea name="" placeholder="Escriba su mensaje" cols="30" rows="7" class="form-contact" style="resize: none;"></textarea>
					</div>
					<div class="d-flex justify-content-end">
						<button class="d-flex justify-content-between aling-items-center btn-send">Enviar Mensaje <img src="{{ asset('public/imagenes/svg/Mensaje.svg') }}" alt="" class="img-svg-send"></button>
					</div>
				</form>
			</div>
		</div>
	</section>

@endsection