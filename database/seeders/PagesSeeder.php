<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // English Data
        $title_en = [
                    null,
                    "About US",
                    "Simplictiy is the ultimate shophistication trend",
                ];

        $subtitle_en = [
            null,
            "It's all about perfection",
            null,    
                
        ];

        $description_en = [
            null,
            "<p>One of the biggest real estate developments companies in the MENA region owned by a group of Arab investors, started more than 12 years ago in the United Arab Emirates, during which it built a strong portfolio in Abu Dhabi and other emirates. Then the company expands in one of the largest markets in the MENA region, the Arab Republic of Egypt, to start its business in Egypt since 2014.</p>",
            "<p>Our vision is to be the partner of choice for those who believe that smart, thoughtful real estate development changes communities for the better</p>",
        ];


        // Arabic Data
            $title_ar = [
                null,
                "من نحن",
                "البساطة هي قمة الأناقة والتميز",
            ];

            $subtitle_ar = [
                null,
                "الأمر كله يتعلق بالكمال",
                null,    
                
            ];

            $description_ar = [
                null,
                "<p>واحدة من أكبر شركات التطوير العقاري في منطقة الشرق الأوسط وشمال إفريقيا، مملوكة لمجموعة من المستثمرين العرب. بدأت منذ أكثر من 12 عامًا في الإمارات العربية المتحدة، حيث بنت محفظة قوية في أبوظبي وغيرها من الإمارات. ثم توسعت الشركة في أحد أكبر الأسواق في منطقة الشرق الأوسط وشمال إفريقيا، جمهورية مصر العربية، وبدأت أعمالها في مصر منذ عام 2014.</p>",
                
                "<p>رؤيتنا هي أن نكون الشريك المفضل لأولئك الذين يؤمنون بأن التطوير العقاري الذكي والمُخطط بعناية يساهم في تحسين المجتمعات.</p>",
                

            ];


           $youtube_link=[
               "https://neweventdev.com/mainsite/wp-content/uploads/2024/10/H-Q-T.mp4",
               null,
               null,
           ];
            $identifiers=["blog","aboutus-home","footer-section",
                          ];  

             $images=[  
                        null,
                        null,
                        ["images/footer1.jpg",],
                        
                    ];
       
            
        for ($i = 0; $i < count($title_ar); $i++) {
            $page = Page::create([
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
                'identifier'=>$identifiers[$i],
                'youtube_link'=>$youtube_link[$i],
            ]);

            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $page->file()->create(["url"=>$image]);
     }
    }
}