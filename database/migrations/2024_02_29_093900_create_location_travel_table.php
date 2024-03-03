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
        Schema::create('location_travel', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('price');
            $table->unsignedBigInteger('car_type_id');
            $table->unsignedBigInteger('pickup_location_id');
            $table->unsignedBigInteger('drop_off_location_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('car_type_id')->on('car_types')->references('id')->cascadeOnDelete();
            $table->foreign('pickup_location_id')->on('locations')->references('id')->cascadeOnDelete();
            $table->foreign('drop_off_location_id')->on('locations')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_travel');
    }
};
