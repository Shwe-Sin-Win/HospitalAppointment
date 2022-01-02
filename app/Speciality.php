<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speciality extends Model
{
    protected $fillable=[
    	'name'
    ];

    public function diseases()
    {
    	return $this->hasMany('App\Disease');
    }

    public function doctors()
    {
    	return $this->hasMany('App\Doctor');
    }
}
