<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
                     "Gerges Makram",
                     "Boula Nessim",
                     "Ibrahim Samy",
                     "Kyrillos Edward",
                     "Tadrous Emil",
                     "Melad Youssef",
                     "Zeiad Mohamed",
                     "Ahmed Elseily",
                    ];
        $subtitle_en = [
                        "Manager",
                        "Project Manager",
                        "Software Engineer",
                        "Software Engineer",
                        "Software Engineer",
                        "Web Developer",
                        "Web Developer",
                        "Web Designer",

                    ];
        $description_en = [null,null,null,null,null,null,null,null];

        $title_ar = [
                     "جرجس مكرم",
                     "بولا نسيم",
                     "ابراهيم سامى",
                     "كيرلس ادوارد",
                     "تادرس اميل",
                     "ميلاد يوسف",
                     "زياد محمد",
                     //  "احمد السيلي",
                    ];

        $subtitle_ar =[
                       "مدير",
                       "مهندس برمجيات",
                       "مهندس برمجيات",
                        "مصمم ويب ",
                        "مطور ويب",
                        "مطور ويب",
                        "مطور ويب",
                       // "مطور ويب",
                    ];
        $description_ar =  [null,null,null,null,null,null,null,null];

        $facebooks=[
            "https://www.facebook.com",
            "https://www.facebook.com",
            "https://www.facebook.com",
            "https://www.facebook.com",
            "https://www.facebook.com",
            "https://www.facebook.com",
            "https://www.facebook.com",
           // "https://www.facebook.com",
        ];
        $twitters=[
            "https://www.twitter.com",
            "https://www.twitter.com",
            "https://www.twitter.com",
            "https://www.twitter.com",
            "https://www.twitter.com",
            "https://www.twitter.com",
            "https://www.twitter.com",
            // "https://www.twitter.com",

        ];
        $instagrams=[
            "https://www.instagram.com",
            "https://www.instagram.com",
            "https://www.instagram.com",
            "https://www.instagram.com",
            "https://www.instagram.com",
            "https://www.instagram.com",
            "https://www.instagram.com",
            // "https://www.instagram.com",

        ];
        $linkedins=[
            "https://www.linkedin.com",
            "https://www.linkedin.com",
            "https://www.linkedin.com",
            "https://www.linkedin.com",
            "https://www.linkedin.com",
            "https://www.linkedin.com",
            "https://www.linkedin.com",
            // "https://www.linkedin.com",

        ];

        $image=[
            "images/zlqIgyZxaZJCmqfSvsxqkTIFsou1vItih8tUaqXi.jpg",
            "images/YE92B4LXiM6QhFcQbr5YKECGaMU5k8NokXve9o1m.jpg",
                "images/YQXLPLiQgi8H1E9YE77J3lwUX0qSOYXkHMP192Nz.png",
                "images/pekmLKsEWdfVwDSwbG0sSIZARXfO8GavZPaoOF1D.jpg",
                "images/tAgfJG0vAJHhQsCii9FR441z6tGs9fyGKj92MUzy.jpg",
                "images/melad.jpeg",
                "images/zaid_sayed.jpeg",
               // "images/zlqIgyZxaZJCmqfSvsxqkTIFsou1vItih8tUaqXi.jpg",
            ];



        for ($i = 0; $i < count($title_ar); $i++) {
            $Team = Team::create([
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
                "facebook"=>$facebooks[$i],
                "twitter"=>$twitters[$i],
                "instagram"=>$instagrams[$i],
                "linkedin"=>$linkedins[$i],
            ]);
            $Team->file()->create(["url"=>$image[$i]]);
          }
    }
}
