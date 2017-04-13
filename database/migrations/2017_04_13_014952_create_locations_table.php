<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name')->unsigned();
            $table->string('abbreviation', 2);
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('number', 8);
            $table->string('street', 100);
            $table->string('city', 100);
            $table->integer('state_id')->unsigned();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->decimal('mostexpensive', 5, 2)->nullable();
            $table->decimal('leastexpensive', 5, 2)->nullable();
            $table->boolean('rainorshine')->default(0);
            $table->date('begins');
            $table->date('ends');
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
        Schema::dropIfExists('states');
        Schema::dropIfExists('locations');
    }
}
