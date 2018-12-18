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
            $table->string('subjek');
            $table->string('asalsurat');
            $table->string('tujuansurat');
            $table->string('jenissurat');
            $table->string('deskripsi');
            $table->string('namapenerima');
            $table->string('emailpenerima');
            $table->integer('telfonpenerima');
            $table->unsignedTinyInteger('Status');
            $table->timestamps();
            $table->unsignedInteger('idpenerima');
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
