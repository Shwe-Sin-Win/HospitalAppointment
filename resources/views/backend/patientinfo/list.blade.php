<x-backend>
	<main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Patients </h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <a href="{{route('backside.patientinfo.create')}}" class="btn btn-outline-primary">
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
                                          <th>Age</th>
                                          <th>Gender</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php $i=1; @endphp

                                        @foreach($patients as $patient)

                                        @php 

                                            $id=$patient->id;
                                            $name=$patient->name;
                                            $age=$patient->age;
                                            $phone=$patient->phone;
                                            $email=$patient->email;
                                            $gender=$patient->gender;

                                        @endphp

                                        <tr>
                                            <td> {{$i++}} </td>
                                            <td> 
                                                {{$name}}
                                            </td>
                                            <td> {{$age}} </td>
                                            <td> {{$gender}}</td>
                                            <td> {{$phone}}</td>
                                            <td> {{$email}}</td>
                                            <td>
                                                <a href="{{route('backside.patientinfo.edit',$id)}}" class="btn btn-warning">
                                                    <i class="icofont-ui-settings icofont-1x"></i>
                                                </a>

                                                <form action="{{route('backside.patientinfo.destroy',$id)}}" method="post" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">

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