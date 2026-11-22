<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

/**
 * Gives a name (en/ar/fr) to every color that has no translation at all, based on its hex code.
 * Colors that already have a title are left untouched. Safe to re-run.
 *
 *   php artisan db:seed --class=ColorTranslationsBackfillSeeder
 */
class ColorTranslationsBackfillSeeder extends Seeder
{
    /** [r, g, b, en, ar, fr] reference palette; the nearest one names the color. */
    private const PALETTE = [
        [255, 255, 255, 'White', 'أبيض', 'Blanc'],
        [0, 0, 0, 'Black', 'أسود', 'Noir'],
        [128, 128, 128, 'Gray', 'رمادي', 'Gris'],
        [192, 192, 192, 'Silver', 'فضي', 'Argent'],
        [255, 0, 0, 'Red', 'أحمر', 'Rouge'],
        [128, 0, 32, 'Burgundy', 'نبيتي', 'Bordeaux'],
        [0, 123, 255, 'Blue', 'أزرق', 'Bleu'],
        [0, 0, 128, 'Navy', 'كحلي', 'Bleu marine'],
        [135, 206, 235, 'Sky blue', 'لبني', 'Bleu ciel'],
        [40, 167, 69, 'Green', 'أخضر', 'Vert'],
        [85, 107, 47, 'Olive', 'زيتي', 'Olive'],
        [255, 255, 0, 'Yellow', 'أصفر', 'Jaune'],
        [255, 165, 0, 'Orange', 'برتقالي', 'Orange'],
        [128, 0, 128, 'Purple', 'بنفسجي', 'Violet'],
        [255, 192, 203, 'Pink', 'وردي', 'Rose'],
        [245, 245, 220, 'Beige', 'بيج', 'Beige'],
        [255, 222, 185, 'Peach', 'خوخي', 'Pêche'],
        [125, 64, 60, 'Brown', 'بني', 'Marron'],
        [210, 180, 140, 'Camel', 'جملي', 'Camel'],
    ];

    public function run(): void
    {
        $filled = 0;

        Color::doesntHave('translations')->get()->each(function (Color $color) use (&$filled) {
            [$en, $ar, $fr] = $this->nameFor($color->hexCode);
            $names = ['en' => $en, 'ar' => $ar, 'fr' => $fr];
            $locales = array_intersect(array_keys($names), (array) config('translatable.locales'));
            foreach ($locales as $locale) {
                $color->translateOrNew($locale)->title = $names[$locale];
            }
            $color->save();
            $filled++;
        });

        $this->command?->info("Named {$filled} color(s).");
    }

    private function nameFor(?string $hex): array
    {
        $rgb = $this->rgb($hex);
        if (!$rgb) {
            // Not a hex code (e.g. "Yellow"): match a palette name, else use the value as-is.
            foreach (self::PALETTE as $p) {
                if (strcasecmp($p[3], trim((string) $hex)) === 0) {
                    return [$p[3], $p[4], $p[5]];
                }
            }
            return [$hex, $hex, $hex];
        }

        $best = null;
        $bestDist = PHP_INT_MAX;
        foreach (self::PALETTE as $p) {
            $d = ($p[0] - $rgb[0]) ** 2 + ($p[1] - $rgb[1]) ** 2 + ($p[2] - $rgb[2]) ** 2;
            if ($d < $bestDist) {
                $bestDist = $d;
                $best = $p;
            }
        }
        return [$best[3], $best[4], $best[5]];
    }

    private function rgb(?string $hex): ?array
    {
        $hex = ltrim(trim((string) $hex), '#');
        if (strlen($hex) === 3) {
            $hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
        }
        if (!preg_match('/^[0-9a-fA-F]{6}$/', $hex)) {
            return null;
        }
        return [hexdec(substr($hex, 0, 2)), hexdec(substr($hex, 2, 2)), hexdec(substr($hex, 4, 2))];
    }
}
