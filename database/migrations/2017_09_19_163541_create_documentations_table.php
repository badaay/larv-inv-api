<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('documentations');
        Schema::create('documentations', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title');
            $table->string('description');
            $table->string('url');
            $table->string('method', 6);
            $table->text('url_param');
            $table->text('data_param');
            $table->text('sample_call');
            
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
        Schema::dropIfExists('documentations');
    }
}
