<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('invento_products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('invento_categories_id')->nullable();
            $table->integer('invento_vendor_id')->nullable();
            $table->integer('invento_suppliers_id')->nullable();
            $table->string('name')->nullable();
            $table->string('sku')->nullable();
            $table->text('description')->nullable();
            $table->double('weight')->default(0);
            $table->double('buy_price');
            $table->double('sell_price');
            $table->integer('stock')->default(0);

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
        Schema::dropIfExists('invento_products');

    }
}
