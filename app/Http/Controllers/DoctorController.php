<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;
use App\Speciality;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::all();
        return view('backend.doctor.list',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialities=Speciality::all();
        return view('backend.doctor.new',compact('specialities'));
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
            'name' => ['required','string','max:255','unique:doctors'],
            'profile' => 'required|mimes:jpeg,bmp,png,jpg,webp',
            'phone' => ['required','string','max:255','unique:doctors'],
            'email' => ['required','string','max:255','unique:doctors'],
            'cost' => ['required','string','max:255'],
            'speciality_id' => 'required|numeric|min:0|not_in:0'
        ]);

        if($validator)
        {
            $name=$request->name;
            $speciality_id=$request->speciality_id;
            $phone=$request->phone;
            $qualification=$request->qualification;
            $email=$request->email;
            $cost=$request->cost;
            $language=$request->language;

            $profile=$request->profile;


            $imageName=time().'.'.$profile->extension();

            $profile->move(public_path('images/doctor'),$imageName);

            $filepath='images/doctor/'.$imageName;

            //Data insert
            $doctor=new Doctor;
            //name | profile table column name
            $doctor->name=$name;
            $doctor->speciality_id=$speciality_id;
            $doctor->phone=$phone;
            $doctor->qualification=$qualification;
            $doctor->email=$email;
            $doctor->cost=$cost;
            $doctor->language=$language;


            $doctor->profile=$filepath;
            $doctor->save();

            return redirect()->route('backside.doctor.index')->with('successMsg','New Doctor is ADDED in your data');
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
        $specialities = Speciality::all();

        $doctor = Doctor::find($id);

        return view('backend.doctor.edit',compact('specialities','doctor'));
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
        $name=$request->name;
        $phone=$request->phone;
        $email=$request->email;
        $cost=$request->cost;
        $language=$request->language;
        $qualification=$request->qualification;
        $speciality_id=$request->speciality_id;

        $newprofile=$request->profile;
        $oldprofile=$request->oldProfile;

        //dd($oldprofile);

        if($request->hasFile('profile')){
            //file upload
            $imageName=time().'.'.$newprofile->extension();

            $newprofile->move(public_path('images/doctor'),$imageName);

            $filepath='images/doctor/'.$imageName;

            if(\File::exists(public_path($oldprofile))){
                \File::delete(public_path($oldprofile));
            }


        }else{
            $filepath=$oldprofile;
        }

        //Data update
        $doctor=Doctor::find($id);
        $doctor->name=$name;
        $doctor->phone=$phone;
        $doctor->email=$email;
        $doctor->cost=$cost;
        $doctor->language=$language;
        $doctor->qualification=$qualification;
        $doctor->speciality_id=$speciality_id;

        $doctor->profile=$filepath;
        $doctor->save();

        return redirect()->route('backside.doctor.index')->with('successMsg','Existing Doctor is UPDATED in your data');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=Doctor::find($id);

        $oldprofile = $doctor->profile;

        if(\File::exists(public_path($oldprofile))){
            \File::delete(public_path($oldprofile));
        }
        
        $doctor->delete();

        return redirect()->route('backside.doctor.index')->with('successMsg','Existing Doctor is DELETED in your data');
    }
}
