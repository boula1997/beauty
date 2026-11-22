<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * The production database still has `size_translations` rows (XS, S, M, L, XL, 2XL)
 * but the parent `sizes` table is missing. This restores it with the same structure
 * as 2022_10_22_075806_create_sizes_table and re-creates the parent rows for every
 * size_id still referenced by `size_translations`, so the Size model works again.
 *
 * Safe to run on a database that already has `sizes`: nothing is created and only
 * missing parent rows are inserted.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('sizes')) {
            Schema::create('sizes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('store_id')->nullable();
                $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('size_translations')) {
            return;
        }

        $existingIds = DB::table('sizes')->pluck('id')->all();

        $missingIds = DB::table('size_translations')
            ->select('size_id')
            ->distinct()
            ->pluck('size_id')
            ->reject(fn ($id) => in_array($id, $existingIds))
            ->values();

        if ($missingIds->isEmpty()) {
            return;
        }

        $now = now();
        DB::table('sizes')->insert(
            $missingIds->map(fn ($id) => [
                'id' => $id,
                'store_id' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ])->all()
        );

        // Explicit ids were inserted: move the PostgreSQL sequence past them so the
        // next admin-created size does not collide. MySQL adjusts AUTO_INCREMENT itself.
        if (DB::connection()->getDriverName() === 'pgsql') {
            DB::statement("SELECT setval(pg_get_serial_sequence('sizes', 'id'), (SELECT MAX(id) FROM sizes))");
        }
    }

    public function down(): void
    {
        // Intentionally left empty: the table may have existed before this migration,
        // and dropping it would delete sizes that variations and orders depend on.
    }
};
