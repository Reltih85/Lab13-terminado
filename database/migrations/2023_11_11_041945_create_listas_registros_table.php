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
        Schema::create('listas_registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("listas_id");
            $table->foreign("listas_id")->references("id")->on("listas_escolares");
            $table->unsignedBigInteger("registros_id");
            $table->foreign("registros_id")->references("id")->on("registros");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listas_registros');
    }
};
