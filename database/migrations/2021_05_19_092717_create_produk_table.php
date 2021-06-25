<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->text('nama_produk');
            $table->string('nama_travel');
            $table->text('deskripsi');
            $table->text('itenerary');
            $table->text('fasilitas');
            $table->text('notes');
            $table->double('harga');
            $table->string('type');
            $table->string('gbr1');
            $table->string('gbr2')->nullable();
            $table->string('gbr3')->nullable();
            $table->string('gbr4')->nullable();
            $table->string('gbr5')->nullable();
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
        Schema::dropIfExists('produk');
    }
}