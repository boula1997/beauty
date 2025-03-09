<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $title_en= [
            "feature title 1",
            "feature title 2",
            "feature title 3",
                    ];
        
        $subtitle_en= [
            "feature subtitle 1",
            "feature subtitle 2",
            "feature subtitle 3",
                     ];
        
        $description_en= [
            "<p>One of the biggest real estate developments companies in the MENA region owned by a group of Arab investors, started more than 12 years ago in the United Arab Emirates, during which it built a strong portfolio in Abu Dhabi and other emirates. Then the company expands in one of the largest markets in the MENA region, the Arab Republic of Egypt, to start its business in Egypt since 2014..</p>",
            "<p>One of the biggest real estate developments companies in the MENA region owned by a group of Arab investors, started more than 12 years ago in the United Arab Emirates, during which it built a strong portfolio in Abu Dhabi and other emirates. Then the company expands in one of the largest markets in the MENA region, the Arab Republic of Egypt, to start its business in Egypt since 2014..</p>",
            "<p>One of the biggest real estate developments companies in the MENA region owned by a group of Arab investors, started more than 12 years ago in the United Arab Emirates, during which it built a strong portfolio in Abu Dhabi and other emirates. Then the company expands in one of the largest markets in the MENA region, the Arab Republic of Egypt, to start its business in Egypt since 2014..</p>",
                     ];

            $title_ar = [
                "عنوان المشروع 1",
                "عنوان المشروع 2",
                "عنوان المشروع 3",
            ];
            
            $subtitle_ar = [
                "العنوان الفرعي للمشروع 1",
                "العنوان الفرعي للمشروع 2",
                "العنوان الفرعي للمشروع 3",
            ];
            
            $description_ar = [
                "<p>واحدة من أكبر شركات التطوير العقاري في منطقة الشرق الأوسط وشمال إفريقيا، مملوكة لمجموعة من المستثمرين العرب. بدأت منذ أكثر من 12 عامًا في الإمارات العربية المتحدة، حيث بنت محفظة قوية في أبوظبي وغيرها من الإمارات. ثم توسعت الشركة في أحد أكبر الأسواق في منطقة الشرق الأوسط وشمال إفريقيا، جمهورية مصر العربية، وبدأت أعمالها في مصر منذ عام 2014.</p>",
                
                "<p>واحدة من أكبر شركات التطوير العقاري في منطقة الشرق الأوسط وشمال إفريقيا، مملوكة لمجموعة من المستثمرين العرب. بدأت منذ أكثر من 12 عامًا في الإمارات العربية المتحدة، حيث بنت محفظة قوية في أبوظبي وغيرها من الإمارات. ثم توسعت الشركة في أحد أكبر الأسواق في منطقة الشرق الأوسط وشمال إفريقيا، جمهورية مصر العربية، وبدأت أعمالها في مصر منذ عام 2014.</p>",
                
                "<p>واحدة من أكبر شركات التطوير العقاري في منطقة الشرق الأوسط وشمال إفريقيا، مملوكة لمجموعة من المستثمرين العرب. بدأت منذ أكثر من 12 عامًا في الإمارات العربية المتحدة، حيث بنت محفظة قوية في أبوظبي وغيرها من الإمارات. ثم توسعت الشركة في أحد أكبر الأسواق في منطقة الشرق الأوسط وشمال إفريقيا، جمهورية مصر العربية، وبدأت أعمالها في مصر منذ عام 2014.</p>",
            ];
                    

        
        $image=[
            "images/features1.jpg",
            "images/features2.jpg",
            "images/features3.jpg",
            
        ];
       
        $category=[1];

        for ($i = 0; $i < count($title_en); $i++) {
            $feature = Feature::create([
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

                'category_id'=>$category[0],
            ]);

            $feature->file()->create(["url"=>$image[$i]]);
        }
    }
}
