<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["مواقع تم تنفيذها","مواقع تحت الانشاء","تطبيقات موبيل تم تنفيذها","تطبيقات موبيل تحت الانشاء"];
        $title_en = ["Built Web Projects","New Web Project","Created Mobile Applications","New  Mobile Applications"];
        $count=['30','15',"10","5"];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Counter_Translation = Counter::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
               'count'=>$count[$i]
            ]);
        }
    }
}
