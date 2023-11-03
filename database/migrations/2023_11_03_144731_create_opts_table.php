<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('komoditas_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('nama_ilmiah')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->longText('gejala')->nullable();
            $table->longText('pengendalian')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opts');
    }
}
