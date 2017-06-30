<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');

            $table->string("email", 255);
            $table->string("password", 255);

            $table->string("phone", 11);
            $table->integer("county_id")->unsigned();
            $table->foreign("county_id")->references("id")->on("counties");

            $table->integer("city_id")->unsigned();;
            $table->foreign("city_id")->references("id")->on("cities");
            // Schema declaration
            // Constraints declaration
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
