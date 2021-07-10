<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('animes', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
            ->references('id')->on('animes')
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
        Schema::table('animes', function (Blueprint $table) {
            $table->dropForeign('animes_category_id_foreign');
        });
    }
}
