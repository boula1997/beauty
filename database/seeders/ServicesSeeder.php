<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // English Data
            $title_en = [ 
                'Flowers',
                'Floral Designs',
                'Hotels',
                'Wedding & Events',                    
                        ];

            $description_en = [   
                'Flowers',
                'Floral Designs',
                'Hotels',
                'Wedding & Events', 
                            ];


            // Arabic Data
            $title_ar = [
                    
                'Flowers',
                'Floral Designs',
                'Hotels',
                'Wedding & Events', 
                
                        ];
    
            $description_ar = [
                'Flowers',
                'Floral Designs',
                'Hotels',
                'Wedding & Events', 
                            ];

            $image=[
                "images/slider1.jpg",
                "images/slider1.jpg",
                "images/slider1.jpg",
                "images/slider1.jpg",
            ];
                            

            $images=[
                        ['images/slider1.jpg','images/slider2.jpg'],
                        ['images/slider1.jpg','images/slider2.jpg'],
                        ['images/slider1.jpg','images/slider2.jpg'],
                        ['images/slider1.jpg','images/slider2.jpg'],
                    ];



            for ($i = 0; $i < count($title_ar); $i++) 
            { 
                $service=Service::create([ 'ar'=> [
                'title' => $title_ar[$i],
                'description' => $description_ar[$i],

                ],
                'en' => [
                'title' => $title_en[$i],
                'description' => $description_en[$i],

                ],
                'fr' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
    
                ],
                ]);
                
            $service->file()->create(["url"=>$image[$i]]);


                if(isset($images[$i]))
                foreach($images[$i] as $mlti_image)
                $service->file()->create(["url"=>$mlti_image]);
            }
        }
    }