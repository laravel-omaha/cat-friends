<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->integer('age');
            $table->string('image');
            $table->text('bio')
                ->nullable();
            $table->integer('breed_id')
                ->unsigned();

            $table->foreign('breed_id')
                ->references('id')
                ->on('breeds');

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
        Schema::dropIfExists('cats');
    }
}
