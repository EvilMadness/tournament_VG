<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    protected $table = 'personaje';
    protected $primaryKey ='id';

    protected $fillable = ['nombre','descripcion','imagen'];

    protected $hidden = ['id'];
    public $timestamps = false;
}
