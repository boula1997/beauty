<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $amount=[300];
        $project=[1];
      

        for ($i = 0; $i < count($amount); $i++) {
            $fee = Fee::create([
                 'amount'=>$amount[0],

                 'project_id'=>$project[0],
                
            ]);
        }
    }
}
