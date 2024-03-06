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
		Schema::create('location_added_stops', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->unsignedInteger('price');
			$table->unsignedInteger('price_for_8_pax');
			$table->unsignedBigInteger('location_travel_id');
			$table->uuid();
			$table->string('photo')->nullable();
			$table->float('lat', 10, 8)->nullable();
			$table->float('lng', 10, 8)->nullable();
			$table->timestamps();
			$table->softDeletes();

			$table->foreign('location_travel_id')->on('location_travel')->references('id')->cascadeOnDelete();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('location_added_stops');
	}
};
