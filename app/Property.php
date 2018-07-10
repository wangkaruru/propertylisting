<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name','contact','proplocation','propdescription','proptype',
    ];
    protected $table='propertys';
}
