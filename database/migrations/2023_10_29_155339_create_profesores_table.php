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
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('fecha_nacimiento');
            $table->string('titulo');
            $table->string('universidad');
            $table->date('fecha_egreso');
            $table->string('especializacion')->nullable();
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
