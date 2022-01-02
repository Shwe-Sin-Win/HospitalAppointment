<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Speciality;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialities=Speciality::all();
        return view('backend.speciality.list',compact('specialities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.speciality.new');
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
            'name' => ['required','string','max:255','unique:specialities']
        ]);

        if($validator)
        {
            $name=$request->name;
            
            //Data insert
            $speciality=new Speciality;
            //name | photo table column name
            $speciality->name=$name;
            
            $speciality->save();

            return redirect()->route('backside.speciality.index')->with('successMsg','New Speciality is ADDED in your data');
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
        $speciality=Speciality::find($id);
        
        return view('backend.speciality.edit',compact('speciality'));
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

        //Data update
        $speciality=Speciality::find($id);
        $speciality->name=$name;
        
        $speciality->save();

        return redirect()->route('backside.speciality.index')->with('successMsg','Existing Speciality is UPDATED in your data');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speciality=Speciality::find($id);
        
        $speciality->delete();

        return redirect()->route('backside.speciality.index')->with('successMsg','Existing Speciality is DELETED in your data');
    }
}
