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
        Schema::create('usrs_permisos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('permiso');
            $table->string('ruta');
            $table->unsignedBigInteger('usrs_menus_id');
            $table->foreign('usrs_menus_id')->references('id')->on('usrs_menus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usrs_permisos');
    }
};
