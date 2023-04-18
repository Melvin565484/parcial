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
        Schema::create('table_ventas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             //campos de la tabla
             $table->integer('cantidad vendida');
             $table->integer('precio');
             $table->integer('fecha de venta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_ventas');
    }
};
