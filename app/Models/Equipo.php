<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    protected $filiable = [
        'cliente_id',
        'user_id',
        'descripcion',
        'estatus',
        'fecha_e',
        'fecha_s'
    ];

    public function cliente(){
        return $this->belongsTo('\App\Models\Cliente');
    }

    public function user(){
        return $this->belongsTo('\App\Models\User');
    }
    
    public function mantenimientos(){

        return $this->belongsToMany('\App\Models\Mantenimiento');

    }



    use HasFactory;
}
