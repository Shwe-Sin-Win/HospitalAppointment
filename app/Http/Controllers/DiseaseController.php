<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Disease;
use App\Speciality;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases=Disease::all();
        return view('backend.disease.list',compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $specialities=Speciality::all();
        return view('backend.disease.new',compact('specialities'));
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
            'name' => ['required','string','max:255','unique:diseases'],
            'speciality_id' => 'required|numeric|min:0|not_in:0'
        ]);

        if($validator){
            $name=$request->name;
            $speciality_id=$request->speciality_id;

            //dd($speciality_id);

            //Data insert
            $disease=new Disease();
            $disease->name=$name;
            $disease->speciality_id=$speciality_id;
            $disease->save();

            return redirect()->route('backside.disease.index')->with('successMsg','New Disease is ADDED in your data');
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
        $disease=Disease::find($id); 
        $specialities=Speciality::all(); 
        return view('backend.disease.edit',compact('disease','specialities'));
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
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'speciality_id' => 'required|numeric|min:0|not_in:0'
        ]);

        if($validator)
        {
            $name = $request->name;
            $speciality_id = $request->speciality_id;

            // Data insert
            $disease = Disease::find($id);
            $disease->name = $name;
            $disease->speciality_id = $speciality_id;
            $disease->save();

            return redirect()->route('backside.disease.index')->with('successMsg','New Disease is ADDED in your data');
        }
        else{
            return Redirect::back()->withErrors($validator);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disease=Disease::find($id);
        
        $disease->delete();

        return redirect()->route('backside.disease.index')->with('successMsg','Existing Disease is DELETED in your data');
    }
}
