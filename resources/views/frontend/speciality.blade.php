<x-frontend>
	<!-- Breadcrumb Section Begin -->
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					@foreach($specialitydoctor as $speciality)

					@php 
					$sname=$speciality->speciality->name;

					@endphp
					
					@endforeach

					<div class="breadcrumb__text">
						<h2> {{$sname}} </h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Section End -->

	<!-- Product Section Begin -->
	<section class="product spad">
		<div class="container">
			<!-- Breadcrumb -->
			<nav aria-label="breadcrumb ">
				<ol class="breadcrumb bg-transparent">
					<li class="breadcrumb-item">
						<a href="index.php" class="text-decoration-none text-success"> Home </a>
					</li>
					<li class="breadcrumb-item">
						<a href="#" class="text-decoration-none text-success"> Speciality </a>
					</li>
					<li class="breadcrumb-item">
						<a href="#" class="text-decoration-none text-success"> <?= $sname; ?> </a>
					</li>
				</ol>
			</nav>

			<div class="row mt-5">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					<ul class="list-group">
						@foreach($data[0] as $speciality)

						@php

						$sname=$speciality->name;

						@endphp

						<li class="list-group-item">
							<a href="{{route('speciality',$speciality->id)}}" class="text-decoration-none text-success">{{$sname}}</a>
						</li>

						@endforeach
						
					</ul>
				</div>	

				<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

					<div class="row">
						@foreach($specialitydoctor as $speciality)

						@php
						$id=$speciality->id;
						$name=$speciality->name;
						$profile=$speciality->profile;
						$phone=$speciality->phone;
						$email=$speciality->email;
						$cost=$speciality->cost;

						$sname=$speciality->speciality->name;

						@endphp

						<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
							<div class="card pad15 mb-3">
								<img src="{{asset($profile)}}" class="card-img-top" alt="..." style="height: 170px; object-fit: contain;border-radius: 200px;">
								
								<div class="card-body text-center">
									<h5 class="card-title text-truncate">{{$name}}</h5>

									<hr class="bg-success" width="100%">

									<h5 class="text-success">Speciality</h5>
									<p class="pt-3">{{$sname}}</p>

									<button style="background-color: green;width: 200px; border-radius: 50px;"><a href="{{route('doctor',$id)}}" class="text-decoration-none text-light" >View Profile</a></button>

									<div class="pt-5 pl-4">
										<div class="hero__search__phone__icon">
											<i class="fa fa-phone"></i>
										</div>
										<div class="hero__search__phone__icon">
											<i class="icofont-calendar"></i>
										</div>
										<div class="hero__search__phone__icon">
											<i class="icofont-email"></i>
										</div>
									</div>
									
								</div>
							</div>
							
						</div>
						@endforeach

					</div>
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-end">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="icofont-rounded-left"></i>
								</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">
									<i class="icofont-rounded-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		<!-- Product Section End -->
	</x-frontend>