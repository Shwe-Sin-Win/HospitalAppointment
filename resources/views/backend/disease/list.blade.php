<x-backend>
	<main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Diseases </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{route('backside.disease.create')}}" class="btn btn-outline-primary">
                        <i class="icofont-plus icofont-1x"></i>
                    </a>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
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

                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr class="bg-success text-light">
                                          <th>#</th>
                                          <th>Name</th>
                                          <th>Speciality</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php $i=1; @endphp

                                        @foreach($diseases as $disease)

                                        @php 

                                            $id=$disease->id;
                                            $name=$disease->name;
                                            $speciality=$disease->speciality->name;

                                        @endphp
                                        <tr>
                                            <td> {{$i++}} </td>
                                            <td> {{$name}} </td>
                                            <td> {{$speciality}} </td>
                                            <td>
                                                <a href="{{route('backside.disease.edit',$id)}}" class="btn btn-warning">
                                                    <i class="icofont-ui-settings icofont-1x"></i>
                                                </a>

                                                <form action="{{route('backside.disease.destroy',$id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-danger">
                                                    <i class="icofont-close icofont-1x"></i>
                                                </button>
                                            </form>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
</x-backend>