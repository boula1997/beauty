<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["SEO Mind",
        "Boosterio",
        "Atomic SEO",
        "Green Host"];
      
        $title_ar = ["SEO Mind",
                    "Boosterio",
                    "Atomic SEO",
                    "Green Host"];

        $image=["images/tykEYLJg6IvrEdpzYcHTmLm5WWErcSklnEZcOjcI.webp",
                "images/HsWogOvEjxPtEStdNr913ols44RFifVERaoyxkwh.webp",
                "images/PF6upRmlXRiiLF1JVifLw2q43EI50i0dnTGHP6xu.webp",
                "images/TpVI2ZX1wEb42aAx56kLkGIpwGHyW1sPLeBgF5e8.webp"];
       
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Partner = Partner::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
            ]);
            $Partner->file()->create(["url"=>$image[$i]]);
          }
    }
}
