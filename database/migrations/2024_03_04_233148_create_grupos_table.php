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
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('Usuarios_id')->unique(); //Creando llave foránea para la tabla Usuarios.
            $table->foreign('Usuarios_id')->references('id')->on('Usuarios'); //Referenciando a la tabla Usuarios.
            $table->unsignedBigInteger('Cursos_id')->unique(); //Creando llave foránea para la tabla Cursos.
            $table->foreign('Cursos_id')->references('id')->on('cursos'); //Referenciando a la tabla Cursos.
            $table->char('Nivel', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
