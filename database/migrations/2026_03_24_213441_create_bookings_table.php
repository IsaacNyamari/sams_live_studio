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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // User relationship (if authenticated user)
            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null');

            // Client information
            $table->string('name');
            $table->string('email');
            $table->string('phone');

            // Booking details
            $table->string('service_type');
            $table->dateTime('session_start');
            $table->dateTime('session_end');
            $table->integer('duration');
            $table->integer('participants')->default(1);
            $table->text('project_details')->nullable();

            // Status and payment
            $table->string('status')->default('pending');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('deposit_paid', 10, 2)->default(0);

            // Timestamps
            $table->timestamps();

            // Indexes for faster queries
            $table->index('session_start');
            $table->index('status');
            $table->index('email');
            $table->index('user_id');

            // Composite index for availability checking
            $table->index(['session_start', 'session_end', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
