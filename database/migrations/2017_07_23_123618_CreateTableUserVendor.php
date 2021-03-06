<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('invento_products');
        Schema::dropIfExists('invento_user_apps');
        Schema::dropIfExists('invento_user_vendor');
         Schema::create('invento_user_vendor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('verification_code')->nullable();
            $table->string('verification_status')->default(0);
            $table->rememberToken();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_other')->nullable();
            $table->string('name');
            $table->string('server_key');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invento_user_vendor');

        //
    }
}
