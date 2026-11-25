<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/**
 * Content fixes (Blanko tasks #3561 + follow-ups), local + production data of 2026-11-25:
 * - Products 441/442: the English description was the Arabic text -> English translation.
 * - Settings: Arabic texts described a cosmetics store ("لمستحضرات التجميل"); the store sells
 *   women's clothing -> corrected. English settings row was missing -> created.
 * - Sliders with no title in any language -> given a title (shown in the dashboard list only).
 *
 * Every change only applies while the old value is still there, so edits made in the
 * dashboard are never overwritten.
 */
return new class extends Migration
{
    private array $productDescriptionsEn = [
        441 => "ISS coat, exactly the same design as SHEIN! ♥️\nFabric: soft, heavyweight imported lycra wool ♥️\nYou're not just buying a coat! You can style it and wear it in many different ways ♥️\nYou're welcome to see it before buying, because we're confident in the quality of our work 😌♥️\nAll photos are real ♥️\nLength:\n80 cm\nSizes:\nSize 1 fits (55–75 kg)\nSize 2 fits (75–95 kg)",
        442 => "ISS coat, exactly the same design as SHEIN! ♥️\nFabric: soft, heavyweight and very luxurious imported lycra wool ♥️\nYou're not just buying a coat! You can style it and wear it in many different ways ♥️\nYou're welcome to see it before buying, because we're confident in the quality of our work 😌♥️\nColors:\nBurgundy 🍷\nChocolate brown 🤎\nAll photos are real ♥️\nLength:\n80 cm\nSizes:\nSize 1 (55–75 kg)\nSize 2 (75–95 kg)",
    ];

    private array $settingsAr = [
        'title' => ['old' => 'ISS Store لمستحضرات التجميل', 'new' => 'ISS Store'],
        'description' => [
            'old' => 'ISS Store هو متجر متخصص في مستحضرات التجميل والعناية بالبشرة، يقدم منتجات أصلية بجودة عالية وتجربة تسوق سهلة وآمنة.',
            'new' => 'ISS Store متجر أونلاين لملابس السيدات، يقدم موديلات عصرية بخامات عالية الجودة وتجربة تسوق سهلة وآمنة.',
        ],
        'meta_data' => [
            'old' => 'ISS Store، مكياج، مستحضرات تجميل، عناية بالبشرة، متجر مكياج أونلاين، مصر',
            'new' => 'ISS Store، ملابس حريمي، ملابس سيدات، كوت، متجر ملابس أونلاين، مصر',
        ],
    ];

    private array $settingsEn = [
        'title' => 'ISS Store',
        'address' => 'Giza, Egypt',
        'description' => "ISS Store is an online women's clothing store offering trendy designs in high-quality fabrics, with an easy and secure shopping experience.",
        'appointment' => 'For orders or inquiries, please contact the ISS Store support team.',
        'copyright' => '© 2025 ISS Store. All rights reserved.',
        'meta_data' => "ISS Store, women's clothing, ladies' fashion, coats, online clothing store, Egypt",
        'policy' => 'By using the ISS Store website, you agree to the exchange and return policy and the privacy policy.',
    ];

    private array $sliderTitles = [
        'ar' => ['title' => 'ISS Store', 'subtitle' => 'أزياء نسائية راقية'],
        'en' => ['title' => 'ISS Store', 'subtitle' => "Elegant women's fashion"],
    ];

    public function up(): void
    {
        DB::transaction(function () {
            $now = now();

            // 1) English product descriptions that are still written in Arabic.
            foreach ($this->productDescriptionsEn as $productId => $description) {
                $en = DB::table('product_translations')->where('product_id', $productId)->where('locale', 'en')->first(['id', 'description']);
                if ($en && preg_match('/\p{Arabic}/u', (string) $en->description)) {
                    DB::table('product_translations')->where('id', $en->id)
                        ->update(['description' => $description, 'updated_at' => $now]);
                }
            }

            $settingId = DB::table('settings')->orderBy('id')->value('id');
            if ($settingId) {
                // 2) Arabic settings texts that still describe a cosmetics store.
                foreach ($this->settingsAr as $column => $change) {
                    DB::table('setting_translations')
                        ->where('setting_id', $settingId)->where('locale', 'ar')->where($column, $change['old'])
                        ->update([$column => $change['new'], 'updated_at' => $now]);
                }

                // 3) Missing English settings row.
                $hasEn = DB::table('setting_translations')->where('setting_id', $settingId)->where('locale', 'en')->exists();
                if (!$hasEn) {
                    DB::table('setting_translations')->insert($this->settingsEn + [
                        'setting_id' => $settingId,
                        'locale' => 'en',
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]);
                }
            }

            // 4) Sliders without any title.
            $untitled = DB::table('sliders')
                ->whereNotExists(function ($q) {
                    $q->select(DB::raw(1))->from('slider_translations')
                        ->whereColumn('slider_translations.slider_id', 'sliders.id');
                })
                ->pluck('id');
            foreach ($untitled as $sliderId) {
                foreach ($this->sliderTitles as $locale => $texts) {
                    DB::table('slider_translations')->insert($texts + [
                        'slider_id' => $sliderId,
                        'locale' => $locale,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]);
                }
            }
        });
    }

    public function down(): void
    {
        // Intentionally empty: content fix. Reverting would restore the wrong store
        // description and the Arabic text in the English product descriptions.
    }
};
