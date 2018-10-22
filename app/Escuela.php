<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $table = 'escuela';
    protected $primaryKey ='id';

    protected $fillable = ['nombre','municipio'];

    protected $hidden = ['id'];
    public $timestamps = false;
}
