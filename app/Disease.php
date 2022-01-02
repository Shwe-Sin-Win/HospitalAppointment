<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disease extends Model
{
    protected $fillable=[
    	'name','speciality_id'
    ];

    public function speciality()
    {
    	return $this->belongsTo('App\Speciality');
    }

    public function patients()
    {
    	return $this->hasMany('App\Patient');
    }
}
