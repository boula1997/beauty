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
      

        $image=[
                "images/partners/1.jpg",
                "images/partners/2.png",
                "images/partners/3.jpg",
                "images/partners/3.png",
                "images/partners/4.jpg",
                "images/partners/5.png",
                "images/partners/bg2.jpg",
              
            ];
       
       

        for ($i = 0; $i < count($image); $i++) {
            $Partner = Partner::create([
            ]);
            $Partner->file()->create(["url"=>$image[$i]]);
          }
    }
}