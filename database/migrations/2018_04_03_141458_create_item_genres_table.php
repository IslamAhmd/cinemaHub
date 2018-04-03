<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_genres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table_name');
            $table->integer('genre_id')->unsigned();
            $table->integer('item_id');
            $table->timestamps();

            $table->foreign('genre_id')
                ->references('id')->on('genres')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_genres');
    }
}
