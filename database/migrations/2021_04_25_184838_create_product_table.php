<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("author");
            $table->string("producer");
            $table->string("banner_image");
            $table->string("genre");
            $table->string("length");
            $table->integer("rented_time");
            $table->string("trailer");
            $table->integer("branch_id");
            $table->integer("type_id");
            $table->foreign('branch_id')
                  ->references('id')->on('branch')
                  ->onDelete('cascade');
            $table->foreign("type_id")->references('id')->on('type')
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
        Schema::dropIfExists('product');
    }
}
