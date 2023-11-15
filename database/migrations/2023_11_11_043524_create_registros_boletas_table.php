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
        Schema::create('registros_boletas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("registros_id");
            $table->foreign("registros_id")->references("id")->on("registros");
            $table->unsignedBigInteger("boletas_id");
            $table->foreign("boletas_id")->references("id")->on("boletas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros_boletas');
    }
};
