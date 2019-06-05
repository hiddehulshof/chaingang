<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    public function type()
    {
        return $this->belongsTo(BikeCatagory::class);
    }

}
