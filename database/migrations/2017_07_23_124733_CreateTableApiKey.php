<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApiKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::drop('invento_apikey');
        Schema::create('invento_apikey', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('secretkey')->nullable();
            $table->integer('hit')->nullable();
            $table->string('status',25)->default('active');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('invento_apikey');

    }
}
