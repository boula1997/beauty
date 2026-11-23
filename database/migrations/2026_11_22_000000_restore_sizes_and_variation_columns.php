<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * Task #3544 (size selection) – schema repair.
 *
 * Some databases (e.g. the live store) had the `sizes` table dropped and the
 * `productvariations.size_id` / `price` columns removed by hand, while the
 * `migrations` table still lists the original migrations as run. Size titles
 * survived in `size_translations`.
 *
 * Every step is guarded, so this is a no-op on databases that already match
 * the original migrations, and it never drops or rewrites existing data.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('sizes')) {
            Schema::create('sizes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('store_id')->nullable();
                $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
                $table->timestamps();
            });

            $this->restoreSizesFromTranslations();
        }

        Schema::table('productvariations', function (Blueprint $table) {
            if (! Schema::hasColumn('productvariations', 'size_id')) {
                $table->unsignedBigInteger('size_id')->nullable();
                $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            }

            // Default 0 matches what the model already returned while the column was missing.
            if (! Schema::hasColumn('productvariations', 'price')) {
                $table->double('price')->default(0);
            }

            // Free-text label used by the live store before sizes existed (e.g. "بني مقاس 1"); kept so it isn't lost.
            if (! Schema::hasColumn('productvariations', 'title')) {
                $table->string('title')->nullable();
            }
        });
    }

    /**
     * Intentionally empty: on databases where these tables/columns came from the
     * original migrations, dropping them here would destroy real data.
     */
    public function down(): void
    {
        //
    }

    /** Recreate a `sizes` row for every size_id that still has translations, keeping the original ids. */
    private function restoreSizesFromTranslations(): void
    {
        if (! Schema::hasTable('size_translations')) {
            return;
        }

        $rows = DB::table('size_translations')
            ->select('size_id', DB::raw('MIN(created_at) as created_at'), DB::raw('MAX(updated_at) as updated_at'))
            ->groupBy('size_id')
            ->get()
            ->map(fn ($r) => [
                'id'         => $r->size_id,
                'store_id'   => null,
                'created_at' => $r->created_at,
                'updated_at' => $r->updated_at,
            ])
            ->all();

        if (empty($rows)) {
            return;
        }

        DB::table('sizes')->insert($rows);

        // Explicit ids don't advance PostgreSQL sequences (MySQL/MariaDB adjust AUTO_INCREMENT automatically).
        if (DB::connection()->getDriverName() === 'pgsql') {
            DB::statement("SELECT setval(pg_get_serial_sequence('sizes', 'id'), (SELECT MAX(id) FROM sizes))");
        }
    }
};
