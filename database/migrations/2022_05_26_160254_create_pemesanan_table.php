<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('pelanggan_id')->constrained('detail_pelanggan');
            $table->string('nama_order')->constrained('detail_pelanggan');
            $table->date('tanggal');
            $table->string('nama_produk')->constrained('jenis_produks');
            $table->foreignId('produk_id')->constrained('jenis_produks');
            $table->integer('jumlah');
            $table->string('harga');
            $table->string('total_harga');
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
        Schema::dropIfExists('pemesanan');
    }
}
