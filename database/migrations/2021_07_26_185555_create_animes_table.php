<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',50);
            $table->date('date');
            $table->integer('evaluation')->nullable();
            $table->text('feeling');
            $table->boolean('watched')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')
                  ->references('id')->on('categories')
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
        Schema::dropIfExists('animes');
    }
}
