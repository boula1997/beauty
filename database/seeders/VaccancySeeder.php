<?php

namespace Database\Seeders;

use App\Models\Vaccancy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $title_en = ["frontend developer"];
        $description_en = ['<p>A front-end developer creates websites and applications using web languages such as HTML, CSS, and JavaScript that allow users to access and interact with the site or app. When you visit a website, the design elements you see were created by a front-end developer</p>'];

        $title_ar = ["مطور وجهات المواقع"];
        $description_ar = ["<p>يقوم مطور الواجهة الأمامية بإنشاء مواقع الويب والتطبيقات باستخدام لغات الويب مثل HTML وCSS وJavaScript التي تتيح للمستخدمين الوصول إلى الموقع أو التطبيق والتفاعل معه. عندما تزور موقع ويب، تم إنشاء عناصر التصميم التي تراها بواسطة مطور الواجهة الأمامية</p>"];

        $salary = [7000];


        $image=[];

        for ($i = 0; $i < count($title_ar); $i++) {
            $VaccancyTranslation = Vaccancy::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],

                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
                'salary' => $salary[$i],
            ]);
        }
    }
}
