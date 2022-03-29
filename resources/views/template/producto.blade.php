@extends('layouts.web')

@section('content')

	<section class="SectionProduct" style="background: #000; height: 100%; color: white; padding: 3rem 0 2rem;">
		<div class="container">
			<h2 style="font-size: 2.5rem">Producto</h2>
	
			<article class="d-flex justify-content-between">
				<aside style="width: 40%;padding: 1rem 0;" class="d-flex">
					<ul style="margin-right: 1rem">
						<li><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" style="width: 100px; height: 100px; margin-bottom: 10px; border:1px solid orange"></li>
						<li><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" style="width: 100px; height: 100px; margin-bottom: 10px; border:1px solid #888888"></li>
						<li><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" style="width: 100px; height: 100px; margin-bottom: 10px; border:1px solid #888888"></li>
						<li><img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" style="width: 100px; height: 100px; margin-bottom: 10px; border:1px solid #888888"></li>
					</ul>
					<figure style="width: 100%; height: 440px">
						<img src="{{ asset('public/imagenes/bailedeunangel.jpg') }}" alt="" style="width: 100%; height: 100%; border: 1px solid orange;">
					</figure>
				</aside>
				<aside style="width: 60%;padding: 1rem 0 1rem 1rem; text-align: justify;">
					<h2>Ponche de Crema de Whisky Artesanal</h2>
					<h3>"Baile de un Angel"</h3>
					<div class="d-flex justify-content-between">
						<ul style="padding-top: 0.5rem">
							<li class="fa fa-star" style="color: orange; letter-spacing: 5px; font-size: 1.4rem"></li>
							<li class="fa fa-star" style="color: orange; letter-spacing: 5px; font-size: 1.4rem"></li>
							<li class="fa fa-star" style="color: orange; letter-spacing: 5px; font-size: 1.4rem"></li>
							<li class="fa fa-star" style="color: orange; letter-spacing: 5px; font-size: 1.4rem"></li>
							<li class="fa fa-star" style="color: orange; letter-spacing: 5px; font-size: 1.4rem"></li>
						</ul>
						<span class="d-flex">
							<h2>Bs. 12.00</h2> <sub>unid</sub>
						</span>
					</div>
					<article class="" style="padding: 1rem 0; line-height: 1.5rem;">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga repudiandae totam minus autem, quis aliquid placeat labore sit explicabo suscipit natus, dolores at architecto tempora incidunt et? Facere vel cupiditate similique veniam in facilis illum vitae nam commodi, sunt esse aliquam aliquid expedita repudiandae at exercitationem animi beatae ratione voluptatibus consequatur corrupti illo, porro optio tempore? Beatae cumque dignissimos magnam dolores debitis assumenda ducimus non placeat, eligendi delectus, commodi voluptate iste dolor voluptas, quam sed numquam neque tempore aliquam nisi.
					</article>
					<h2>¿Cómo hago mi Pedido?</h2>
					<div class="d-flex justify-content-between">
						<aside style="width: 60%; border-right: 1px solid #888888; padding: 0.5rem 2rem 0.5rem 1rem">
							<p style="font-size: 14px; color: orange">1. Elige la(s) Opción(es) e indica la cantidad que necesites.</p>
							<ul style="padding: 0.5rem 0;">
								<li class="d-flex justify-content-between align-items-center" style="padding-bottom: 15px;">
									<p>a.Unidad (Bs. 12.00)</p>
									<div class="d-flex align-items-center">
										<label class="switch">
										  <input type="checkbox">
										  <span class="slider round"></span>
										</label>
										<input type="number" min="0" max="9999" style="width: 60px; padding: 3.5px 4px; border: 1px solid orange; border-radius: 4px; margin-left: 7px; background: #0000009d; color: orange">
									</div>
								</li>
								<li class="d-flex justify-content-between align-items-center" style="padding-bottom: 15px;">
									<p>b.Caja (12 Und. / Bs. 132.00)</p>
									<div class="d-flex align-items-center">
										<label class="switch">
											<input type="checkbox">
											<span class="slider round"></span>
										</label>
										<input type="number" min="0" max="9999" style="width: 60px; padding: 3.5px 4px; border: 1px solid orange; border-radius: 4px; margin-left: 7px; background: #0000009d; color: orange">
									</div>
								</li>
								<li class="d-flex justify-content-between align-items-center" style="padding-bottom: 15px;">
									<p>c.Bulto (72 Unid / Bs. 742.20)</p>
									<div class="d-flex align-items-center">
										<label class="switch">
											<input type="checkbox">
											<span class="slider round"></span>
										</label>
										<input type="number" min="0" max="9999" style="width: 60px; padding: 3.5px 4px; border: 1px solid orange; border-radius: 4px; margin-left: 7px; background: #0000009d; color: orange">
									</div>
								</li>
							</ul>
						</aside>
						<aside style="width: 40%; padding: 0.5rem 1.5rem; text-align: center;">
							<p style="font-size: 14px; color: orange">2. Haz click en COMPRAR y Listo!!</p>
							<button style="margin-top: 1rem; padding: 0.4rem 2rem; font-size: 22px; background: orange; box-shadow: 0px 0px 0px 4px #441801; border: 0; border-radius: 7px;">Comprar <i class="fa fa-shopping-cart"></i></button>
						</aside>
					</div>
				</aside>
			</article>
			<h2>Descripcion</h2>
			<p style="padding: 1rem 0; text-align: justify; line-height: 1.5rem;">
				Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Ipsa, ex, accusantium aperiam at a natus magnam quasi nobis obcaecati rem sit reprehenderit dignissimos tempora reiciendis est nostrum impedit laboriosam atque. Dolore eligendi veniam iste esse minima error illum, deserunt mollitia adipisci sint delectus qui, doloremque perspiciatis voluptatibus! Debitis nulla, earum? Nostrum facere iusto iste eius, modi? Perspiciatis repellendus, odio consectetur fugit tenetur tempora? Deleniti nam, dicta. Similique adipisci nulla quas pariatur accusamus perspiciatis molestias aspernatur officiis, facere est, hic deserunt! Excepturi corrupti tempora blanditiis ducimus ullam aliquam facere dolor dignissimos rerum maxime ratione ea nobis mollitia nesciunt minima quo, provident facilis, perspiciatis numquam architecto adipisci iste ipsam. Deleniti impedit, ipsam aspernatur quaerat sunt atque tempore voluptas, molestiae, quisquam magni quos voluptatibus reiciendis at aliquam sapiente ipsa ipsum nulla vitae exercitationem corporis quae ratione fugit, ut! Nostrum hic ipsa minima! Rerum eum perspiciatis sunt aliquid, similique ea tenetur corrupti nisi ut?
			</p>
		</div>
	</section>

@endsection