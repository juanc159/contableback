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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //Texto en el boton
            $table->string('to'); //to del boton y name del route
            $table->string('icon'); //icono
            $table->string('requiredPermission'); // Esta ruta requiere permisos de XXXX
            $table->integer('father')->nullable(); // padre
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
