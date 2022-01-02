<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    protected $fillable=[
    	'name','age','gender','phone','email','speciality_id','doctor_id','disease_id'
    ];

    public function disease()
    {
    	return $this->belongsTo('App\Disease');
    }
    public function schedules()
     {
     	return $this->belongsToMany('App\Schedule','appointments','patient_id','schedule_id')->withPivot('appointmentdate')
    		->withTimestamps();
     } 
}
