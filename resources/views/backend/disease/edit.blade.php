<x-backend>

    @php

    $id=$disease->id;
    $name=$disease->name;
    $speciality_id=$disease->speciality_id;

    @endphp

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1> <i class="icofont-list"></i> Disease Edit Form </h1>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <a href="{{route('backside.disease.index')}}" class="btn btn-outline-primary">
                    <i class="icofont-double-left icofont-1x"></i>
                </a>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form action="{{route ('backside.disease.update',$id)}}" method="post">

                           @csrf
                           @method('PUT')

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
                        <label for="specialityid" class="col-sm-2 col-form-label"> Speciality </label>
                        <div class="col-sm-10">
                            <select name="speciality_id" class="form-control">

                                <option value="choose">Choose Speciality</option>

                                @foreach($specialities as $speciality)

                                <option value="{{ $speciality->id }}" @if($speciality_id == $speciality->id) {{'selected'}} @endif> {{ $speciality->name }} </option>
                                
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