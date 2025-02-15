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
        $title_ar = ["مشروع العاصمة الجديدة – R8", "منذ في مصر", "مشاريع غرب القاهرة", "العاصمة الجديدة – وسط المدينة"];
        $title_en = ["Project New Capital – R8","Since in Egypt","West Cairo Projects","New Capital – Downtown"];
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