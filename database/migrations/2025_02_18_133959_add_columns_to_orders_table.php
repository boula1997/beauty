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
            $table->integer('cancelled_by')->nullable()->comment('1->customer, 2->merchant, 3->app, 4->timeout');
            $table->timestamp('pending_at')->nullable();
            $table->timestamp('in_processing_at')->nullable();
            $table->timestamp('cancelled_at')->nullable();
            $table->timestamp('shipped_at')->nullable();
            $table->timestamp('out_for_delivery_at')->nullable();
            $table->timestamp('delivered_at')->nullable();
            $table->timestamp('failed_at')->nullable();
            $table->timestamp('refunded_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn([
                'cancelled_by',
                'pending_at',
                'in_processing_at',
                'cancelled_at',
                'shipped_at',
                'out_for_delivery_at',
                'delivered_at',
                'failed_at',
                'refunded_at'
            ]);
        });
    }
};
