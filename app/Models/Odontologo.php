<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologo extends Model
{
    use HasFactory;

    protected $fillable = [
        "CI",
        "nombre",
        "apellido",
        "correoElectronico",
        "sexo",
        "telefono",
        "matriculaProf",
        "id_Usuario",
    ];
}
