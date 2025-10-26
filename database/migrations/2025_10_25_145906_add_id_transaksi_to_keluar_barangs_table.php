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
        Schema::table('keluar_barangs', function (Blueprint $table) {
            $table->foreignId('id_transaksi')->after('id')->constrained('transaksi_keluars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('keluar_barangs', function (Blueprint $table) {
            //
        });
    }
};
