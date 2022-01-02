<x-backend>
	<main class="app-content">
            <div class="app-title">
                <div>
                    <h1> <i class="icofont-list"></i> Appointments </h1>
                </div>
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
                                          <th>Appointmentdate</th>
                                          <th>Schedule</th>
                                          <th>Patient_name</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php $i=1; @endphp

                                        @foreach($appointments as $appoint)

                                        @php 

                                            $id=$appoint->id;
                                            $date=$appoint->appointmentdate;
                                            $schedule=$appoint->day;
                                            $patient=$appoint->name;

                                        @endphp

                                        <tr>
                                            <td> {{$i++}} </td>
                                            <td> 
                                                {{$date}}
                                            </td>
                                            <td> {{$schedule}} </td>
                                            <td> {{$patient}}</td>
                                            <td>
                                                <a href="{{route('backside.appointinfo.show',$id)}}" class="btn btn-primary">
                                                    <i class="icofont-info icofont-1x"></i>
                                                </a>

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