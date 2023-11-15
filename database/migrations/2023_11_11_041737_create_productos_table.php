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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("stock");
            $table->string("descripcion");
            $table->string("fecha_ingreso");
            $table->string("precio_compra");
            $table->string("precio_venta");
            $table->unsignedBigInteger("categorias_id");
            $table->foreign("categorias_id")->references("id")->on("categorias");
            $table->unsignedBigInteger("sedes_id");
            $table->foreign("sedes_id")->references("id")->on("sedes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
