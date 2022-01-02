<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable=[
    	'day','start_time','end_time'
    ];

    public function doctors()
    {
    	return $this->belongsToMany('App\Doctor','schedules','doctor_id','time_id')->withTimestamps();
    }

}
