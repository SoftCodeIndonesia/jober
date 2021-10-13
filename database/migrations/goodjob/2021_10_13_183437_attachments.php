<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attachments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->string('attachment_id')->primary();
            $table->string('reference_name');
            $table->string('reference_id');
            $table->string('file_name');
            $table->string('file_extension');
            $table->string('file_path');
            $table->string('file_size');
            $table->string('file_type');
            $table->text('file_description');
            $table->integer('created_at');
            $table->integer('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
}