<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingProrityTodoMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('todos', function (Blueprint $table) {
            // // $table->renameColumn('color','label');
            // $table->string('color')->after('name')->change();
            // $table->enum('priority',['a','b','c']);
            $table->integer('priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            // // $table->renameColumn('color','label');
            // $table->string('color')->after('description')->change();
            $table->dropColumn('priority');
        });
    }
}
