<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InicioModel extends Model
{
    protected $table = 'users';

    protected $fillable = ['uName','uPassword','uEmail','uLocation'];

    /*
     * function setUpdatedAt and setCreatedAt is being overidden here
     * to stop 'updated_at' and 'created_at' columns from automatically being added to database
     * in /database/migrations/ <any file here>
     */
    public function setUpdatedAt($value)
    {
        return NULL;
    }
    public function setCreatedAt($value)
    {
        return NULL;
    }
}
