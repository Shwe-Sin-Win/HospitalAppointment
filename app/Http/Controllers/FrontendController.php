<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Speciality;
use App\Disease;
use App\Schedule;
use App\Doctor;
use App\Patient;
use App\Package;


class FrontendController extends Controller
{
    public function index()
    {
    	
    	$specialities=Speciality::all();
    	$diseases=Disease::all();

    	return view('frontend.index',compact('diseases','diseases'));
    }

    public function speciality($id)
    {
    
    	$specialitydoctor=Doctor::where('speciality_id',$id)->get();

    	//dd($specialities);
    	return view('frontend.speciality',compact('specialitydoctor'));
    }

    public function doctor($id)
    {
        $schedules=Schedule::where('doctor_id',$id)->get();
    	$doctors=Doctor::where('id',$id)->get();

    	//dd($doctors);
    	return view('frontend.doctor',compact('doctors','schedules'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function package()
    {
        $packages=Package::all();

        return view('frontend.package',compact('packages'));
    }

    public function appointment($id)
    {
        $schedules=Schedule::where('doctor_id',$id)->get();
        $doctors=Doctor::where('id',$id)->get();

        //dd($doctors);
        return view('frontend.appointment',compact('doctors','schedules'));
    }

    public function appoint_create(Request $request)
    {

        //dd($request);
        $doctor_id=$request->doctor_id;
        $speciality_id=$request->speciality_id;

        $patient_name=$request->name;
        $patient_age=$request->age;
        $patient_gender=$request->gender;
        $patient_phone=$request->phone;
        $patient_email=$request->email;
        // dd($appointments);
        // $doctor_id=$appointments['doctor_id'];
        // $speciality_id=$appointments['speciality_id'];
        // dd($doctor_id);
        // $doctor_name=$appointments->name;
        // $doctor_profile=$appointments->profile;
        // $doctor_language=$appointments->guage;
        // $doctor_qualification=$appointments->qualification;
        // $doctor_phone=$appointments->phone;
        // $doctor_email=$appointments->email;
        // $doctor_cost=$appointments->cost;

        // $patient_name=$appointments['patient_name'];
        // $patient_age=$appointments['patient_age'];
        // $patient_gender=$appointments['patient_gender'];
        // $patient_phone=$appointments['patient_phone'];
        // $patient_email=$appointments['patient_email'];


        $schedule_id=$request->schedule_id;
        $appointmentdate = Carbon::now();
        $patients=new Patient;
        $patients->name=$patient_name;
        $patients->age=$patient_age;
        $patients->gender=$patient_gender;
        $patients->phone=$patient_phone;
        $patients->email=$patient_email;
        $patients->doctor_id=$doctor_id;
        $patients->speciality_id=$speciality_id;
        // dd($patients);
        $patients->save();

        $patients->schedules()->attach($schedule_id,['appointmentdate'=>$appointmentdate]);

        return view('frontend.success');

    }

    public function success()
    {
        return view('frontend.success');
    }

}
