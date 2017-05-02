<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
    	'name',
    	'price',
    	'type',
    	'expire_date',
    	'quantity'
    ];
}
