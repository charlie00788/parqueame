<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('owner_id');
            $table->string('location');
            $table->float('latitude', 9, 6);
            $table->float('longitude', 9, 6);
            $table->boolean('state')->default(true);
            $table->timestamps();

            $table->foreign('owner_id')
                ->references('id')->on('owners')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parkings');
    }
}
