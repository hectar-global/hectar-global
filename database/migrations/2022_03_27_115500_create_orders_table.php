<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('variant', 255);
            $table->string('type', 255);
            $table->string('country', 255);
            $table->string('port', 255);
            $table->string('quality', 255);
            $table->string('packaging', 255);
            $table->string('loadability', 255);
            $table->string('quantity', 255);
            $table->string('price', 255);
            $table->enum('status', ['1', '0'])->default('1');
            $table->integer('product_id')->unsigned();
            $table->index('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned();
            $table->index('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
