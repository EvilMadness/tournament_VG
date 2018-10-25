<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';
    protected $primaryKey ='id';

    protected $fillable = ['id','nombre'];

    protected $hidden = ['id'];
    public $timestamps = false;

    public function concursante(){
        return $this->belongsTo(Concursante::class, 'id', 'id_carrera');
    }
}


