<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaskMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_members', function (Blueprint $table) {
            $table->string('member_id')->primary();
            $table->string('task_key')->nullable()->references('task_key')->on('tasks');
            $table->integer('user_id');
            $table->integer('permission');
            $table->float('point');
            $table->integer('assign_by');
            $table->integer('assign_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_members');
    }
}