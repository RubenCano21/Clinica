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
        Schema::create('ejerces', function (Blueprint $table) {
            $table->unsignedBigInteger("Id_Especialidad");
            $table->unsignedBigInteger("Ci_Odontologo");

            $table->primary(["Id_Especialidad","Ci_Odontologo"]);
            $table->foreign("Id_Especialidad")->references("id")->on("especialidads")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("Ci_Odontologo")->references("CI")->on("odontologos")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejerces');
    }
};
