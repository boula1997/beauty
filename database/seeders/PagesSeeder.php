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
                     "About Us",   
                    ];

        $subtitle_en = [
                        null,                          
                        ];

        $description_en = [
                           "<p>At Fiori Flower, we believe that every celebration
                           deserves to be extraordinary. With a passion for
                           elegance and a commitment to perfection, we
                           specialize in planning and organizing weddings,
                           engagements, birthdays, corporate events, and all
                           types of special occasions.
                           Our expert team takes care of every detail—from
                           venue selection and breathtaking décor to floral
                           arrangements, lighting, entertainment, and
                           hospitality—ensuring a seamless and unforgettable
                           experience. Whether you're dreaming of a fairytale
                           wedding or an intimate gathering, we bring your
                           vision to life with creativity, precision, and a touch
                           of magic.
                           With Fiori Flower, every event becomes a
                           masterpiece, and every moment turns into a
                           cherished memory.</p>",
                           
                        ];


        // Arabic Data
        $title_ar = [
                      "من نحن",
                      
                    ];

    
            $subtitle_ar = [
                          null,
                            ];
    
            $description_ar = [
                             "<p>
                             في فيوري فلاور، نؤمن بأن كل احتفال يستحق أن يكون استثنائيًا. بشغفنا بالأناقة والتزامنا بالكمال، نتخصص في تخطيط وتنظيم حفلات الزفاف، والخطوبة، وأعياد الميلاد، والفعاليات المؤسسية، وجميع أنواع المناسبات الخاصة.

                            يهتم فريقنا الخبير بكل التفاصيل - من اختيار المكان والديكورات الآسرة إلى تنسيق الزهور، والإضاءة، والترفيه، وكرم الضيافة - لضمان تجربة سلسة لا تُنسى. سواء كنت تحلم بحفل زفاف خيالي أو تجمع حميم، نُجسد رؤيتك بإبداع ودقة ولمسة من السحر.

                            مع فيوري فلاور، يصبح كل حدث تحفة فنية، وكل لحظة ذكرى عزيزة.</p>",
                            
                            ];

            $identifiers=[
                            "about",
                    ];  

            $images=[
                    ["images/there-is-pink-flower-with-leaves-flowers-it-generative-ai_955884-103357.avif"],
                    ];
            $youtube_link=null;


            for ($i = 0; $i < count($title_ar); $i++) 
            { $page=Page::create([ 'ar'=> [
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
                'youtube_link'=>$youtube_link,
                ]);

                if(isset($images[$i]))
                foreach($images[$i] as $image)
                $page->file()->create(["url"=>$image]);
            }
        }
    }