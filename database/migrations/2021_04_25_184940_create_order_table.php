<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->date("starting_date");
            $table->date("expiring_date");
            $table->date("ordering_date");
            $table->date("returning_date");
            $table->string("status");
            $table->boolean("extended")->defualt("false");
            $table->integer("total_price");
            $table->integer("customers_id");
            $table->foreign("customers_id")->references('id')->on('customers')
            ->onDelete('cascade');
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
        Schema::dropIfExists('order');
    }
}
