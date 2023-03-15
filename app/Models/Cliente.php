<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $filiable = [
        'nombre',
        'apellidos',
        'id_number',
        'email',
        'direccion',
        'tel'
    ];

    public function equipo(){
        return $this->hasMany('\App\Models\Equipo');
    }


    use HasFactory;
}
