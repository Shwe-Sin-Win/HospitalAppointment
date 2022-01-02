<x-backend>

    @php 
        $id=$doctor->id;
        $name=$doctor->name;
        $profile=$doctor->profile;
        $qualification=$doctor->qualification;
        $email=$doctor->email;
        $phone=$doctor->phone;
        $cost=$doctor->cost;
        $language=$doctor->language;

        $speciality_id=$doctor->speciality_id;

    @endphp
	<main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Time Form </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{route('backside.doctor.index')}}" class="btn btn-outline-primary">
                        <i class="icofont-double-left icofont-1x"></i>
                    </a>
                </ul>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <form action="{{ route('backside.doctor.update',$id) }}" method="POST" enctype="multipart/form-data">

                            	@csrf
                                @method('PUT')

                                <input type="hidden" name="oldProfile" value="{{$profile}}">

                                <div class="form-group row">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Profile </label>
                                    <div class="col-sm-10">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-old" role="tab" aria-controls="nav-home" aria-selected="true">Old Profile</a>

                                                <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-new" role="tab" aria-controls="nav-profile" aria-selected="false">New Profile</a>

                                            </div>
                                        </nav>

                                         <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-old" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <img src="{{asset($profile)}}" class="img-fluid w-25">  
                                                </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="nav-new" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <input type="file" id="logo_id" name="profile">
                                                </div>
                                                </div>
                                            </div>

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('profile')}}
                                    </div>

                                    </div>
                                </div>
                            </div>
                                
                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="name" value="{{ $name }}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('name')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Language  </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="language" value="{{$language}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('language')}}
                                    </div>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Qualification </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="qualification" value="{{ $qualification }}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('qualification')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Phone </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="phone" value="{{ $phone }}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('phone')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label"> Email </label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" id="name_id" name="email" value="{{ $email }}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('email')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cost" class="col-sm-2 col-form-label"> Costs </label>
                                    <div class="col-sm-10">
                                      <input type="number" class="form-control" id="name_id" name="cost" value="{{$cost}}">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('cost')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="specialityid" class="col-sm-2 col-form-label"> Speciality </label>
                                    <div class="col-sm-10">
                                        <select name="speciality_id" class="form-control">

                                            <option value="choose">Choose Speciality</option>

                                            @foreach($specialities as $speciality)

                                            <option value="{{ $speciality->id }}" @if($speciality_id == $speciality->id) {{'selected'}} @endif> 
                                                {{ $speciality->name }}
                                            </option>
                                
                                            @endforeach

                                        </select>

                                        <div class="text-danger form-control-feedback">
                                          {{$errors->first('speciality_id')}}
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