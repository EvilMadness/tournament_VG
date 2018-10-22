<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concursante extends Model
{
    protected $table = 'concursante';
    protected $primaryKey ='id';

    protected $fillable = ['nombre','apaterno','amaterno','email','nickname','password'];

    protected $hidden = ['id'];
    public $timestamps = false;
}
