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
        Schema::create('lectores', function (Blueprint $table) {
            $table->id();
            $table->string('ci',10);
            $table->string('nombre',35);
            $table->string('apellidos',40);
            $table->string('carrera',40);
            $table->string('telefono',10);
            $table->string('correo',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lectores');
    }
};
