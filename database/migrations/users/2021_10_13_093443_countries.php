<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Countries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('capital');
            $table->string('iso1366_a2');
            $table->string('iso3166_a3');
            $table->integer('iso3166_num');
            $table->string('fip');
            $table->string('continent');
            $table->string('currency_code');
            $table->string('lang');
            $table->integer('area_code');
            $table->string('postal_format');
            $table->string('flag');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}