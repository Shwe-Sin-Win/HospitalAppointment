<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use App\Schedule;
use App\Doctor;
use App\Speciality;
use Illuminate\Support\Facades\DB;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $appointments=DB::table('appointments')
                    ->join('schedules','schedules.id','appointments.schedule_id')
                    ->join('patients','patients.id','appointments.patient_id')
                    ->select('appointments.*','schedules.day as day','patients.name as name')
                    ->get();

        
        return view('backend.appointinfo.list',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patients=DB::table('patients')
                    ->join('doctors','doctors.id','patients.doctor_id')
                    ->join('schedules','schedules.doctor_id','doctors.id')
                    ->join('specialities','specialities.id','patients.speciality_id')

                    ->where('patients.id',$id)
                    ->select('patients.*','doctors.name as dname','doctors.cost as cost','schedules.day as day','schedules.start_time as start','schedules.end_time as end','specialities.name as sname')
                    ->get();


        return view('backend.appointinfo.show',compact('patients'));
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
