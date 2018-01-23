<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('invento_products_stock');
        Schema::create('invento_products_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('invento_products_id')->unsigned();
            $table->string('apps_name');
            $table->foreign('apps_name')->references('name')->on('invento_user_apps')->onDelete('cascade');
            $table->integer('stock_in')->default(0);
            $table->integer('stock_out')->default(0);
            $table->string('description')->nullable();
            $table->string('sku')->nullable();
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
        Schema::dropIfExists('invento_products_stock');

    }
}
