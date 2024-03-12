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
		Schema::create('transactions', function (Blueprint $table) {
			$table->id();
			$table->uuid()->index();
			$table->unsignedBigInteger('order_id');
			$table->string('status');
			$table->integer('quantity')->nullable();
			$table->integer('expected_amount')->nullable();
			$table->integer('actual_amount')->nullable();
			$table->string('currency');
			$table->timestamps();

			$table->foreign('order_id')->on('orders')->references('id')->cascadeOnDelete();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('transactions');
	}
};
