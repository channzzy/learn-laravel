<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembelian', function (Blueprint $table) {
            $table->string('nomor_beli',14);
            $table->string('kode_brg',5);
            $table->integer('qty_beli');
            $table->integer('sub_beli');
            $table->foreign('kode_brg')->references('kode_brg')->on('brg');
            $table->foreign('nomor_beli')->references('nomor_beli')->on('pembelian');
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
        Schema::dropIfExists('d_pembelians');
    }
};
