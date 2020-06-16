<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('score_start');
            $table->increments('score_end');
            $table->increments('off_darsad')->default('0');;
            $table->increments('off_price')->default('0');;
            $table->increments('status')->default('1');;
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
        Schema::dropIfExists('order_scores');
    }
}
