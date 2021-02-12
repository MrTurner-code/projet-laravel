<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::disableForeignKeyConstraints();
        Schema::create('events', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->dateTime('date')->comment('Date de l\'évènement');
            $table->unsignedInteger('creator_id');
            $table->unsignedInteger('city');
            $table->string('name');
            $table->string('interest');
            $table->text('description');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users');
            $table->foreign('id')->references('id')->on('event_cities');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
