<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSeasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seasons', function (Blueprint $table) {
            $table->integer('tv_shows_id')->unsigned()->after('trailer');
            $table->string('trailer')->nullable()->change();
            $table->foreign('tv_shows_id')
                ->references('id')->on('tv_shows')
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
        Schema::table('seasons', function (Blueprint $table) {
            $table->string('trailer')->change();
            $table->dropForeign('seasons_tv_shows_id_foreign');
            $table->dropColumn('tv_shows_id');
        });
    }
}
