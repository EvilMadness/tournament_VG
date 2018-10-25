<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concursante extends Model
{
    protected $table = 'concursante';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'apaterno', 'amaterno', 'email', 'nickname', 'password'];

    protected $hidden = ['id'];
    public $timestamps = false;


    public function carrera()
    {
        return $this->hasMany(Carrera::class, 'id', 'id_carrera');
    }
    public function escuela()
    {
        return $this->hasMany(Escuela::class, 'id', 'id_escuela');
    }
    public function personaje()
    {
        return $this->hasMany(Personaje::class, 'id', 'id_personaje');
    }
}
