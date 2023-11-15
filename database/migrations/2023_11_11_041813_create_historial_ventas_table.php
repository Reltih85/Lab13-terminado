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
        Schema::create('historial_ventas', function (Blueprint $table) {
            $table->id();
            $table->decimal("monto",8,2);
            $table->integer("cantidad");
            $table->unsignedBigInteger("productos_id");
            $table->foreign("productos_id")->references("id")->on("productos");
            $table->unsignedBigInteger("encargados_id");
            $table->foreign("encargados_id")->references("id")->on("encargados");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_ventas');
    }
};
