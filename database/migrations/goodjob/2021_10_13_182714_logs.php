<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Logs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->string('log_id')->primary();
            $table->string('log_code')->references('log_code')->on('log_codes');
            $table->string('reference_name');
            $table->string('reference_id');
            $table->string('old_data');
            $table->string('new_data');
            $table->integer('created_by');
            $table->integer('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}