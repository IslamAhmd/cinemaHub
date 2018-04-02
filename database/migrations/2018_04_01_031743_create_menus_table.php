<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('title');
            $table->string('icon')->nullable();
            $table->string('route_name');
            $table->string('target')->default('_self');
            $table->integer('order')->default(0);
            $table->integer('parent_id')->default(0)->unsigned();
            $table->integer('data_type_id')->unsigned();
            $table->timestamps();

//            $table->foreign('parent_id')
//                ->references('id')->on('menus')
//                ->onDelete('cascade');
            $table->foreign('data_type_id')
                ->references('id')->on('data_types')
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
        Schema::dropIfExists('menus');
    }
}
