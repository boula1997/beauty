<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $icon=[ 
                "ri-facebook-fill",
                "ri-twitter-fill",
                "ri-instagram-fill",
                "ri-pinterest-fill",
                "ri-phone-fill",
                "ri-mail-fill",

            ];

        $contacts=[
                    "https://facebook.com/",
                    "https://twitter.com/",
                    "https://instagram.com/",
                    "https://pinterest.com/",
                    "+96658787952",
                    "aloodot@gmail.com",
                    ];

        $type=['social','social','social','social','phone','email'];
      

        for ($i = 0; $i < count($contacts); $i++) {
            $contact = Contact::create([
               'icon'=>$icon[$i],
                'contact'=>$contacts[$i],
                'type'=>$type[$i],
            ]);
        }
    }
}
