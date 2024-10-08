<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sensor_data', function (Blueprint $table) {
            $table->id();
            $table->float('temperature'); // Field for temperature data
            $table->float('humidity');    // Field for humidity data
            $table->float('light_intensity'); // Field for light intensity data
            $table->timestamps();         // Created at and updated at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensor_data'); // Drop the sensor_data table if it exists
    }
};
