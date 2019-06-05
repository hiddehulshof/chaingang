<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeCatagory extends Model
{
    protected $table = 'bikecategories';

    public function bikes()
    {
        return $this->hasMany(Bike::class, 'typeId');
    }
}
