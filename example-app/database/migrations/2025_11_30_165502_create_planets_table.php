<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('size_in_km'); // diameter in kilometers
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('planets');
    }
};