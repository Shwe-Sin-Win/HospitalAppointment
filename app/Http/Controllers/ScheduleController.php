<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Schedule;
class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::all();
        $schedules=Schedule::all();
        return view('backend.schedule.list',compact('schedules','doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=Doctor::all();
        return view('backend.schedule.new',compact('doctors'));
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
            'day' => ['required','string','max:255','unique:times'],
            'start_time' => ['required','string','max:255','unique:times'],
            'end_time' => ['required','string','max:255','unique:times'],
            'doctor_id' => 'required|numeric|min:0|not_in:0'
            
        ]);

        if($validator)
        {
            $day=$request->day;
            $start=$request->start_time;
            $end=$request->end_time;
            $doctor_id=$request->doctor_id;

        
            //Data insert
            $schedule=new Schedule;

            $schedule->day=$day;
            $schedule->start_time=$start;
            $schedule->end_time=$end;
            $schedule->doctor_id=$doctor_id;

            $schedule->save();

            return redirect()->route('backside.schedule.index')->with('successMsg','New Schedule is ADDED in your data');
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
        $schedule=Schedule::find($id); 
        $doctors=Doctor::all(); 
        return view('backend.schedule.edit',compact('schedule','doctors'));
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
        $day=$request->day;
        $start_time=$request->start_time;
        $end_time=$request->end_time;
        $doctor_id=$request->doctor_id;


        //Data update
        $schedule=Schedule::find($id);
        $schedule->day=$day;
        $schedule->start_time=$start_time;
        $schedule->end_time=$end_time;
        $schedule->doctor_id=$doctor_id;
        
        $schedule->save();

        return redirect()->route('backside.schedule.index')->with('successMsg','Existing Schedule is UPDATED in your data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule=Schedule::find($id);
        
        $schedule->delete();

        return redirect()->route('backside.schedule.index')->with('successMsg','Existing Schedule is DELETED in your data');
    }
}
