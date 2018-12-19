<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('no_surat');
            $table->string('asal_surat');
            $table->string('tujuan_surat');
            $table->string('perihal');
            $table->string('jenis_surat');
            $table->string('tanggal_masuk');
            $table->string('tanggal_dibuat');
            $table->string('deskripsi');
            $table->string('nama_penerima');
            $table->string('telfon_penerima');
            $table->string('email_penerima');
            $table->unsignedTinyInteger('status');
            $table->timestamps();
            $table->unsignedInteger('idpenerima')->nullable();
            $table->foreign('idpenerima')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
}
