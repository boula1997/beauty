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
            $table->string('status')
            ->default('pending')
            ->comment('pending,in_processing,cancelled,shipped,out_for_delivery,delivered,refunded,returned')
            ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('status')
              ->default('pending')
              ->comment('pending,in_processing,cancelled,shipped,out_for_delivery,delivered,failed,refunded') 
              ->change();
        });
    }
};