<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelectcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selectcourses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('usercourse1');
            $table->string('usercourse2');
            $table->string('usercourse3');
            $table->string('usermaster');
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
        Schema::drop('selectcourses');
    }
}
