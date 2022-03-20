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
            $table->id()->autoIncrement();
            $table->bigInteger('table_id')->unsigned();
            $table->date('order_date');
            $table->integer('total_price');
            $table->integer('payment_state');
            $table->string('payment_method');
            $table->bigInteger('client_id');
            $table->string('status');
            $table->integer('print_count');
            $table->integer('customer');
            $table->bigInteger('user_id')->unsigned();
            $table->double('total_cost');
            $table->double('total_after_taxes');
            $table->double('discount_amount');
            $table->double('taxes');
            $table->double('consumption_taxs');
            $table->double('local_adminstration');
            $table->double('rebuild_tax');
            $table->string('notes');
            $table->string('client_name');
            $table->foreign('table_id')->references('id')->on('tables');

            $table->foreign('user_id')->references('id')->on('users');


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
