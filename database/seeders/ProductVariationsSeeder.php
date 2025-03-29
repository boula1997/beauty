<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use App\Models\ProductVariation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
      
        for ($i = 0; $i < 30; $i++) {
            $productVariation = ProductVariation::create([
                'product_id'=>rand(1,10),
                'color_id'=>rand(1,10),
                'size_id'=>rand(1,10),
                'price'=>rand(100,500),
                'quantity'=>rand(10,200),
            ]);
           
          }
    }
}
