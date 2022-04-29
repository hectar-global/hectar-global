<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_status', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->integer('product_id')->unsigned();
            $table->string('message', 255)->nullable();
            $table->integer('order_id')->unsigned();
            $table->index('order_id')->nullable();
            $table->foreign('order_id')->references('id')->on('ordersnew')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('orders_status');
    }
}
