<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\Size;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Local test data: gives a product size-based variations so the size picker,
 * out-of-stock sizes and "select size first" validation can be exercised.
 *
 * Not registered in DatabaseSeeder on purpose. Run explicitly:
 *   php artisan db:seed --class=TestSizedVariationsSeeder
 *
 * Optional env: SEED_SIZES_PRODUCT_ID (default: latest product that has a translation).
 * Safe to re-run: variations are matched on (product, color, size).
 */
class TestSizedVariationsSeeder extends Seeder
{
    /** Sizes used by the seeder: en title => ar title */
    private const SIZES = [
        'S'  => 'صغير',
        'M'  => 'متوسط',
        'L'  => 'كبير',
        'XL' => 'كبير جدًا',
    ];

    /**
     * Stock per color, per size. Quantity 0 = shown as out of stock.
     * Colors are looked up / created by hex code.
     */
    private const STOCK = [
        '#950909' => ['en' => 'Burgundy', 'ar' => 'برجندي', 'sizes' => ['S' => 5, 'M' => 8, 'L' => 0, 'XL' => 3]],
        '#000000' => ['en' => 'Black',    'ar' => 'أسود',   'sizes' => ['M' => 4, 'L' => 6]],
    ];

    public function run(): void
    {
        $product = $this->targetProduct();
        if (!$product) {
            $this->command?->error('No product found to seed sizes onto.');
            return;
        }

        DB::transaction(function () use ($product) {
            $sizes = collect(self::SIZES)->map(fn ($ar, $en) => $this->size($en, $ar));

            foreach (self::STOCK as $hex => $def) {
                $color = $this->color($hex, $def['en'], $def['ar']);

                // A color is either sized or not; drop the size-less row so stock isn't double counted.
                ProductVariation::where('product_id', $product->id)
                    ->where('color_id', $color->id)
                    ->whereNull('size_id')
                    ->delete();

                foreach ($def['sizes'] as $sizeKey => $qty) {
                    ProductVariation::updateOrCreate(
                        ['product_id' => $product->id, 'color_id' => $color->id, 'size_id' => $sizes[$sizeKey]->id],
                        ['quantity' => $qty, 'title' => "{$def['ar']} - {$sizeKey}", 'price' => $product->price ?? 0]
                    );
                }
            }
        });

        $this->command?->info("Seeded sized variations on product #{$product->id} ({$product->title}).");
    }

    private function targetProduct(): ?Product
    {
        $id = env('SEED_SIZES_PRODUCT_ID');
        if ($id) {
            return Product::find($id);
        }
        return Product::whereHas('translations')->latest('id')->first();
    }

    private function size(string $en, string $ar): Size
    {
        // Reuse an existing size: exact "M" or the long form "M (Medium)".
        $size = Size::whereTranslation('title', $en, 'en')->first()
            ?? Size::whereTranslationLike('title', $en . ' (%', 'en')->first();
        return $size ?: Size::create(['en' => ['title' => $en], 'ar' => ['title' => $ar]]);
    }

    private function color(string $hex, string $en, string $ar): Color
    {
        $color = Color::where('hexCode', $hex)->first();
        return $color ?: Color::create(['hexCode' => $hex, 'en' => ['title' => $en], 'ar' => ['title' => $ar]]);
    }
}
