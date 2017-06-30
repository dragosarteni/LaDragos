<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            // Schema declaration
            // Constraints declaration
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::drop('categories');
    }
}