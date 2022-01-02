<x-backend>

    @php

    $id=$schedule->id;
    $day=$schedule->day;
    $start_time=$schedule->start_time;
    $end_time=$schedule->end_time;
    $doctor_id=$schedule->doctor_id;

    @endphp

	<main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Schedule Form </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{route('backside.schedule.index')}}" class="btn btn-outline-primary">
                        <i class="icofont-double-left icofont-1x"></i>
                    </a>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form action="{{ route('backside.schedule.update',$id)}}" method="POST">

                            	@csrf
                                @method('PUT')
                                
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Days </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="day" value="{{$day}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('day')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Start_time </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="start_time" value="{{$start_time}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('start_time')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> End_time </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="end_time" value="{{$end_time}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('end_time')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="specialityid" class="col-sm-2 col-form-label"> Doctor </label>
                                    <div class="col-sm-10">
                                        <select name="doctor_id" class="form-control">

                                            <option value="choose">Choose Doctor</option>

                                            @foreach($doctors as $doctor)

                                            <option value="{{ $doctor->id }}" @if($doctor_id == $doctor->id) {{'selected'}} @endif> 

                                                {{ $doctor->name }}

                                            </option>

                                            @endforeach

                                        </select>

                                        <div class="text-danger form-control-feedback">
                                          {{$errors->first('doctor_id')}}
                                      </div>

                                  </div>
                              </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="icofont-save"></i>
                                            Update
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-backend>