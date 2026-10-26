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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('booking_code')->unique();
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('room_id')->constrained('rooms');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('guests');
            $table->integer('nights');
            $table->unsignedInteger('prince_per_night');
            $table->unsignedInteger('total_prince');
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'expired'])->default('pending');
            $table->dateTime('expires_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
