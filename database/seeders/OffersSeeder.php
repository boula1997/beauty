<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
                    "ADVERTISING",
                    "BOOK A FREE PERSONAL TRAINING SESSION",
                    "ADVERTISING",
                    "INDOOR FITNESS",
                    "MMA FITNESS",
                    "OUTDOOR FITNESS",
                    "SPARTAN RESISTANCE SESSION",
                    "BEACH BOOTCAMP",
                    "FULL BODY FUNC SESSION",
                    "ADVERTISING",
                    "DIET & NUTRITION PLAN",
                    "ADVERTISING",
                    ];

        $subtitle_en = [
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                           "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                       
                        ];

        $description_en = [
            null,null,null,null,null,null,null,null,null,null,null,null,              
        ];

        
        $title_ar = [
            "دعاية",
            "احجز جلسة تدريب شخصية مجانية",
            "دعاية",
            "اللياقة البدنية الداخلية",
            "اللياقة البدنية فنون القتال المختلطة",
            "اللياقة البدنية في الهواء الطلق",
            "جلسة المقاومة الإسبارطية",
            "معسكر الشاطئ التدريبي",
            "جلسة وظائف الجسم بالكامل",
            "دعاية",
            "خطة النظام الغذائي والتغذية",
            "دعاية",
                    ];

        $subtitle_ar =[ 
            null,null,null,null,null,null,null,null,null,null,null,null,              
                        ];
        $description_ar =[
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
            "Vivamus aliquet rutrum dui a varius. Mauris ornare tortor in eleifend blanditullam ut ligula et neque.",
                        ];
 
        $image=[
                    "images/n7PsCCvTh0UlmeZ3tkeZLAJN2xZNVCP3rKbBtmCa.jpg",
                    "images/DgSnJOCTJyqssz89T9uJtnJgrutQyoTjzGPCDoVv.jpg",
                    "images/kA0VxkfdwE8CxxjWcxE8aFrqi9faVH03GaouireY.jpg",
                    "images/vy8NlbjHaAQ0LkP9mM2JLvfTf5R4T12n3OC4NDcr.jpg",
                    "images/R9fRY7NuH0tlxdO08Dx9nypoXJQTwIDICgKjTZF0.jpg",
                    "images/3FOisZQw41DmayYWu1hmb8DCXcmfiHPoZKOw9b8R.jpg",
                    "images/DVzIt7cFI2jBoCJMmK8QOB6nRkzrMJBrFAEjS6xy.jpg",
                    "images/GSijNNjRYjo9WWymllbU1BO3Wr2Easx6e5eMlQV3.jpg",
                    "images/We0YQrRVYvsxIlJ7LfVikDqd2LouFhzgzEyg75Dj.jpg",
                    "images/3DYnoNH8BKd6Js167lD7dAseNCLFFqNdnzEgkm2n.jpg",
                    "images/h13R9Ao8Sa6W6HuW99D2026AMbdUKo5FT6M2m1n7.jpg",
                    "images/RkuWoIH5tcfcEthvvxNrYVdCTmpG3JNoSyBhe5lA.jpg",
                ];
        $icon=[
            null,null,null,null,null,null,null,null,null,null,null,null,              

                ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $offer = Offer::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                  
                ],
                'icon'=>$icon[$i],
            ]);
            $offer->file()->create(["url"=>$image[$i]]);
          }
    }
}
