<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
    - kode_barang
    - nama_penerima
    - id_penerima
    - jumlah_keluar
    - tanggal_keluar
    - author
     */
    public function up(): void
    {
        Schema::create('keluar_barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->integer('jumlah_keluar');
            $table->date('tanggal_keluar');
            $table->foreignId('id_penerima');
            $table->foreignId('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluar_barangs');
    }
};
