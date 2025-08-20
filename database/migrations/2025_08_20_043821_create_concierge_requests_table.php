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
    Schema::create('concierge_requests', function (Blueprint $table) {
        $table->id();
        $table->foreignId('guest_id')->constrained('guests')->cascadeOnDelete();
        $table->foreignId('booking_id')->nullable()->constrained('bookings')->nullOnDelete();
        $table->string('subject');
        $table->text('description')->nullable();
        $table->enum('status', ['open','in_progress','closed'])->default('open');
        $table->enum('priority', ['low','medium','high'])->default('medium');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concierge_requests');
    }
};
