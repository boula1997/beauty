<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $title=["dummydata"];
        $status=[1]; 
        $cost=[500]; 

        for ($i = 0; $i < count($title); $i++) {
            $news = News::create([
                'title'=>$title[0],
                'cost'=>$cost[0],
                'status'=>$status[0],
            ]);
        }
    }
}
