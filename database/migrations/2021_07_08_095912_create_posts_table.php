<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('role'); //owner agent  builder
            $table->integer('type');  //property details sale rent pg
            $table->integer('cat');   //property type
            $table->string('city');
            $table->string('state');
            $table->string('locality');
            $table->integer('bedrooms');
            $table->integer('balcony');
            $table->integer('floor');
            $table->string('furnished');
            $table->integer('bathrooms');
            $table->integer('meetroom');
            $table->integer('noSeat');
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
        Schema::dropIfExists('posts');
    }
}
