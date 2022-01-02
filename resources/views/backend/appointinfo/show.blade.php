<x-backend>
  @foreach($patients as $patient)
    @php 
        $id=$patient->id;
        $name=$patient->name;
        $email=$patient->email;
        $phone=$patient->phone;
        $age=$patient->age;
        $gender=$patient->gender;

        $cost=$patient->cost;
        $doctor=$patient->dname;
        $speciality=$patient->sname;
        $day=$patient->day;
        $start=$patient->start;
        $end=$patient->end;


    @endphp
  @endforeach

  {{-- <section> --}}
    <main class="app-content">
      <div class="app-title">
        <div>
            <h1> <i class="icofont-list"></i> Patient </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <a href="{{route('backside.appointinfo.index')}}" class="btn btn-outline-primary">
              <i class="icofont-double-left icofont-1x"></i>
            </a>
        </ul>
      </div>

        <div class="container" style="background: #F4FFFF">
            <div class="row">
                <div class="col-12 text-center bg-success pb-5" >
                    <h1 style="padding-top: 50px;">Patient's Information</h1>
                </div>
                <div class="row pt-5">
                  <div class="col-lg-12" style="padding-left: 150px;">
                    <h5 >Doctor Name: <span class="pl-2" style="opacity: 70%;">{{$doctor}}</span></h5>
                    
                    <h5 class="pt-2">Speciality: <span class="pl-2" style="opacity: 79%;">{{$speciality}}</span></h5>
                  </div>
                </div>
            </div>
            <div class="pt-5">
                {{-- <h3>Item Information</h3> --}}
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                        <th scope="col"><span class="border-0"> #</span></th>
                        <th scope="col"> <span class="border-0">Name</span></th>
                        <th scope="col"> <span class="border-0">Age</span></th>
                        <th scope="col"> <span class="border-0">Gender</span></th>
                        <th scope="col"> <span class="border-0">Schedule</span></th>
                        <th scope="col"> <span class="border-0">Cost</span></th>

                        
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"> <span class="border-0">1</span></th>
                      <td> <span class="border-0">{{$name}}</span></td>
                      <td> <span class="border-0">{{$age}}</span></td>
                      <td> <span class="border-0">{{$gender}}</span></td>
                      <td> <span class="border-0">{{$day}}({{$start}} - {{$end}})</span></td>
                      <td> <span class="border-0">{{$cost}}</span></td>

                
                    </tr>
                  </tbody>
                </table>
            </div>
            <div class="row pt-5">
              <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12 pb-5">
                <h5 style="padding-left: 600px;">Total Amount:</h5>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 pb-5">
                <h5 style="padding-left: 250px;">{{$cost}} Ks</h5>
              </div>
            </div>
            
        </div>
    <!-- Breadcrumb Section End -->
    </main>
</x-backend>