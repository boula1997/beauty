<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
            'Red',
            'Blue',
            'Green',
            'Yellow',
            'Black',
            'White',
            'Purple',
            'Orange',
            'Pink',
            'Gray',
        ];
        
        $title_fr = [
            'Rouge',
            'Bleu',
            'Vert',
            'Jaune',
            'Noir',
            'Blanc',
            'Violet',
            'Orange',
            'Rose',
            'Gris',
        ];
        
        $title_ar = [
            'أحمر',
            'أزرق',
            'أخضر',
            'أصفر',
            'أسود',
            'أبيض',
            'أرجواني',
            'برتقالي',
            'وردي',
            'رمادي',
        ];
        
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $color = Color::create([
                'ar' => [
                    'title' => $title_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                  
                ],
                'fr' => [
                    'title' => $title_fr[$i],
                  
                ],
                'store_id'=>rand(1,10),
            ]);
          }
    }
}
