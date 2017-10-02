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
         Schema::dropIfExists('invento_products');
        
         Schema::create('invento_products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->integer('invento_categories_id')->nullable();
            $table->string('apps_name');
            $table->foreign('apps_name')->references('name')->on('invento_user_apps')->onDelete('cascade');
            $table->integer('invento_suppliers_id')->nullable();
            $table->string('name')->nullable();
            $table->string('sku')->nullable();
            $table->text('description')->nullable();
            $table->double('weight')->default(0);
            $table->double('buy_price')->default(0);
            $table->double('sell_price')->default(0);
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
