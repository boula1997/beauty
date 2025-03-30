<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
            'Roses',
            'Lilies',
            'Tulips',
            'Orchids',
            'Sunflowers',
            'Daisies',
            'Carnations',
            'Hydrangeas',
            'Peonies',
            'Gardenias',
        ];
        
        $title_fr = [
            'Roses',
            'Lys',
            'Tulipes',
            'Orchidées',
            'Tournesols',
            'Marguerites',
            'Œillets',
            'Hortensias',
            'Pivoines',
            'Gardenias',
        ];
        
        $title_ar = [
            'ورود',
            'زنابق',
            'توليب',
            'أوركيد',
            'عباد الشمس',
            'أقحوان',
            'قرنفل',
            'هيدرانجيا',
            'فاوانيا',
            'غاردينيا',
        ];
        
        for ($i = 0; $i < count($title_ar); $i++) {
            $subcategory = Subcategory::create([
                'ar' => [
                    'title' => $title_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                  
                ],
                'fr' => [
                    'title' => $title_fr[$i],
                  
                ],
                'category_id'=>rand(2,11),
            ]);
          }
    }
}