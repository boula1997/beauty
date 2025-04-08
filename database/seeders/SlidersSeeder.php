<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
            'Fresh Flowers Delivered',
            'Bloom Your Day',
            'Elegant Bouquets',
        ];
        
        $title_ar = [
            'توصيل الورد الطازج',
            'ازهِر يومك',
            'باقات أنيقة',
        ];
        
        $title_fr = [
            'Fleurs Fraîches Livrées',
            'Fleurissez Votre Journée',
            'Bouquets Élégants',
        ];
        
        $subtitle_en = [
            'Surprise your loved ones with fresh floral arrangements',
            'Start your day with colors and fragrances',
            'Luxury flowers for every occasion',
        ];
        
        $subtitle_ar = [
            'فاجئ أحبّاءك بترتيبات زهور طازجة',
            'ابدأ يومك بالألوان والعطور',
            'زهور فاخرة لكل مناسبة',
        ];
        
        $subtitle_fr = [
            'Surprenez vos proches avec des arrangements floraux frais',
            'Commencez votre journée en couleurs et en senteurs',
            'Des fleurs de luxe pour chaque occasion',
        ];
        
        
        $image=[
            "images/slider1.jpg",
            "images/slider2.jpg",
            "images/slider3.avif",
     
        ];
        

        for ($i = 0; $i < count($image); $i++) {
            $slider = Slider::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'subtitle' => $subtitle_en[$i],
                  
                ],
                'fr' => [
                    'title' => $title_fr[$i],
                    'subtitle' => $subtitle_fr[$i],
                  
                ],
            ]);
            
                $slider->file()->create(["url"=>$image[$i]]);
          }
    }
}