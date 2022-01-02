<x-frontend>
	<!-- Breadcrumb Section Begin -->
	<section class="breadcrumb-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcrumb__text">
						<h2> Packages </h2>
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
			<div class="row mt-5">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

					<div class="row">
						@foreach($packages as $package)

						@php

						$id=$package->id;
						$name=$package->name;
						$photo=$package->photo;
						$description=$package->description;
						$cost=$package->cost;

						@endphp

						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
							<div class="card pad15 mb-3">
						  	<img src="{{asset($photo)}}" class="card-img-top" alt="..." style="height: 170px; object-fit: cover;">
						  	
						  	<div class="card-body">
						    	<h4 class="card-title text-truncate text-center text-success pt-3">{{$name}}</h4>

						    	<hr class="bg-success" width="100%">

						    	<p class="text-dark">{{$description}} ...</p>

						    	<h5 class="text-dark pb-3">Cost: {{$cost}} Ks</h5>

								<a href="" class="text-decoration-none text-success" >See More ... {{-- <i class="icofont-rounded-right"></i> --}}</a>
							
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