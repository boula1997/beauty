<?php

namespace Database\Seeders;

use App\Http\Requests\Dashboard\VideoRequest;
use App\Models\Admin;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            MessagesSeeder::class,
            NewslettersSeeder::class,
            CountersSeeder::class,
            ContactsSeeder::class,
            GalleriesSeeder::class,
            PagesSeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            ProcessesSeeder::class,
            SettingSeeder::class,
            ServiceSeeder::class,
            PartnerSeeder::class,
            TeamSeeder::class,
            TestimonialsSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ProjectsSeeder::class,
            UsersSeeder::class,
            VideosSeeder::class,
            NewssSeeder::class,
            GalleriesSeeder::class,


        ]);

    }
}