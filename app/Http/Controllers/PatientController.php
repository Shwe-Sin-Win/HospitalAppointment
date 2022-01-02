<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;
use App\Doctor;
use App\Patient;
use App\Schedule;
use Carbon\Carbon;


use Illuminate\Support\Facades\DB;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function show_doctor(Request $request)
    // {
    //     $speciality_id = $request->data;

    //     $doctors=DB::table('doctors')
    //             ->join('specialities','specialities.id','doctors.speciality_id')
    //             ->where('doctors.speciality_id',$speciality_id)
    //             ->select('doctors.*')
    //             ->get();

    //     $data[] = [$doctors];
    //     echo json_encode($data);
    // }

    public function index()
    {
        
        $patients=Patient::all();
        return view('backend.patientinfo.list',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $specialities = Speciality::all();
        $doctors = Doctor::all();
        $schedules=Schedule::all();
        return view('frontend.patients',compact('specialities','doctors','schedules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=$request->validate([
            'name' => ['required','string','max:255'],
            'age' => ['required','string','max:255'],
            'gender' => ['required','string','max:255'],
            'phone' => ['required','string','max:255'],
            'email' => ['required','string','max:255']
        ]);

        if($validator)
        {
            
            $name=$request->name;
            $age=$request->age;
            $gender=$request->gender;
            $phone=$request->phone;
            $email=$request->email;

            $schedule_id=$request->schedule_id;

            $schedules=DB::table('schedules')
                        ->where('id',$schedule_id)
                        ->select('doctor_id')
                        ->get();
            
            $doctor_id=$schedules[0]->doctor_id;

            $speciality=Doctor::select('speciality_id')
                        ->where('id',$doctor_id)
                        ->get();

            //dd($speciality_id[0]->speciality_id);
            $speciality_id=$speciality[0]->speciality_id;
            //dd($speciality_id);

            // $schedules = Schedule::where([
            //         'day' => $day,
            //         'start_time' => $start_time,
            //         'end_time' => $end_time
            //         ])->get();
            // dd($schedules);

            $appointmentdate = Carbon::now();

            //Data insert
            $patient=new Patient;

            //name | profile table column name
            $patient->name=$name;
            $patient->age=$age;
            $patient->gender=$gender;
            $patient->phone=$phone;
            $patient->email=$email;
            $patient->doctor_id=$doctor_id;
            $patient->speciality_id=$speciality_id;

            $patient->save();

            $patient->schedules()->attach($schedule_id,['appointmentdate'=>$appointmentdate]);

            return view('frontend.success');
        }else{
            return redirect::back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
