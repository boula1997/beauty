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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('transaction_reference')->nullable();
            $table->string('payment_method')->nullable()->comment('digital_payment, wallet');
            $table->string('payment_status')->default('unpaid');
            $table->timestamp('refunded_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('transaction_reference');
            $table->dropColumn('payment_method');
            $table->dropColumn('payment_status');
            $table->dropColumn('refunded_at');
        });
    }
};
