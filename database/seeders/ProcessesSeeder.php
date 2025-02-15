<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["Define Your Goals and Requirements",
                     "Initial Consultation",
                     "Proposal and Agreement",
                     "Executing and Delivering"];
        $subtitle_en = [null,null,null,null];
        $description_en = [ "<p>Clearly identify your goals and objectives for the website.</p>",

                            "<p>Connect with us to have a full illustration to discuss your project goals </p>",

                            "<p>we will provide you with a proposal that outlines the project scope, timeline, and cost.</p>",

                            "<p>reviewing the website and deliver it to client once he is satisfied with the output. </p>"];

        $title_ar = ["حدد أهدافك ومتطلباتك:",
                     "المشاورات الأولية", 
                     "الاقتراح والاتفاق",
                     "تنفيذ وتسليم الموقع"];
        $subtitle_ar =[null,null,null,null];

        $description_ar =  [ 
                            "<p>حدد بوضوح أهدافك وغاياتك للموقع.</p>",

                            "<p>تواصل معنا للحصول على رسم توضيحي كامل لمناقشة أهداف مشروعك </p>",

                            "<p>سنزودك بمقترح يوضح نطاق المشروع والجدول الزمني والتكلفة.</p>",

                            "<p>مراجعة الموقع وتسليمه للعميل بمجرد رضاه عن المخرجات.</p>"];
      
        $image=[];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Process = Process::create([
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
            ]);
     }
    }
}
