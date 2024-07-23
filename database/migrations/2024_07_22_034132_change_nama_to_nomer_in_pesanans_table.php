<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNamaToNomerInPesanansTable extends Migration
{
    public function up()
    {
        Schema::table('pesanans', function (Blueprint $table) {
            $table->dropColumn('nama'); // Menghapus kolom nama
            $table->integer('nomer')->nullable(); // Menambah kolom nomer dengan tipe integer
            $table->date('tanggal_pesanan')->nullable()->change();
            $table->date('deadline_pesanan')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('pesanans', function (Blueprint $table) {
            $table->dropColumn('nomer'); // Menghapus kolom nomer saat rollback
            $table->string('nama')->nullable(); // Menambah kembali kolom nama saat rollback
            $table->date('tanggal_pesanan')->nullable(false)->change();
            $table->date('deadline_pesanan')->nullable(false)->change();
        });
    }
}

