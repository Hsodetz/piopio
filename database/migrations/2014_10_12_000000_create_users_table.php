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

            $table->string('name');
            $table->string('last_name');
            $table->integer('age')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('identification_document');
            $table->string('province');
            $table->string('city');
            $table->text('address');
            $table->string('phone_movil');
            $table->string('phone_house');
            $table->enum('sexo', ['male', 'female']);
            $table->string('nationality');
            $table->string('occupation');
            $table->enum('civil_status', ['single', 'married', 'divorced']);

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
