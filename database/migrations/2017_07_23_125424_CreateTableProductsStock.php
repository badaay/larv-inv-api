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
        Schema::create('invento_products_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->integer('invento_products_id')->unsigned();

            $table->integer('invento_user_vendor')->nullable();
            $table->integer('stock_in')->default(0);
            $table->integer('stock_out')->default(0);
            $table->string('description')->nullable();
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
