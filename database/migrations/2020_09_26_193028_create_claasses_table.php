<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claasses', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->string('tname');
            $table->string('tid');
            $table->string('class');
            $table->string('subject');
            $table->string('section');
            $table->string('stime');
            $table->string('ftime');
            $table->string('day');
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
        Schema::dropIfExists('claasses');
    }
}