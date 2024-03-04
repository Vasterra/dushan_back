<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('location_travel_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_type_id');
            $table->unsignedBigInteger('location_travel_id');
            $table->unsignedInteger('price');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('car_type_id')->on('car_types')->references('id')->cascadeOnDelete();
            $table->foreign('location_travel_id')->on('location_travel')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_travel_prices');
    }
};
