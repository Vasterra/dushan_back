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
        Schema::create('order_location_stops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('location_stop_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('order_id')->on('orders')->references('id')->cascadeOnDelete();
            $table->foreign('location_stop_id')->on('location_added_stops')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_location_stops');
    }
};
