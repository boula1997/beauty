<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $title_ar = [
            "المؤتمر الصحفي لإطلاق المشروع الثالث لشركة نيو إيفنت للتطوير العقاري، مشروع قماري ريزيدنس",
            "التغطية الصحفية لإطلاق المشروع الثالث لشركة نيو إيفنت ديفيلوبمنتس، قماري ريزيدنس",
            "قماري ريزيدنس",
            "فعالية قماري ريزيدنس",
            "الإطلاق الآن... كمبوند سكني في العاصمة الإدارية الجديدة - R8",
            "يوم مليء بالسعادة والفرح لشركة نيو إيفنت ديفيلوبمنتس",
        ];
        
        $title_en = [
            "Press conference for the launch of the third project of New Event Real Estate Development Company, the Qamari Residence project",
            "Press coverage of the launch of the third project of New Event Developments, Qamari Residence",
            "Qamari Residence",
            "Qamari Residence Event",
            "Launching Now... Residential Compound New Capital - R8",
            "A day full of happiness and joy for the New Event Developments",
        ];
        
        $youtube_link = [
            "https://youtu.be/RdJrgY46mjQ",
            "https://youtu.be/E614dD_pID8",
            "https://youtu.be/lEz8DSsDEe4",
            "https://youtu.be/pHxZvU6yfM8",
            "https://youtu.be/oZNu7NluXjQ",
            "https://youtu.be/5vZ7FLoQyCI",
        ];
    
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Video = Video::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'youtube_link' => $youtube_link[$i],
            ]);
          
          }
    }
}