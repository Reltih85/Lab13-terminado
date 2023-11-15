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
        Schema::create('listas_boletas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("listas_id");
            $table->foreign("listas_id")->references("id")->on("listas_escolares");
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
        Schema::dropIfExists('listas_boletas');
    }
};
