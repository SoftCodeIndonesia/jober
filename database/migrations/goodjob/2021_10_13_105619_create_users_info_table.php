<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->id('user_id');
            $table->enum('is_active', ['0', '1']);
            $table->integer('last_active');
            $table->enum('subscribe_mail',['0', '1']);
            $table->float('achivement_point', 2, 1);
            $table->integer('last_updated');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_info', function (Blueprint $table) {
            //
        });
    }
}