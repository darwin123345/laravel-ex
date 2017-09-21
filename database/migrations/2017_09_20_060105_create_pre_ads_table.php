<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreAdsTable extends Migration
{

    /**
        * Run the migrations.
        *
        * @return void
        */
    public function up()
    {
        Schema::create('pre_ads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('birthday');
            $table->string('birth');
            $table->string('email');
            $table->string('mobile');
            $table->string('gender');
            $table->string('barangay');
            $table->string('street');
            $table->string('city');
            $table->string('citizenship');
            $table->timestamps();
        });
    }

    /**
        * Reverse the migrations.
        *
        * @return void
        */
    public function down()
    {
        Schema::dropIfExists('pre_ads');
    }
}
    