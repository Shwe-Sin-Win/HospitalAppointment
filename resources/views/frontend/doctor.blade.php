<x-frontend>
    <!-- Product Section Begin -->
    <section class="product">
        <div class="container">
		<div class="row mt-5">
			

			@foreach($doctors as $doctor)
				@php
					$id=$doctor->id;
					$name=$doctor->name;
					$profile=$doctor->profile;
					$language=$doctor->language;
					$qualification=$doctor->qualification;
					$phone=$doctor->phone;
					$email=$doctor->email;
					$cost=$doctor->cost;
					$speciality=$doctor->speciality->name;

				@endphp
				
			@endforeach
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 text-center">
				<img src="{{asset($profile)}}">

				<div class="pt-5">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <a href="#" class="px-3 text-success"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#" class="px-3 text-success"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="px-3 text-success"><i class="fa fa-twitter" aria-hidden="true" class="px-2"></i></a>
                    <a href="#" class="px-3 text-success"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#" class="px-3 text-success"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#" class="px-3 text-success"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </ul>
            	</div>

            	<div class=" row pt-5 pl-5 text-success">
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

				<div class="row pl-5">
					<div class="pt-5 pl-5">
						<a href="{{route('appointment',$id)}}"
						class="text-success" style="border:1px solid #254117; border-radius: 50px;padding: 10px;">

						Appointment

						</a>
					</div>
				</div>
			</div>	

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

				<div class="pl-4">
					<h3 class="text-success">{{$name}}</h3>	
				</div>
				<hr width="95%">

				<div class="pl-4">
					<h4 class="text-success">Speciality</h4>
					<p style="opacity: 70%;" class="pt-4">{{$speciality}}</p>	
				</div>
				<hr width="95%">

				<div class="pl-4">
					<h4 class="text-success">Language Spoken</h4>
					<p style="opacity: 70%;" class="pt-4">{{$language}}</p>	
				</div>
				<hr width="95%">

				<div class="pl-4">
					<h4 class="text-success">Qualitifications</h4>
					<p style="opacity: 70%;" class="pt-4">{{$qualification}}</p>	
				</div>
				<hr width="95%">

				<div class="pl-4">
					<h4 class="text-success">Costs</h4>
					<p style="opacity: 70%;" class="pt-4">{{$cost}} Ks</p>	
				</div>
				<hr width="95%">

				{{-- <div class="pl-4">
					<h4 class="text-success">Doctor's Schedule</h4>
					<h5 style="opacity: 80%;" class="pt-4">{{$day}}</h5>
					<p style="opacity: 70%;" class="pt-2">Start - {{$start}} <br> End - {{$end}}</p>
				
				</div> --}}

				<div class="pl-4">
					<h4 class="text-success">Doctor's Schedule</h4>
					<div class="pt-4">
						<table cellspacing="3" class="text-center">
							<tr class="text-success">
								<th width="100" height="50">Day</th>
								<th width="100" height="50">Start</th>
								<th width="100" height="50">End</th>
							</tr>

				@foreach($schedules as $schedule)
				@php 

					$start=$schedule->start_time;
					$end=$schedule->end_time;
					$day=$schedule->day;

				@endphp

							<tr class="pt-5" style="opacity: 70%;">
								<td>{{$day}}</td>
								<td>{{$start}}</td>
								<td>{{$end}}</td>
							</tr>

							@endforeach

						</table>
					</div>	
				</div>

				<hr width="95%">

				<div class="row">
				<div class="col-lg-4">
					<h4 class="text-success">Phone</h4>
					<p style="opacity: 70%;" class="pt-4">{{$phone}}</p>
				</div>

				<div class="col-lg-4">
					<h4 class="text-success">Email</h4>
					<p style="opacity: 70%;" class="pt-4">{{$email}}</p>	
				</div>

				<hr width="95%">
				
			</div>
        </div>
    </section>
    <!-- Product Section End -->
</x-frontend>