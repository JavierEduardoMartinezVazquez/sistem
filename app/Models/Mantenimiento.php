<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{

    protected $filiable = [
        'descripcion',
        'precio',
    ];

    public function equipos(){

        return $this->belongsToMany('\App\Models\Equipo');

    }

    use HasFactory;
}
