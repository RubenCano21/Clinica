<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcionista extends Model
{
    use HasFactory;

    protected $fillable = [
        "CI",
        "nombre",
        "apellido",
        "correoElectronico",
        "sexo",
        "telefono",
        "turno",
        "sueldo",
        "id_Usuario",
    ];
}
