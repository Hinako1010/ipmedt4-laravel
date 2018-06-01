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
          $table->boolean('cut')->default(0);
          $table->boolean('tickbite')->default(0);
          $table->boolean('skinrash')->default(0);
          $table->boolean('headache')->default(0);
          $table->boolean('shoulderpain')->default(0);
          $table->boolean('elbowpain')->default(0);
          $table->boolean('hippain')->default(0);
          $table->boolean('thighpain')->default(0);
          $table->boolean('kneepain')->default(0);
          $table->boolean('shinpain')->default(0);
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
