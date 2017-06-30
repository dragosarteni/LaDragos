<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{

    public function up()
    {
        Schema::create('advertisements', function(Blueprint $table) {
            $table->increments('id');
            $table->string("title", 255);
            $table->integer("user_id")->unsigned();;
            $table->foreign("user_id")->references('id')->on('users');
            $table->longText("description");
            $table->string("location", 50);
            $table->string("phone", 11);


            $table->integer("category_id")->unsigned();
            $table->foreign("category_id")->references("id")->on("categories");
            $table->integer("price")->unsigned();

            $table->timestamps();
            // Schema declaration
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('advertisements');
    }
}
