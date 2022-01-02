<x-frontend>

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
  $speciality_id=$doctor->speciality_id;

  @endphp

  @endforeach

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb__text">
            <h2> Appointment </h2><br>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->
  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h5 style="word-spacing: 5px;" class="text-success">Please insert patient's information !</h5>
        </div>
          <div class="col-md-12 pt-5">
            <div class="tile">
              <div class="tile-body">
                <form method="POST" action="{{route('appoint_create')}}">

                  @csrf

                  <input type="hidden" name="doctor_id" value="{{$id}}">
                  <input type="hidden" name="speciality_id" value="{{$speciality_id}}">

                  <div class="form-group row">
                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pname" name="name">

                      <div class="text-danger form-control-feedback">
                        {{$errors->first('name')}}
                      </div>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name_id" class="col-sm-2 col-form-label"> Age  </label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="age" name="age">

                      <div class="text-danger form-control-feedback">
                        {{$errors->first('age')}}
                      </div>

                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="name_id" class="col-sm-2 col-form-label"> Gender </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="gender" name="gender">

                      <div class="text-danger form-control-feedback">
                        {{$errors->first('gender')}}
                      </div>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="name_id" class="col-sm-2 col-form-label"> Phone </label>
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
                      <input type="email" class="form-control" id="email" name="email">

                      <div class="text-danger form-control-feedback">
                        {{$errors->first('email')}}
                      </div>

                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="schedule_id" class="col-sm-2 col-form-label"> Schedule </label>
                    <div class="col-sm-10">
                      <select class="form-control" name="schedule_id" id="schedule_id">
                        <option value="choose">Choose Schedule</option>

                        @foreach($schedules as $schedule)

                        <option value="{{$schedule->id}}">
                          {{$schedule->day}}
                          ({{$schedule->start_time}} 
                          -
                          {{$schedule->end_time}})
                        </option>

                        @endforeach

                      </select>

                      <div class="text-danger form-control-feedback">
                        {{$errors->first('schedule_id')}}
                      </div>

                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="col-sm-10 pt-5">
        {{-- <button type="submit" class="btn btn-success form-control" style="margin-left: 120px;">
            Make Appointment
          </button> --}}


          <div class="row pl-5 ml-5 pb-5">
            <div class=" col-lg-12 pt-2 text-center ml-5 pl-5">

              @if(Auth::check())

              <button type="submit" class="form-control bg-success">
                <a href="javascript:void(0)"
                class="text-light">

                Make Appointment

                </a>
              </button>

               @else

               <button type="submit" class="form-control bg-success">
                <a href="{{route('login')}}"
                class="text-light">

                Make Appointment

                </a>
              </button>

              @endif

            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
</div>
</div>
</div>
</div>


</x-frontend>
