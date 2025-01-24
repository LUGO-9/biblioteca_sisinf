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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('garantia_id')->constrained('garantias')->onDelete('cascade');
            $table->foreignId('lector_id')->constrained('lectores')->onDelete('cascade');
            $table->foreignId('ejemplar_id')->constrained('ejemplares')->onDelete('cascade');
            $table->string('tipo_prestamo',20);
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->string('estado',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
