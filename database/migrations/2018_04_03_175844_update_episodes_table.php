<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('episodes', function (Blueprint $table) {
            $table->integer('seasons_id')->unsigned()->after('id');
            $table->integer('tv_shows_id')->unsigned()->after('id');
            $table->foreign('tv_shows_id')
                ->references('id')->on('tv_shows')
                ->onDelete('cascade');
            $table->foreign('seasons_id')
                ->references('id')->on('seasons')
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
        Schema::table('episodes', function (Blueprint $table) {
            $table->dropForeign('episodes_tv_shows_id_foreign');
            $table->dropForeign('episodes_seasons_id_foreign');
            $table->dropColumn('tv_shows_id');
            $table->dropColumn('seasons_id');

        });
    }
}
