<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('developer_id')->unsigned();
            $table->foreign('developer_id')->references('id')->on('developers')->onDelete('cascade');
            $table->string('experience');
            $table->integer('starting_year');
            $table->integer('ending_year');
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
        Schema::dropIfExists('developer_experiences');
    }
}
