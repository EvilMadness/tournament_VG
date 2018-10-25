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

    public function concursante(){
        return $this->belongsTo(Personaje::class, 'id', 'id_personaje');
    }
}
