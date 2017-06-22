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
            $table->string('nif')->unique();
            $table->string('name');
            $table->string('surname');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->integer('zipCode');
            $table->integer('phoneNumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('type');;
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
