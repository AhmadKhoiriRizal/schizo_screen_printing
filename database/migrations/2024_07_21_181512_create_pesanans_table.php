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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->integer('nomer')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('jenis_sablon')->nullable();
            $table->string('jenis_kain')->nullable();
            $table->string('harga')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->date('tanggal_pesanan');
            $table->date('deadline_pesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
