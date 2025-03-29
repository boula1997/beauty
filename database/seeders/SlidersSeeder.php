<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image=[
            "images/slider1.png",
            "images/slider2.png",
     
        ];
        

        for ($i = 0; $i < count($image); $i++) {
            $slider = Slider::create([
            ]);
            
                $slider->file()->create(["url"=>$image[$i]]);
          }
    }
}
