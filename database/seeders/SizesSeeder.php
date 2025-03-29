<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
            'Extra Small',
            'Small',
            'Medium',
            'Large',
            'Extra Large',
            'Double Extra Large',
            'Triple Extra Large',
            'One Size Fits All',
            'Petite',
            'Plus Size'
        ];
        
        $title_fr = [
            'Très petit',
            'Petit',
            'Moyen',
            'Grand',
            'Très grand',
            'Double très grand',
            'Triple très grand',
            'Taille unique',
            'Petite',
            'Grande taille'
        ];
        
        $title_ar = [
            'صغير جدًا',
            'صغير',
            'متوسط',
            'كبير',
            'كبير جدًا',
            'ضعف كبير جدًا',
            'ثلاثي كبير جدًا',
            'مقاس واحد يناسب الجميع',
            'صغير الحجم',
            'مقاس كبير'
        ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $size = Size::create([
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