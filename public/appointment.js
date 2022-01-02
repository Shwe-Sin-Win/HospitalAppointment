$(document).ready(function(){

	$('.speciality').change(function(argument){
		var speciality_id=$(this).val();

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$('.doctor').prop('disabled',false);

		$.post('/show_doctor',{data:speciality_id},function(response){
			var data=JSON.parse(response);
			var doctors=data[0][0];
			console.log(doctors);

			$('.doctor').empty();

			var i;
			for(i=0; i < doctors.length; i++){

				$('.doctor').append('<option id=' + doctors[i].id + 'value=' + doctors[i].id + '>' + doctors[i].name + '</option>');

				//$(".doctor").html("<option value='doctors[i].id'>'doctors[i].name'</option>");
			}

		});

	});

})