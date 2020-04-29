<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable =[
        'tName', 'tLocation', 'tBoard', 'tImage'
    ];
}
