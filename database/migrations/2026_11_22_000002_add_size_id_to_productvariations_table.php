<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Lets a product variation be a color + size combination (e.g. Red / M) with its own stock.
 * Nullable so every existing color-only variation keeps working unchanged.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('productvariations', 'size_id')) {
            return;
        }

        Schema::table('productvariations', function (Blueprint $table) {
            $table->foreignId('size_id')
                ->nullable()
                ->after('color_id')
                ->constrained('sizes')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        if (!Schema::hasColumn('productvariations', 'size_id')) {
            return;
        }

        Schema::table('productvariations', function (Blueprint $table) {
            $table->dropConstrainedForeignId('size_id');
        });
    }
};
