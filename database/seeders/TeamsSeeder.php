<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
            'Mohamed Ahmed',
            'Mai Omar',
            'Boula Ibrahim',

        ];
                
        $title_ar = [
            'محمد احمد',
            'مى عمر',
            'بولا ابراهيم',
        ];
        

        $subtitle_en = [
            'Co-Founder',
            'Co-Founder',
            'Software Developer',

        ];
                
        $subtitle_ar = [
            'مؤسس مشارك',
            'مؤسس مشارك',
            'مطور برمجيات',
        ];
        $description_en = [
            'A visionary leader dedicated to building innovative solutions and inspiring teamwork.',
            'A creative co-founder passionate about design, growth, and impactful ideas.',
            'A skilled software developer focused on creating efficient and user-friendly applications.',
        ];

        $description_ar = [
            'قائد صاحب رؤية يسعى لبناء حلول مبتكرة وتحفيز روح الفريق.',
            'مؤسسة مبدعة تهتم بالتصميم والنمو وصناعة الأفكار المؤثرة.',
            'مطور برمجيات ماهر يركز على إنشاء تطبيقات فعّالة وسهلة الاستخدام.',
        ];
        
        $images=[
            "images/8clNIV1GqCrHMNu6Fcy0YwsYlFMK4UQv0WmCWAQp.jpg",
            "images/8clNIV1GqCrHMNu6Fcy0YwsYlFMK4UQv0WmCWAQp.jpg",
            "images/8clNIV1GqCrHMNu6Fcy0YwsYlFMK4UQv0WmCWAQp.jpg",
        ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $team = Team::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                    'description' => $description_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'subtitle' => $subtitle_en[$i],
                    'description' => $description_en[$i],
                  
                ],
            ]);
            $team->file()->create(["url"=>$images[$i]]);

          }
    }
}