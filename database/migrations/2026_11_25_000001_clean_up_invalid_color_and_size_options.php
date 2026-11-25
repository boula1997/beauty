<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Data clean-up for invalid color and size options (Blanko task #3566).
 *
 * Only touches the exact rows found in local + production data (2026-11-25):
 * - sizes 11 ("1"), 12 ("2"), 13 ("3"), 17 ("5XXXXX") are deleted, but only
 *   if no product variation uses them (otherwise that size is skipped).
 * - color 7 hexCode "Yellow" -> "#FFFF00".
 * - color 79 title "2" -> Maroon / عنابي.
 * - colors 2-15 get EN/AR names where they have none (existing names are kept).
 */
return new class extends Migration
{
    private array $badSizeIds = [11, 12, 13, 17];

    private array $colorNames = [
        2  => ['en' => 'White',     'ar' => 'أبيض'],
        3  => ['en' => 'Black',     'ar' => 'أسود'],
        4  => ['en' => 'Red',       'ar' => 'أحمر'],
        5  => ['en' => 'Blue',      'ar' => 'أزرق'],
        6  => ['en' => 'Green',     'ar' => 'أخضر'],
        7  => ['en' => 'Yellow',    'ar' => 'أصفر'],
        8  => ['en' => 'Orange',    'ar' => 'برتقالي'],
        9  => ['en' => 'Purple',    'ar' => 'بنفسجي'],
        10 => ['en' => 'Gray',      'ar' => 'رمادي'],
        11 => ['en' => 'Beige',     'ar' => 'بيج'],
        12 => ['en' => 'Peach',     'ar' => 'خوخي'],
        13 => ['en' => 'Brown',     'ar' => 'بني'],
        14 => ['en' => 'Dark red',  'ar' => 'أحمر غامق'],
        15 => ['en' => 'Jet black', 'ar' => 'أسود فاحم'],
    ];

    public function up(): void
    {
        DB::transaction(function () {
            $now = now();

            // 1) Unused junk sizes.
            $usedSizeIds = DB::table('productvariations')
                ->whereIn('size_id', $this->badSizeIds)
                ->distinct()
                ->pluck('size_id')
                ->all();
            $deletable = array_values(array_diff($this->badSizeIds, $usedSizeIds));

            if ($deletable) {
                DB::table('size_translations')->whereIn('size_id', $deletable)->delete();
                DB::table('sizes')->whereIn('id', $deletable)->delete();
            }

            // 2) Color 7 stored a word instead of a hex code.
            DB::table('colors')->where('id', 7)->where('hexCode', 'Yellow')
                ->update(['hexCode' => '#FFFF00', 'updated_at' => $now]);

            // 3) Color 79 named "2".
            foreach (['en' => 'Maroon', 'ar' => 'عنابي'] as $locale => $title) {
                DB::table('color_translations')
                    ->where('color_id', 79)->where('locale', $locale)->where('title', '2')
                    ->update(['title' => $title, 'updated_at' => $now]);
            }

            // 4) Name the unnamed colors (never overwrite an existing name).
            $existingColorIds = DB::table('colors')->whereIn('id', array_keys($this->colorNames))->pluck('id')->all();
            foreach ($this->colorNames as $colorId => $names) {
                if (!in_array($colorId, $existingColorIds)) {
                    continue;
                }
                foreach ($names as $locale => $title) {
                    $exists = DB::table('color_translations')
                        ->where('color_id', $colorId)->where('locale', $locale)->exists();
                    if (!$exists) {
                        DB::table('color_translations')->insert([
                            'color_id' => $colorId,
                            'locale' => $locale,
                            'title' => $title,
                            'created_at' => $now,
                            'updated_at' => $now,
                        ]);
                    }
                }
            }
        });
    }

    public function down(): void
    {
        // Intentionally empty: this is a one-way data clean-up. Restoring the junk
        // size labels / numeric color name would only reintroduce the bad data.
    }
};
