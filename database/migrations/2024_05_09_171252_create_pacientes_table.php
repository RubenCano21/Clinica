<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id("CI");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("correoElectrinico");
            $table->char("sexo");
            $table->integer("telefono");
            $table->date("fechaNacimiento");
            $table->string("direccion");
            
            $table->unsignedBigInteger("Id_Usuario");
            $table->foreign("Id_Usuario")->references("id")->on("Usuario");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
