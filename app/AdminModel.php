<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';

    protected $fillable = ['aName','aPassword','aEmail'];

    /*
     * function setUpdatedAt and setCreatedAt is being overidden here
     * to stop 'updated_at' and 'created_at' columns from automatically being added to database
     * in /database/migrations/ <any file here>
     */
    /*    public function setUpdatedAt($value)
        {
            return NULL;
        }
        public function setCreatedAt($value)
        {
            return NULL;
        }*/
}
