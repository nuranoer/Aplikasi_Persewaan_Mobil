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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mobil');
            $table->integer('id_user');
            $table->string('tujuan');
            $table->string('tgl_sewa');
            $table->string('tgl_kembali');
            $table->string('total_harga');
            $table->string('bukti_pembayaran');
            $table->string('status_pembayaran');
            $table->string('status_sewa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
