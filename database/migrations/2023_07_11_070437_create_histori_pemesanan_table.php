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
        Schema::create('histori_pemesanan', function (Blueprint $table) {
            $table->id('id_histori_pemesanan');
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_barang');
            $table->integer('jumlah_barang');
            $table->integer('total_barang');
            $table->timestamps();

            $table->foreign('id_pemesanan')->references('id')->on('pemesanan');
            $table->foreign('id_barang')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histori_pemesanan');
    }
};

?>
