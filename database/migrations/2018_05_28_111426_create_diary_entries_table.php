<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaryEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_entries', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id')->unsigned();
          $table->double('bodytemp',3,1)->nullable();
          $table->string('mood')->nullable();
          $table->string('energy')->nullable();
          $table->boolean('cut')->nullable();
          $table->boolean('tickbite')->nullable();
          $table->boolean('skinrash')->nullable();
          $table->boolean('headache')->nullable();
          $table->boolean('shoulderpain')->nullable();
          $table->boolean('elbowpain')->nullable();
          $table->boolean('hippain')->nullable();
          $table->boolean('thighpain')->nullable();
          $table->boolean('kneepain')->nullable();
          $table->boolean('shinpain')->nullable();
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
        Schema::dropIfExists('diary_entries');
    }
}
