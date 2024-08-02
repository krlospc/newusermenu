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
        Schema::create('usrs_roles_permisos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usrs_roles_id');
            $table->unsignedBigInteger('usrs_permisos_id');
            $table->foreign('usrs_roles_id')->references('id')->on('usrs_roles');
            $table->foreign('usrs_permisos_id')->references('id')->on('usrs_permisos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usrs_roles_permisos');
    }
};
