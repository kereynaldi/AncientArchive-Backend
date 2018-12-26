<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            //foreign key
            $table->unsignedInteger('id_user_act')->nullable();
            $table->foreign('id_user_act')->references('id')->on('users');
            $table->unsignedInteger('id_surat_act')->nullable();
            $table->foreign('id_surat_act')->references('id')->on('surats');
            
            //ori
            $table->string('avatar')->nullable();
            $table->string('perihal')->nullable();
            $table->unsignedTinyInteger('status')->nullable();
            $table->unsignedTinyInteger('archive_stat')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
