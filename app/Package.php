<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable=[
    	'name','photo','description','cost'
    ];
}
