@extends('layouts.web')

@section('content')

	<section class="SectionUnion" style="padding: 3rem 0; min-height: 100vh; background: #000; color: grey">
		<div class="container">
			<h1 style="font-size: 2.5rem">Unirte</h1>

			<p class="pt-1">Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Corporis recusandae similique impedit laudantium eligendi suscipit accusantium repellat esse. Sit tenetur cupiditate, laborum corporis accusamus vitae culpa aperiam quaerat odit, architecto. Possimus, suscipit est omnis, minima sunt eum aliquid, cumque iure corrupti dolore explicabo doloribus, excepturi. Neque recusandae est quibusdam nostrum impedit eius illum repellat ea, sed aliquid consequatur libero error enim ab, eaque quis reprehenderit inventore repudiandae qui veniam ullam corporis esse pariatur id. Facilis delectus perspiciatis veritatis esse, vero.</p>
		
			<article class="d-flex justify-content-between">
				<figure style=" width: 100%; max-height: 700px; padding: 10px;">
					<img src="{{ asset('public/imagenes/Unete.jpg') }}" alt="" style="width: 100%; height: 100%;">
				</figure>
				<div style="width: 100%; padding: 1rem;">
					<form action="" style="width: 100%;">
						<article>
							<h1 style="font-size: 1.7rem; padding-bottom:10px;">Datos Personales</h1>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="Nombres y Apellidos">
							</div>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="Correo Electrónico">
							</div>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="N° Teléfono">
							</div>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="Dirección">
							</div>
						</article>
						<article>
							<h1 style="font-size: 1.7rem; padding-bottom:10px;">Datos de la Empresa</h1>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="Nombre de Empresa">
							</div>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="Correo Electrónico">
							</div>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="N° Teléfono">
							</div>
							<div class="from-group-contact">
								<input type="text" class="form-contact" placeholder="Dirección">
							</div>
							<div class="from-group-contact">
								<select name="" id="" class="form-contact">
									<option value="" selected="selected" disabled="disabled">Seleccione un Estado</option>
									<option value=""></option>
								</select>
							</div>
							<div class="from-group-contact">
								<select name="" id="" class="form-contact">
									<option value="" selected="selected" disabled="disabled">Seleccione un Ciudad</option>
									<option value=""></option>
								</select>
							</div>
						</article>
						<div class="d-flex justify-content-end">
							<button class="d-flex justify-content-between aling-items-center btn-send">Enviar Solicitud <img src="{{ asset('public/imagenes/svg/Mensaje.svg') }}" alt="" class="img-svg-send"></button>
						</div>
					</form>
				</div>
			</article>
		</div>

	</section>
@endsection