<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = [
            "سيتي سكيب",
            "إطلاق مشروع قماري ريزيدنس",
            "معرض المستثمر",
            "حفل إفطار رمضان 2022",
        ];
        
        $title_en = [
            "Cityscape",
            "Launch Project Qamari Residence",
            "The Investor Expo",
            "Ramadan IFTAR Party 2022",
                        
                    ];


            $description_ar = [
                "<p>بعض النصوص السريعة كمثال لبناء عنوان البطاقة وتكوين الجزء الأكبر من محتوى البطاقة.</p>",
                "<p>بعض النصوص السريعة كمثال لبناء عنوان البطاقة وتكوين الجزء الأكبر من محتوى البطاقة.</p>",
                "<p>بعض النصوص السريعة كمثال لبناء عنوان البطاقة وتكوين الجزء الأكبر من محتوى البطاقة.</p>",
                "<p>بعض النصوص السريعة كمثال لبناء عنوان البطاقة وتكوين الجزء الأكبر من محتوى البطاقة.</p>",
            ];
            
        $description_en = [
            "<p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>",
            "<p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>",
            "<p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>",
            "<p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>",
    ];

        $images=[  [
                        "images/1.webp",
                    ],
                    [
                        "images/2.webp",
                    ],
                    [
                        "images/700x478c.jpg",
                    ],
                    [
                        "images/DSC02299-1-768x512.jpg",
                    ],
                   
                   
                ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Gallery = Gallery::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ]
            ]);
            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $Gallery->file()->create(["url"=>$image]);
        }
    }
}