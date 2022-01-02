<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Time;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $times=Time::all();
        // return view('backend.time.list',compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.time.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator=$request->validate([
        //     'day' => ['required','string','max:255','unique:times'],
        //     'start_time' => ['required','string','max:255','unique:times'],
        //     'end_time' => ['required','string','max:255','unique:times'],
            
        // ]);

        // if($validator)
        // {
        //     $day=$request->day;
        //     $start=$request->start_time;
        //     $end=$request->end_time;

        
        //     //Data insert
        //     $time=new Time;

        //     $time->day=$day;
        //     $time->start_time=$start;
        //     $time->end_time=$end;

        //     $time->save();

        //     return redirect()->route('backside.time.index')->with('successMsg','New Time is ADDED in your data');
        // }else{
        //     return redirect::back()->withErrors($validator);
        // }
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
        // $time=Time::find($id);
        
        // return view('backend.time.edit',compact('time'));
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
        // $day=$request->day;
        // $start_time=$request->start_time;
        // $end_time=$request->end_time;


        // //Data update
        // $time=Time::find($id);
        // $time->day=$day;
        // $time->start_time=$start_time;
        // $time->end_time=$end_time;
        
        // $time->save();

        // return redirect()->route('backside.time.index')->with('successMsg','Existing Time is UPDATED in your data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $time=Time::find($id);
        
        // $time->delete();

        // return redirect()->route('backside.time.index')->with('successMsg','Existing Time is DELETED in your data');
    
    }
}
