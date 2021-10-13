<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user-data', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('phone_number');
            $table->string('password');
            $table->string('language_code');
            $table->enum('phone_verified',['0', '1']);
            $table->enum('email_verified',['0', '1']);
            $table->string('verify_code');
            $table->integer('verify_submit');
            $table->string('country_id');
            $table->string('user_photo');
            $table->string('reg_platform');
            $table->enum('gender',['0', '1']);
            $table->integer('birth_date');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user-data');
    }
}