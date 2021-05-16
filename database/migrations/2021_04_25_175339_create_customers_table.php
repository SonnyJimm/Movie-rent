<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("user_name")->unique();
            $table->string("password");
            $table->string("api_token",60)->nullable();
            $table->boolean("verified")->defualt("false");
            $table->string("first_name");
            $table->string("last_name");
            $table->string("gender");
            $table->date("birth_date");
            $table->text("address");
            $table->string("email")->unique();
            $table->integer("phone_number");
            $table->string("register");
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
        Schema::dropIfExists('customers');
    }
}
