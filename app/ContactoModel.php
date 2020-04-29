<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    protected $table = 'contacto';

    protected $fillable = ['cPhone','cName', 'cTitle', 'cDesc'];


    /*
     * function setUpdatedAt and setCreatedAt is being overidden here
     * to stop 'updated_at' and 'created_at' columns from automatically being added to database
     * in /database/migrations/ <any file here>
     * */
}
