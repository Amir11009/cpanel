<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('group_main_id')->default('0');
            $table->integer('group_sub1_id')->default('0');
            $table->integer('group_sub2_id')->default('0');
            $table->string('name');
            $table->text('description');
            $table->integer('price')->default('0');
            $table->integer('off')->default('0');
            $table->integer('rate')->default('0');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->integer('mojood')->default('1');
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('products');
    }
}
