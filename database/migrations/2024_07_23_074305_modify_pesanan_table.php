<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pesanans', function (Blueprint $table) {
            // Tambahkan nullable() pada kolom 'deadline_pesanan'
            $table->date('tanggal_pesanan')->nullable()->change();
            $table->date('deadline_pesanan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pesanans', function (Blueprint $table) {
            // Jika perlu, Anda dapat mengembalikan perubahan di sini
            // Misalnya, jika Anda menambahkan kolom baru, Anda dapat menghapusnya di sini
            $table->date('tanggal_pesanan')->nullable(false)->change();
            $table->date('deadline_pesanan')->nullable(false)->change();
        });
    }
};
