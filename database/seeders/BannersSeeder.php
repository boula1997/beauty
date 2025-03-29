<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image=[
            "images/5ab9d872514b6c0fe6ec60f298f586d5.jpeg",
            "images/5ab9d872514b6c0fe6ec60f298f586d5.jpeg",
            "images/5ab9d872514b6c0fe6ec60f298f586d5.jpeg",
        ];


        for ($i = 0; $i < count($image); $i++) {
            $banner = Banner::create([
                'store_id'=>rand(1,10),
                'category_id'=>rand(1,10),
            ]);

                $banner->file()->create(["url"=>$image[$i]]);
          }
    }
}
