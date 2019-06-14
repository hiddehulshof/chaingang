<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    public $timestamps = false;

    public function type()
    {

        return $this->belongsTo(BikeCatagory::class);
    }


}
