<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['economy', 'business', 'executive']);
            $table->integer('capacity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
