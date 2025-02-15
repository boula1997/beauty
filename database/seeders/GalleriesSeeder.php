<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = [
                         "العالمية (موقع للتجارة الإلكترونية)",
                         "سول فارما (موقع التجارة الإلكترونية)",
                         "ملف تعريف ريسيرفيا (موقع التجارة الإلكترونية)",
                         "المندر العربية (موقع للتجارة الإلكترونية)",
                         "GYM (موقع التجارة الإلكترونية)",
                         "أصل التوفير (موقع للتجارة الإلكترونية)",
                         "سيلين (خدمات فندقية)",
                         "مسابات ستيل (موقع للتجارة الإلكترونية)",
                         "حداق الفيروز",
                         "الجزيرة (خدمات فندقية)",
                         "ايجيبت للسياحة",
                     ];
        $title_en = [
                        "Elalamia (e-commerce website)",
                        "Soul Pharma (e-commerce website)",
                        "Reservya Profile (e-commerce website)",
                        "Elmandr Alarabia (e-commerce website)",
                        "GYM (e-commerce website)",
                        "Asl Al Tawfeer (e-commerce website)",
                        "Celine (Hotel Services)",
                        "Msabaat Steel (e-commerce website)",
                        "Haddak Elfayrouz",
                        "Al Jazira (Hotel Services)",
                        "Egypt Tourism",
                    ];

        $subtitle_ar =null;
        $subtitle_en = null;
        $description_ar = null;
        $description_en = null;

        $images=[  [
                        //Elalamia Website (e-commerce website)
                        "images/cgWPIBaJgb4Scv32ZJiBUlfgxxmN1VBPaZXHuBNQ.png",
                        "images/jt56GhBaJfQpaA0NvqXZ7bdakujTuzyW70lRLtoE.png",
                        "images/Ix6TIYHwCvxgPtWaspfddbGvyZYXXt9jrec8yAkn.png",
                        "images/7eXRM4Y6H4A8avrsL6ihOwVZ4b7abBbA6pDuyET4.png",
                        "images/ynASd3T5mGdFuUZi6uvWaih3GZjs4w0VRltMK470.png",
                        "images/PbJ4udZknEOWeALHvGi3sQuThWWohAonTar88NOF.png",
                        "images/Y94snrI09Gex5SNQO5yZrqzE2e3Guht71rEWbsXX.png",
                        "images/NhEKA5TSZe0EOe15L4jDznG48seP3urSspWgl79u.png",
                        "images/fu4OVbhm6tLlfpM0JOESaKkSMRLuF6OuOlVT13DF.png",
                        "images/ipHIqPYZfDEcp6EjxpQzumYCBPt0GzsFnhtCt294.png",
                        "images/mOPxVTc5mVCGnZTkxFFokefhj9jR52Ws1k1kTbMZ.png",
                    ],
                    [
                        //Soul Pharma
                        "images/NBuecH0kpfPECl0Hjqk4KRh60BnDzVpVTm1l3aaQ.png",
                        "images/bwq9e5TPGiu6FZj1xtmqeMYhJwTs3FQtOSDjBWg1.png",
                        "images/lHoEcIQO2nOpcFTPJeLWktWtwqSPNcteQ46NFWlA.png",
                        "images/rCkgzRr6gD7Eozb4hzrZdGRWKbDZmMKEsGWBCjgw.png",
                        "images/PT070XhctXpMgtxLv6liva7IKqZdpvAZCacOt73V.png",
                        "images/hcYqQxwjM2yv6m5BTKSuYQ8jh3Nnk358woGX8y5C.png",
                        "images/Sq4e5UYueEeU3E7yy70isDq0WfKOwgujUHCo2PuD.png",
                    ],
                    [
                        // reservya profile
                        "images/reservyaprofile/1.jpeg",
                        "images/reservyaprofile/2.jpeg",
                        "images/reservyaprofile/3.jpeg",
                        "images/reservyaprofile/4.jpeg",
                        "images/reservyaprofile/5.jpeg",
                        "images/reservyaprofile/6.jpeg",
                        "images/reservyaprofile/7.jpeg",
                        "images/reservyaprofile/8.jpeg",
                        "images/reservyaprofile/9.jpeg",
                        "images/reservyaprofile/10.jpeg",
                        "images/reservyaprofile/11.jpeg",
                        "images/reservyaprofile/12.jpeg",
                        "images/reservyaprofile/13.jpeg",
                        "images/reservyaprofile/14.jpeg",
                    ],
                    [
                        //elmandra_elarabia
                        "images/elmandra_elarabia/1.jpeg",
                        "images/elmandra_elarabia/2.jpeg",
                        "images/elmandra_elarabia/3.jpeg",
                        "images/elmandra_elarabia/4.jpeg",
                        "images/elmandra_elarabia/5.jpeg",
                        "images/elmandra_elarabia/6.jpeg",
                        "images/elmandra_elarabia/7.jpeg",
                        "images/elmandra_elarabia/8.jpeg",
                        "images/elmandra_elarabia/9.jpeg",
                        "images/elmandra_elarabia/10.jpeg",
                        "images/elmandra_elarabia/11.jpeg",
                        "images/elmandra_elarabia/12.jpeg",
                        "images/elmandra_elarabia/13.jpeg",
                    ],
                    [
                        // gym
                        "images/gym/1.jpeg",
                        "images/gym/2.jpeg",
                        "images/gym/3.jpeg",
                        "images/gym/4.jpeg",
                        "images/gym/5.jpeg",
                        "images/gym/6.jpeg",
                        "images/gym/7.jpeg",
                        "images/gym/8.jpeg",
                        "images/gym/9.jpeg",
                        "images/gym/10.jpeg",
                        "images/gym/11.jpeg",
                        "images/gym/12.jpeg",
                    ],
                    [
                        // asleltawfeer
                        "images/asleltawfeer/1.png",
                        "images/asleltawfeer/2.png",
                        "images/asleltawfeer/3.png",
                        "images/asleltawfeer/4.png",
                        "images/asleltawfeer/5.png",
                        "images/asleltawfeer/6.png",
                        "images/asleltawfeer/7.png",
                        "images/asleltawfeer/8.png",
                        "images/asleltawfeer/9.png",
                        "images/asleltawfeer/10.png",
                        "images/asleltawfeer/11.png",
                        "images/asleltawfeer/12.png",
                        "images/asleltawfeer/13.png",
                        "images/asleltawfeer/14.png",
                    ],
                    [
                        // celine
                        "images/celine/1.jpeg",
                        "images/celine/2.jpeg",
                        "images/celine/3.jpeg",
                        "images/celine/4.jpeg",
                        "images/celine/5.jpeg",
                        "images/celine/6.jpeg",
                        "images/celine/7.jpeg",
                        "images/celine/8.jpeg",
                        "images/celine/9.jpeg",
                        "images/celine/10.jpeg",
                        "images/celine/11.jpeg",
                        "images/celine/12.jpeg",
                        "images/celine/13.jpeg",
                        "images/celine/14.jpeg",
                        "images/celine/15.jpeg",
                        "images/celine/16.jpeg",
                        "images/celine/17.jpeg",
                    ],
                    [
                        // msabaat_steel
                        "images/msabaatsteel/1.png",
                        "images/msabaatsteel/2.png",
                        "images/msabaatsteel/3.png",
                        "images/msabaatsteel/4.png",
                        "images/msabaatsteel/5.png",
                        "images/msabaatsteel/6.png",
                        "images/msabaatsteel/7.png",
                        "images/msabaatsteel/8.png",
                        "images/msabaatsteel/9.png",
                        "images/msabaatsteel/10.png",
                        "images/msabaatsteel/11.png",
                        "images/msabaatsteel/12.png",
                    ],
                    [
                        // haddak
                        "images/haddak/1.jpeg",
                        "images/haddak/2.jpeg",
                        "images/haddak/3.jpeg",
                        "images/haddak/4.jpeg",
                        "images/haddak/5.jpeg",
                        "images/haddak/6.jpeg",
                        "images/haddak/7.jpeg",
                        "images/haddak/8.jpeg",
                        "images/haddak/9.jpeg",
                        "images/haddak/10.jpeg",
                        "images/haddak/11.jpeg",
                    ],
                    [
                        // el_jazira
                        "images/eljazira/1.png",
                        "images/eljazira/2.png",
                        "images/eljazira/3.png",
                        "images/eljazira/4.png",
                        "images/eljazira/5.png",
                        "images/eljazira/6.png",
                        "images/eljazira/7.png",
                        "images/eljazira/8.png",
                        "images/eljazira/9.png",
                   ],
                   [
                        //Egypt Tourism   
                        "images/egypttourism/1.jpeg",
                        "images/egypttourism/2.jpeg",
                        "images/egypttourism/3.jpeg",
                        "images/egypttourism/4.jpeg",
                        "images/egypttourism/5.jpeg",
                        "images/egypttourism/6.jpeg",
                        "images/egypttourism/7.jpeg",
                        "images/egypttourism/8.jpeg",
                        "images/egypttourism/9.jpeg",
                        "images/egypttourism/10.jpeg",
                        "images/egypttourism/11.jpeg",
                   ],
                ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Gallery = Gallery::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar,
                    'subtitle' => $subtitle_ar,
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en,
                    'subtitle' => $subtitle_en,
                ]
            ]);
            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $Gallery->file()->create(["url"=>$image]);
        }
    }
}
