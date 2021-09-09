<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNopritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noprits', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            $table->string('jenis');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('sisi');
            $table->integer('jumlah');
            $table->string('kelas_jalan');
            $table->integer('tarif_pajak');
            $table->integer('tarif_jam');
            $table->integer('listrik');
            $table->integer('subtot_pajak');
            $table->integer('subtot_jam1');
            $table->integer('subtot_jam2');
            $table->string('filename');
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
        Schema::dropIfExists('noprits');
    }
}
