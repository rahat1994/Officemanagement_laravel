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

        $insertcode = 'INSERT INTO `tasks` (`id`, `task_title`, `task_category`, `task_priority`, `task_description`, `task_executioner`, `deadline`, `created_at`, `updated_at`) VALUES (NULL, 'task', 'high', 'high', 'This is  a description', '2', '2018-08-15 12:50:50', NULL, NULL);';
    }
}
