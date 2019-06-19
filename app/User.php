<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;
    protected $guarded = [];

    protected $fillable = ['name','email','password','Voornaam','Achternaam','Tussenvoegsel','Postcode','Straat','Huisnr','Plaats','TelefoonNR','isEmployee','isAdmin'];


    public function orders()
    {
        return $this->hasMany(Order::class, 'KlantID');
    }

}
