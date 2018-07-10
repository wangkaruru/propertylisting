<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
     protected $fillable = [
        'image','price','location','description',
    ];
    protected $table='listings';
}
