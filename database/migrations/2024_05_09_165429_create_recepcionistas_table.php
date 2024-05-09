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
        Schema::create('recepcionistas', function (Blueprint $table) {
            $table->id("CI");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("correoElectrinico");
            $table->char("sexo");
            $table->integer("telefono");
            $table->string("turno");
            $table->float("sueldo");
            
            $table->unsignedBigInteger("Id_Usuario");
            $table->foreign("Id_Usuario")->references("id")->on("usuarios")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepcionistas');
    }
};
