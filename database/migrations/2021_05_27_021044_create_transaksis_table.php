<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('hp');
            $table->string('kode_transaksi');
            $table->date('tanggal');
            $table->foreignId('hewan_qurban_id');
            $table->Integer('jumlah_hewan')->default(1);
            $table->bigInteger('donasi')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('transaksis');
    }
}
