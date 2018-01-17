<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('developer_experiences', function (Blueprint $table) {
             $table->string('duration');
             $table->dropColumn(['starting_year','ending_year']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('developer_experiences', function (Blueprint $table) {
             $table->dropColumn('duration');
             $table->integer('starting_year');
             $table->integer('ending_year');
        });
    }
}
