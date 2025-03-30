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
        Schema::table('orderproducts', function (Blueprint $table) {
            $table->dropForeign(['variation_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orderproducts', function (Blueprint $table) {
            $table->foreign('variation_id')->references('id')->on('productVariations')->onDelete('cascade');
        });
    }
};