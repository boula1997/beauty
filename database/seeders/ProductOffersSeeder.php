<?php

namespace Database\Seeders;

use App\Models\ProductOffer;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class ProductOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
      
        for ($i = 0; $i < 15; $i++) {
            $productOffer = ProductOffer::create([
                'startDate'=>Carbon::now()->addDays(rand(1, 10)),
                'endDate'=>Carbon::now()->addDays(rand(11, 20)),
                'percentage'=>rand(20,40),
                
            ]);
           
          }
    }
}