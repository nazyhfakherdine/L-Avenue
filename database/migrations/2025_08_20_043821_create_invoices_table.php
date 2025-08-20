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
    Schema::create('invoices', function (Blueprint $table) {
        $table->id();
        $table->foreignId('booking_id')->constrained('bookings')->cascadeOnDelete();
        $table->foreignId('guest_id')->constrained('guests')->cascadeOnDelete();
        $table->decimal('amount', 10, 2);
        $table->string('currency', 3)->default('USD');
        $table->timestamp('paid_at')->nullable();
        $table->string('payment_method')->nullable();
        $table->enum('status', ['unpaid','paid','refunded'])->default('unpaid');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
