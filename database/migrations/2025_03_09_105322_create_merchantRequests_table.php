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
        Schema::create('merchantRequests', function (Blueprint $table) {
            $table->id();
            $table->string('storeName')->nullable();
            $table->string('merchantName')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->default('pending')->comment('pending','approved','rejected');
            $table->timestamp('pending_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchantRequests');
    }
};