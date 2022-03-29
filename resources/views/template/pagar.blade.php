@extends('layouts.webPay')

@section('content')
	<section class="SectionPagar" style="background: #000; min-height: 100vh; padding: 3rem 0 2rem; color: grey">
		<div class="container">
			<form action="" method="POST">
			@csrf
				<h1 style="font-size: 2.5rem">Pagar</h1>

				<section class="d-flex">
					<article class="w-100 p-3 h-100" style="background: #9f672e8c; border:1px solid #25262788; border-radius: 0.5rem; color: white;">
						<div class="text-center">
							<h4>DATOS DE ENVÍO</h4>
						</div>
						<hr style="background: grey">
						<div class="row">
							<div class="col-md-6">
								<label class="small" for="">Nombres</label>
								<input type="text" class="form-control" name="name_send" required="required">
							</div>
							<div class="col-md-6">
								<label class="small" for="">Apellidos</label>
								<input type="text" class="form-control" name="lastname_send" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<label for="" class="small">TIPO</label>
								<input type="text" class="form-control" name="type_send">
							</div>
							<div class="col-md-9">
								<label for="" class="small">DOCUMENTO</label>
								<input type="text" class="form-control" name="doc_send">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="" class="small">CORREO ELECTRONICO</label>
								<input type="mail" class="form-control" name="mail_send" required="required">
							</div>
							<div class="col-md-6">
								<label for="" class="small">TELEFONO</label>
								<input type="text" class="form-control" name="phone_send" required="required">
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label for="" class="small">CIUDAD</label>
								<input type="text" class="form-control" name="city_send">
							</div>
							<div class="col-md-4">
								<label for="" class="small">ESTADO</label>
								<input type="text" class="form-control" name="state_send">
							</div>
							<div class="col-md-4">
								<label for="" class="small">COD. POSTAL</label>
								<input type="text" class="form-control" name="postal_send">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="small">DIRECCION</label>
							<input type="text" class="form-control" name="address_send" required="required">
						</div>
						{{-- <div class="text-center">
							<h4>Métodos de Pago</h4>
						</div>
						<div style="display: flex; justify-content: center;">
							<div class="footer-payment-img" style="border:1px solid #252627; width: 160px; height: 40px">
								<img src="{{ asset('public/imagenes/payment/visa.png') }}" alt="" class="image">
							</div>
							<div class="footer-payment-img" style="border:1px solid #252627; width: 160px; height: 40px">
								<img src="{{ asset('public/imagenes/payment/mastercard.png') }}" alt="" class="image">
							</div>
							<div class="footer-payment-img" style="border:1px solid #252627; width: 160px; height: 40px">
								<img src="{{ asset('public/imagenes/payment/skrill.png') }}" alt="" class="image">
							</div>
							<div class="footer-payment-img" style="border:1px solid #252627; width: 160px; height: 40px">
								<img src="{{ asset('public/imagenes/payment/paypal.png') }}" alt="" class="image">
							</div>
							<div class="footer-payment-img" style="border:1px solid #252627; width: 160px; height: 40px">
								<img src="{{ asset('public/imagenes/payment/maestro.png') }}" alt="" class="image">
							</div>
							<div class="footer-payment-img" style="border:1px solid #252627; width: 160px; height: 40px">
								<img src="{{ asset('public/imagenes/payment/visaelectron.png') }}" alt="" class="image">
							</div>
						</div> --}}
					</article>
					<article class="w-100 p-3">
						<section class="d-flex w-100 cart-list align-items-center">
							<figure class="cart-figure" style="height: 80px;">
								<a href="{{ route('Producto') }}"><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" width="100%" height="100%"></a>
							</figure>
							<ul class="cart-descripcion" style="width:55%">
								<li>Baile de un Angel</li>
								<li>CONTENIDO: 0.70LTS</li>
							</ul>
							<input type="text" class="cart-select" style="width:15%" value="5">
							<span class="cart-trash">
								<i class="fa fa-trash"></i>
							</span>
						</section>	
						<section class="d-flex w-100 cart-list align-items-center">
							<figure class="cart-figure" style="height: 80px;">
								<a href="{{ route('Producto') }}"><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" width="100%" height="100%"></a>
							</figure>
							<ul class="cart-descripcion" style="width:55%">
								<li>Baile de un Angel</li>
								<li>CONTENIDO: 0.70LTS</li>
							</ul>
							<input type="text" class="cart-select" style="width:15%" value="5">
							<span class="cart-trash">
								<i class="fa fa-trash"></i>
							</span>
						</section>	
						<section class="d-flex w-100 cart-list align-items-center">
							<figure class="cart-figure" style="height: 80px;">
								<a href="{{ route('Producto') }}"><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" width="100%" height="100%"></a>
							</figure>
							<ul class="cart-descripcion" style="width:55%">
								<li>Baile de un Angel</li>
								<li>CONTENIDO: 0.70LTS</li>
							</ul>
							<input type="text" class="cart-select" style="width:15%" value="5">
							<span class="cart-trash">
								<i class="fa fa-trash"></i>
							</span>
						</section>	
						<section class="d-flex w-100 cart-list align-items-center">
							<figure class="cart-figure" style="height: 80px;">
								<a href="{{ route('Producto') }}"><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" width="100%" height="100%"></a>
							</figure>
							<ul class="cart-descripcion" style="width:55%">
								<li>Baile de un Angel</li>
								<li>CONTENIDO: 0.70LTS</li>
							</ul>
							<input type="text" class="cart-select" style="width:15%" value="5">
							<span class="cart-trash">
								<i class="fa fa-trash"></i>
							</span>
						</section>	
						<hr>
						<section class="text-center">
							<button style="padding: 8px 22px; background: orange; border:2px solid #441801; border-radius: 6
							px;">Finalizar Compra</button>
						</section>
					</article>
				</section>
			</form>
		</div>
		
	</section>	

@endsection