<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKonsultasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('komoditas_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('nomor')->unique();
            $table->string('nama');
            $table->text('judul');
            $table->string('slug')->unique();
            $table->longText('deskripsi');
            $table->string('email')->unique()->nullable();
            $table->string('whatsapp')->unique();
            $table->string('foto')->nullable();
            $table->enum('status', ['1', '0'])->default('0');
            $table->enum('disamarkan', ['Y', 'N'])->default('N');
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
        Schema::dropIfExists('konsultasis');
    }
}
