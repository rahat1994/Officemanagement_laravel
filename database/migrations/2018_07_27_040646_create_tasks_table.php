<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task_title');
            $table->string('task_category');
            $table->string('task_priority');
            $table->longText('task_description');
            $table->unsignedInteger('task_executioner');
            $table->foreign('task_executioner')->references('id')->on('users');
            $table->dateTime('deadline');;
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
        Schema::dropIfExists('tasks');
    }
}
