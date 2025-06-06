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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->integer("kode")->unique();
            $table->string("nama");
            $table->double("harga");
            $table->integer("qty");
            $table->string("foto");
            $table->unsignedBigInteger("kategori_id");
            $table->foreign("kategori_id")->references("id")->on("kategoris");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
