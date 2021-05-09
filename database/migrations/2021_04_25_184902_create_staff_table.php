<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string("user_name")->unique();
            $table->string("password");
            $table->string("api_token",60)->nullable();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("gender");
            $table->date("birth_day");
            $table->string("email")->unique();
            $table->integer("phone_number");
            $table->integer("branch_id");
            $table->foreign("branch_id")->references('id')->on('branch')
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
        Schema::dropIfExists('staff');
    }
}
