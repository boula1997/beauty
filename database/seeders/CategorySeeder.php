<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
            'Fresh Flowers',
            'Artificial Flowers',
            'Flower Bouquets',
            'Wedding Flowers',
            'Birthday Flowers',
            'Anniversary Flowers',
            'Valentine\'s Day Flowers',
            'Indoor Plants',
            'Outdoor Plants',
            'Floral Accessories'
        ];
        
        $title_fr = [
            'Fleurs fraîches',
            'Fleurs artificielles',
            'Bouquets de fleurs',
            'Fleurs de mariage',
            'Fleurs d\'anniversaire',
            'Fleurs de célébration',
            'Fleurs de la Saint-Valentin',
            'Plantes d\'intérieur',
            'Plantes d\'extérieur',
            'Accessoires floraux'
        ];
        
        $title_ar = [
            'زهور طبيعية',
            'زهور صناعية',
            'باقات زهور',
            'زهور الزفاف',
            'زهور أعياد الميلاد',
            'زهور المناسبات',
            'زهور عيد الحب',
            'نباتات داخلية',
            'نباتات خارجية',
            'إكسسوارات زهور'
        ];
                    
        for ($i = 0; $i < count($title_ar); $i++) {
           
            $category = Category::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'fr' => [
                    'title' => $title_fr[$i],
                ],
            ]);
            // $category->file()->create(["url"=>$images[$i]]);
        }
    }
}