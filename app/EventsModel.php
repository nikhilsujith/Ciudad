<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model
{
    protected $table = 'events'; //point to the the table

    protected $dates = ['date']; //used to format date in organize event

    //inputs which can be filled by user
    protected $fillable = ['eName','eRegUser','eOrganizer', 'eLocation', 'eSpots','eSpotsRem','eDate','eDesc','eRegEmail'];
    
}
