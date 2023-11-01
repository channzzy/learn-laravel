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
        Schema::create('detail_retur', function (Blueprint $table) {
            $table->string('nomor_retur',14);
            $table->string('kode_brg',5);
            $table->integer('qty_retur');
            $table->integer('sub_retur');
            $table->foreign('kode_brg')->references('kode_brg')->on('brg');
            $table->foreign('nomor_retur')->references('nomor_retur')->on('retur_beli');
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
        Schema::dropIfExists('d_returs');
    }
};
