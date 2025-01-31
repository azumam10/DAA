<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('train_id')->constrained()->onDelete('cascade');
            $table->foreignId('departure_station_id')->constrained('stations');
            $table->foreignId('arrival_station_id')->constrained('stations');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->decimal('price', 10, 2);
            $table->integer('available_seats');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
