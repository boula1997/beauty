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
            'T-Shirts',
            'Jeans',
            'Dresses',
            'Jackets',
            'Sweaters',
            'Skirts',
            'Shorts',
            'Shoes',
            'Accessories',
            'Hats',
        ];
        
        $title_fr = [
            'T-shirts',
            'Jeans',
            'Robes',
            'Vestes',
            'Pulls',
            'Jupes',
            'Shorts',
            'Chaussures',
            'Accessoires',
            'Chapeaux',
        ];
        
        $title_ar = [
            'تيشيرتات',
            'جينزات',
            'فساتين',
            'جاكيتات',
            'بلوفرات',
            'تنانير',
            'شورتات',
            'أحذية',
            'إكسسوارات',
            'قبعات',
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
                'category_id'=>rand(1,10),
            ]);
          }
    }
}
