<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table ='booking';
    protected $fillable =[
    						'fullname',
    						'country',
    						'date',
    						'package',
    						'person',
    						'pickup',
    						'pickuparea',
    						'contact',
    						'food'
    					];
}
