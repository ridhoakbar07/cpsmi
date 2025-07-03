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
        Schema::create('trust_devices', function (Blueprint $table) {
            $table->id();

            $table->string('device_name');
            $table->string('device_signature')->index(); // Unique hash per device
            $table->timestamp('expires_at');

            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->index(['user_id', 'device_signature']);
            $table->index(['user_id', 'device_signature', 'expires_at']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trust_devices');
    }
};
