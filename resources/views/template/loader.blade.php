<div style="width: 100vw;height: 100vh;position: fixed;z-index: 99999;overflow: hidden;background: black;" id="loader">
	<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
		<img src="{{ asset('public/imagenes/gif/Preloader.gif') }}" style="width: 250px; height: 220px;">
	</div>
</div>

<script type="text/javascript">	
	function loading(){
		setTimeout(closeAnything, 2500);
	}

	function closeAnything(){
		$('#loader').css({'background' : 'transparent'}).fadeOut('slow');
	}

	$(document).ready(function(){
		loading();
		$('form').on('submit', function(){
			$('#loader').fadeIn();
		});
	});

	function loaderShow(){
	    $('#loader').fadeIn();
	}

	function loaderHide(){
		$('#loader').fadeOut();
	}

</script>