<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->bigInteger('category_id')->unsigned();
            $table->boolean('is_available');
            $table->boolean('in_orderes');
            $table->integer('order');
            $table->integer('menu_order');
            $table->bigInteger('menu_cat_id');
            $table->float('monthly_avg');
            $table->integer('rate_star');
            $table->integer('sell_price');
            $table->integer('parent_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('items');
    }
}
