<x-frontend>
	
	{{-- Package Card --}}
		<div class="container">
			<div class="row pb-5 pt-5">
				<div class="col-xl-12 col-lg-12 text-center pt-5 pb-5">
					<h2 class="display-4">Recommended Package</h2>
				</div>

				@foreach($data[3] as $package)
					@php 

						$name=$package->name;
						$photo=$package->photo;
						$description=$package->description;
						$cost=$package->cost;

					@endphp

{{-- 				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="card" style="width: 18rem;">
						<img src="frontend/images/doc_1.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div> --}}

				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 pt-5 pb-5">
						<div class="card pad15 mb-3">
						  	<img src="{{asset($photo)}}" class="card-img-top" alt="..." style="height: 170px; object-fit: cover;">
						  	
						  	<div class="card-body">
						    	<h4 class="card-title text-truncate text-center text-success pt-3">{{$name}}</h4>

						    	<hr class="bg-success" width="100%">

						    	<p class="text-dark">{{$description}}</p>

						    	<h5 class="text-dark pb-3">Cost: {{$cost}} Ks</h5>

								<a href="" class="text-decoration-none text-success" >See More ... {{-- <i class="icofont-rounded-right"></i> --}}</a>
							
						  	</div>
						</div>
					
					</div>

				@endforeach

			</div>
		</div>

	<!-- CTA -->

	<div class="hero__item set-bg" data-setbg="frontend/images/services.jpg" style="height: 220px;">
        <div class="hero__text">
            <div class="container text-center">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="col-md-12 text-xl-left text-center">
							<h3 class="text-light pt-3">Make an appointment with one of our professional Doctors.</h3>
							<p class="text-light pt-2" style="opacity: 50%;">Morbi arcu neque, scelerisque eget ligula ac, congue tempor felis. Integer tempor, eros a egestas.</p>
						</div>
						<div class="col-md-2 ml-xl-auto pt-3 primary-btn text-light"><a href="#">call now</a></div>
					</div>
				</div>
			</div>
			</div>
        </div>
    </div>

    {{-- Our Department --}}
						
		<div class="container pt-5">
			<div class="row">
				<div class="col-xl-12 col-lg-12 text-center pt-5 pb-5">
					<h2 class="display-4">Our Departments</h2>
				</div>
				<div class="categories__slider owl-carousel">
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pt-5 pt-3 text-center">
						<div class="categories__item set-bg" data-setbg="{{asset('frontend/images/dept_1.jpg')}}">
						</div>
						<h5><a href="#">Neonatology</a></h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pt-5 pt-3 text-center">
						<div class="categories__item set-bg" data-setbg="{{asset('frontend/images/dept_2.jpg')}}">
						</div>
						<h5><a href="#">Dentistry</a></h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pt-5 pt-3 text-center">
						<div class="categories__item set-bg" data-setbg="{{asset('frontend/images/dept_3.jpg')}}">
						</div>
						<h5><a href="#">Orthopedics</a></h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pt-5 pt-3 text-center">
						<div class="categories__item set-bg" data-setbg="{{asset('frontend/images/dept_4.jpg')}}">
						</div>
						<h5><a href="#">Laboratory</a></h5>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 pt-5 pt-3 text-center">
						<div class="categories__item set-bg" data-setbg="{{asset('frontend/images/dept_5.jpg')}}">
						</div>
						<h5><a href="#">Casualty</a></h5>
					</div>
				</div>
			</div>
		</div>
		<!-- end carousel -->

					</div>
						
				</div>
			</div>
		</div>
	</div>

	
	{{-- Our Services --}}

	<div class="container">
		<div class="row pb-5">
			<div class="col-xl-12 col-lg-12 text-center pt-5 pb-5">
				<h2 class="display-4">Our Services</h2>
			</div>
					<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6 pt-2 pb-5">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="pr-3 py-4"><img src="frontend/images/icon_1.svg" alt="" width="50" height="50"></div>
							<h5>Cardiology</h5>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6 pt-2 pb-5">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="pr-3 py-4"><img src="frontend/images/icon_2.svg" alt="" width="50" height="50"></div>
							<h5>Gastroenterology</h5>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6 pt-2 pb-5">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="pr-3 py-4"><img src="frontend/images/icon_3.svg" alt="" width="50" height="50"></div>
							<h5>Medical Lab</h5>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="pr-3 py-4"><img src="frontend/images/icon_4.svg" alt="" width="50" height="50"></div>
							<h5>Dental Care</h5>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="pr-3 py-4"><img src="frontend/images/icon_5.svg" alt="" width="50" height="50"></div>
							<h5>Surgery</h5>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="pr-3 py-4"><img src="frontend/images/icon_6.svg" alt="" width="50" height="50"></div>
							<h5>Neurology</h5>
						</div>
						<div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	
</x-frontend>