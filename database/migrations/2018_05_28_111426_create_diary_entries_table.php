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
          $table->double('bodytemp',3,1)->default(37.0)->nullable();
          $table->string('mood')->default(0)->nullable();
          $table->string('energy')->default(0)->nullable();
          $table->boolean('cut')->default(0)->nullable();
          $table->boolean('tickbite')->default(0)->nullable();
          $table->boolean('skinrash')->default(0)->nullable();
          $table->boolean('headache')->default(0)->nullable();
          $table->boolean('shoulderpain')->default(0)->nullable();
          $table->boolean('elbowpain')->default(0)->nullable();
          $table->boolean('hippain')->default(0)->nullable();
          $table->boolean('thighpain')->default(0)->nullable();
          $table->boolean('kneepain')->default(0)->nullable();
          $table->boolean('shinpain')->default(0)->nullable();
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
