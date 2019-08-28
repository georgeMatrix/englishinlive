<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlEscolar extends Model
{
    protected $fillable = [
        'grupo',
        'escolaridad',
        'noControl',
        'cicloEscolar',
        'edad',
        'incorporados',
        'sexo',
        'niveles',
        'maestro',
        'horarioSep',
        'curp',
        'horario',
        'modulosAcreditados',
        'nombreCompleto'
    ];

    public function nivelesMethod(){
        return $this->belongsTo(Nivel::class, 'niveles');
    }
}
