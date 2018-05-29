<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToDiaryEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diary_entries', function($table){
          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('mood')->references('intensity')->on('intensity_scale');
          $table->foreign('energy')->references('intensity')->on('intensity_scale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('diary_entries', function($table){
        $table->dropForeign('diary_entries_user_id_foreign');
        $table->dropForeign('diary_entries_mood_foreign');
        $table->dropForeign('diary_entries_energy_foreign');
      });
    }
}
