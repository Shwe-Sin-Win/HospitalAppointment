<x-backend>
	<main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Doctor Form </h1>
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
                            <form action="{{ route('backside.doctor.store') }}" method="POST" enctype="multipart/form-data">

                            	@csrf

                                <div class="form-group row">
                                    <label for="photo_id" class="col-sm-2 col-form-label"> Profile </label>
                                    <div class="col-sm-10">
                                      <input type="file" id="photo_id" name="profile">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('profile')}}
                                    </div>

                                    </div>
                                </div>
                                
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
                                    <label for="name_id" class="col-sm-2 col-form-label"> Language  </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="language">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('language')}}
                                    </div>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Qualification </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="qualification">

                                    <div class="text-danger form-control-feedback">
                                          {{$errors->first('qualification')}}
                                    </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name_id" class="col-sm-2 col-form-label"> Phone </label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name_id" name="phone">

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
                                    <label for="cost" class="col-sm-2 col-form-label"> Costs </label>
                                    <div class="col-sm-10">
                                      <input type="number" class="form-control" id="name_id" name="cost">

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

                                                <option value="{{$speciality->id}}">
                                                    {{$speciality->name}}
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
                                            Save
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