<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedToyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breed_toy', function (Blueprint $table) {
            $table->integer('breed_id')
                ->unsigned();

            $table->integer('toy_id')
                ->unsigned();

            $table->foreign('breed_id')
                ->references('id')
                ->on('breeds')
                ->onDelete('cascade');

            $table->foreign('toy_id')
                ->references('id')
                ->on('toys')
                ->onDelete('cascade');

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
        Schema::dropIfExists('breed_toy');
    }
}
