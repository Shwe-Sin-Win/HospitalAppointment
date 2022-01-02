<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    protected $fillable=[
    	'name','profile','language','qualification','phone','email','cost','speciality_id'
    ];

    public function speciality()
    {
    	return $this->belongsTo('App\Speciality');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }

    
}
