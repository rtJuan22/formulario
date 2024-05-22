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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->String('matricula', 10)->unique();
            $table->String('nombre', 120);
            $table->date('fecha_nacimiento');
            $table->String('telefono', 20);
            $table->String('email', 50)->nullable();
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
