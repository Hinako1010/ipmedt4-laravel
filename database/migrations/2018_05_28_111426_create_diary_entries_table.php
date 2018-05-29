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
          $table->uuid('id')->primary();
          $table->uuid('user_id');
          $table->double('bodytemperature',3,1);
          $table->string('mood');
          $table->string('energy');
          $table->boolean('cut');
          $table->boolean('insectbite');
          $table->boolean('skinrash');
          $table->boolean('headache');
          $table->boolean('shoulderpain');
          $table->boolean('elbowpain');
          $table->boolean('hippain');
          $table->boolean('thighpain');
          $table->boolean('kneepain');
          $table->boolean('shinpain');
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
