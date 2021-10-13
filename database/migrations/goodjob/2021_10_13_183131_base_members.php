<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaseMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_members', function (Blueprint $table) {
            $table->string('member_id')->primary();
            $table->string('base_key')->nullable()->references('base_key')->on('bases');
            $table->integer('user_id');
            $table->integer('assign_by');
            $table->integer('permission');
            $table->integer('joined_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_members');
    }
}