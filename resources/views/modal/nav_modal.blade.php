<div class="modal">
	<div class="modal-header d-flex justify-content-between align-items-center" style="padding: 10px 0">
		<div style="width: 55px;height: 37px;">
			<img src="{{ asset('public/imagenes/fondo_baile.png')}}" alt="" width="100%" height="100%">
		</div>
	  	<i class="fa fa-times-circle close"></i>    
	</div>
	<div class="modal-body">
		<ul class="modal-link">
			<a href="{{ route('Index') }}" style="color: #888888"><li>Home</li></a>
			<a href="{{ route('Nosotros') }}" style="color: #888888"><li>Nosotros</li></a>
			<a href="{{ route('Producto') }}" style="color: #888888"><li>Producto</li></a>
			<a href="{{ route('Unirte') }}" style="color: #888888"><li>Unirte</li></a>
			<a href="{{ route('Contacto') }}" style="color: #888888"><li>Contacto</li></a>
		</ul>
	</div>
	<div class="modal-footer">
	</div>
</div>