<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProdusen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produsen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produsen', 50);
            $table->string('keterangan', 100);
            $table->timestamps();
        });

        //Set fk di kolom id_macam di tabel mobil
        Schema::table('mobil', function (Blueprint $table) {
            $table->foreign('id_produsen')
            ->references('id')
            ->on('produsen')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop fk di kolom id_produsen
        Schema::table('mobil', function (Blueprint $table) {
            $table->dropForeign('mobil_id_produsen_foreign');
        });

        Schema::dropIfExists('produsen');
    }
}
