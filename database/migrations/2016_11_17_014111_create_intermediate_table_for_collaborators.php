<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntermediateTableForCollaborators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_user', function (Blueprint $table) {
            $table->integer('todo_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->dateTime('assigned_at');
            $table->integer('allow');

            $table->foreign('todo_id')->references('id')->on('todos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todo_user');
    }
}
