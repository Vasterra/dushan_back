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
		Schema::create('orders', function (Blueprint $table) {
			$table->id();
			$table->uuid();
			$table->date('departure_date');
			$table->time('departure_time');
			$table->boolean('is_pm');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('phone');
			$table->string('email');
			$table->text('custom_notes')->nullable();
			$table->integer('adults')->default(0);
			$table->integer('children')->default(0);
			$table->integer('cost');
			$table->unsignedBigInteger('location_travel_id');
			$table->unsignedBigInteger('car_type_id');
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
		Schema::dropIfExists('orders');
	}
};
