<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailNporitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_noprits', function (Blueprint $table) {
            $table->id();
            $table->integer('noprit_id');
            $table->string('jenis');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('sisi');
            $table->integer('jumlah');
            $table->integer('tarif_pajak');
            $table->integer('tarif_jam');
            $table->integer('listrik');
            $table->integer('subtot_pajak');
            $table->integer('subtot_jam1');
            $table->integer('subtot_jam2');
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
        Schema::dropIfExists('detail_nporits');
    }
}
