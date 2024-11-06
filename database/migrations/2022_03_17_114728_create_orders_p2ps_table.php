<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersP2psTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_p2ps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('sender')->nullable();
            $table->foreignId('receiver')->nullable();
            $table->string('order')->nullable();
            $table->string('order_id')->nullable();
            $table->string('status')->nullable();
            $table->string('send')->nullable();
            $table->string('receive')->nullable();
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
        Schema::dropIfExists('orders_p2ps');
    }
}
