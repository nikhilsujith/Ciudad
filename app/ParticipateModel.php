<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipateModel extends Model
{
    protected $table = 'participants';

    protected $fillable = ['eventName','participantName'];
}
