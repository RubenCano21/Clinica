<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        "CI",
        "nombre",
        "apellido",
        "correoElectronico",
        "sexo",
        "telefono",
        "fechaNacimiento",
        "direccion",
        "id_Usuario",
    ];
}
