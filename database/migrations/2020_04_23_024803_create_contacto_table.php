<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto', function (Blueprint $table) {
            $table->id();
            $table->string('cPhone')->default('FROM FOOTER SUBMISSION');
            $table->string('cName')->default('FROM FOOTER SUBMISSION');
            $table->string('cTitle')->default('FROM FOOTER SUBMISSION');
            $table->string('cDesc')->default('FROM FOOTER SUBMISSION');
            $table->string('cEmail')->nullable();
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
        Schema::dropIfExists('contacto');
    }
}
