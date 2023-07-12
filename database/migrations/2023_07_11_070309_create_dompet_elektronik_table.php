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
        Schema::create('dompet_elektronik', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembayaran');
            $table->unsignedBigInteger('id_metode');
            $table->string('nama_metode');
            $table->string('no_referensi', 25); // Tambahkan atribut no_referensi dengan batasan 25 karakter
            $table->string('kode_transaksi', 15);
            $table->timestamps();

            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');
            $table->foreign('id_metode')->references('id')->on('metode_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dompet_elektronik');
    }
};
