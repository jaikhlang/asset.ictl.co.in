<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_id')->nullable()->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('category')->nullable();
            $table->string('designation')->nullable();
            $table->string('organisation')->nullable();
            $table->string('address')->nullable();
            $table->string('pin')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('paper_title')->nullable();
            $table->integer('accomodation_id')->unsigned()->nullable();
            $table->integer('paper_id')->unsigned()->nullable();
            $table->string('payment')->default('unpaid');
            $table->string('payment_request_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
