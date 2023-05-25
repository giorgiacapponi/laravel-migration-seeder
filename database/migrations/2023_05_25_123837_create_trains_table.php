<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->date('scheduled');
            $table->string('company',50);
            $table->string('departure_station',50);
            $table->string('arrival_station',50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code',15);
            $table->tinyInteger('number_car')->unsigned()->nullable();
            $table->boolean('delay')->default(false);
            $table->boolean('deleted')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
