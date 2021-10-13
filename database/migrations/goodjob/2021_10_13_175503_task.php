<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->string('task_key')->primary();
            $table->string('base_key')->nullable()->references('base_key')->on('bases');
            $table->string('task_name');
            $table->text('task_description');
            $table->integer('task_start_date');
            $table->integer('task_start_finish');
            $table->integer('reminder_time');
            $table->integer('status_id');
            $table->float('point');
            $table->integer('created_at');
            $table->integer('created_by');
            $table->integer('completed_at');
            $table->integer('is_deleted');
            $table->integer('deleted_at');
            
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