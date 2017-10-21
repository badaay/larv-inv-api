<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserApps extends Migration
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

        Schema::create('invento_user_apps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('invento_user_vendor')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->unique();
            $table->string('description');
            $table->string('tipe'); //mobile//desktop//web
            $table->string('app_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('invento_user_apps', function (Blueprint $table) {
        //     $table->dropForeign('invento_user_app_user_id_foreign');
        // });
        Schema::dropIfExists('invento_user_apps');

        //
    }
}
