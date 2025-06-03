<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktersTable extends Migration
{
    public function up()
    {
       Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('spesialis')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->text('alamat')->nullable();
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('dokters');
    }
}

