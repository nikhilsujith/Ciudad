<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('eName')->unique();
            $table->string('eRegUser')->nullable();
//            $table->foreign('eRegEmail')->references('uEmail')->on('users');
            $table->string('eOrganizer');
            $table->string('eLocation');
            $table->date('eDate');
            $table->integer('eSpots');
            $table->integer('eSpotsRem')->default('000');
            $table->text('eDesc');
            $table->rememberToken(); //laravel default stuff
            $table->timestamps(); //laravel default stuff
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
