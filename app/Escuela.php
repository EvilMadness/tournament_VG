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

    public function concursante(){
        return $this->belongsTo(Escuela::class, 'id', 'id_escuela');
    }

}
