<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    protected $fillable=[
    	'day','start_time','end_time','doctor_id'
    ];

    public function doctor()
    {
    	return $this->belongsTo('App\Doctor');
    }
    public function patients()
     {
     	return $this->belongsToMany('App\Patient','appointments','patient_id','schedule_id')->withPivot('appointmentdate')
    		->withTimestamps();
     }
}
