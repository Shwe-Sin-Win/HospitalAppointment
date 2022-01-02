<x-frontend>
	<main class="app-content">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center pb-5">Appointment</h2>
                </div>
                <div class="col-md-12 text-center">
                    <h5 style="word-spacing: 5px;" class="text-success">Please insert patient's information !</h5>
                </div>
                <div class="col-md-12 pt-5">
                    <div class="tile">
                        <div class="tile-body">

                        @if(session('successMsg') != NULL)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong> ✅ SUCCESS!</strong>
                                {{ session('successMsg') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                            <form action="{{ route('patient.store') }}" method="POST">

                            	@csrf

                                
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="name">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('name')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-2 col-form-label"> Age  </label>
                                    <div class="col-sm-10">
                                      <input type="number" class="form-control" id="age" name="age">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('age')}}
                                    </div>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="gender" class="col-sm-2 col-form-label"> Gender </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="gender" name="gender">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('gender')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-sm-2 col-form-label"> Phone </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="phone" name="phone">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('phone')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label"> Email </label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="name_id" name="email">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('email')}}
                                    </div>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="schedule" class="col-lg-2 col-form-label"> Schedule: </label>

                                    <div class="col-lg-10" style="width: 100px;">
                                        <select name="schedule_id" class="form-control speciality">

                                            <option value="choose">Choose Schedule</option>

                                            @foreach($schedules as $schedule)

                                                <option value="{{$schedule->id}}" >

                                                    {{$schedule->day}}
                                                    (
                                                    {{$schedule->start_time}} -
                                                    {{$schedule->end_time}}
                                                    )

                                                </option>
                                        
                                            @endforeach

                                        </select>

                                        <div class="text-danger form-control-feedback">
                                          {{$errors->first('speciality_id')}}
                                        </div>
                                    </div>
                                

                                    {{-- <label for="schedule_id" class="col-lg-2 col-form-label"> Start time:</label>
                                    <div class="col-lg-2">
                                        <select name="start_time" class="form-control doctor" >

                                            <option value="choose">Choose start_time</option>

                                            @foreach($schedules as $schedule)

                                                <option value="{{$schedule->id}}" >

                                                    {{$schedule->start_time}}

                                                </option>
                                        
                                            @endforeach



                                        </select>

                                        <div class="text-danger form-control-feedback">
                                          {{$errors->first('schedule_id')}}
                                        </div>
                                    </div> --}}

                                    {{-- <label for="schedule_id" class="col-lg-2 col-form-label"> End time:</label>
                                    <div class="col-lg-2">
                                        <select name="end_time" class="form-control schedule ">

                                            <option value="choose">Choose end_time</option>

                                            @foreach($schedules as $schedule)

                                                <option value="{{$schedule->id}}" >

                                                    {{$schedule->end_time}}

                                                </option>
                                        
                                            @endforeach

                                        </select>

                                        <div class="text-danger form-control-feedback">
                                          {{$errors->first('schedule_id')}}
                                        </div>
                                    </div> --}}
                                </div>
                            

                                <div class="form-group row">
                                    <div class="col-lg-12 pt-5">
                                        <button type="submit" class="btn btn-success form-control">
                                            <i class="icofont-save"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-frontend>