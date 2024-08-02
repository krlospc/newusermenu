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
        Schema::create('usrs_personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->double('carnet');
            $table->string('complemento');
            $table->date('fecha_nacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usrs_personas');
    }
};
