<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->integer('total_price');
            $table->integer('count');
            $table->boolean('is_fired');
            $table->string('status');
            $table->string('notes');
            $table->double('note_price');
            $table->time('delay');
            $table->double('cost');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('item_id')->references('id')->on('items');
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
        Schema::dropIfExists('order_details');
    }
}
