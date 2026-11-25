<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Repair migration: 2023_06_27_170717_create_slider_translations_table and
 * 2025_04_08_125839_add_title_and_subtitle_to_slider_translations_table are
 * recorded in the `migrations` table, but `slider_translations` does not exist
 * in the real databases, so the Sliders dashboard page crashes (SQLSTATE 42S02).
 *
 * Creates the table with the final schema those two migrations define,
 * only when it is missing. Does nothing on databases that already have it.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('slider_translations')) {
            return;
        }

        Schema::create('slider_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slider_id')->constrained('sliders')->cascadeOnDelete();
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->timestamps();
            $table->unique(['slider_id', 'locale']);
        });
    }

    public function down(): void
    {
        // Intentionally empty: the table belongs to the 2023/2025 migrations above.
        // Dropping it here would delete slider titles on rollback.
    }
};
