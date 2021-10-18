<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLatbiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latbiodata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('bornDate');
            $table->string('gender');
            $table->text('address');
            $table->text('religion');
            $table->integer('age');
            $table->string('hobby');
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
        Schema::dropIfExists('latbiodata');
    }
}
