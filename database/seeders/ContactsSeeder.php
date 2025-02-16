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
       
        $icon=[ "fab fa-facebook-f",
                "fab fa-twitter",
                "fab fa-instagram",
                "fab fa-linkedin-in",
                "fab fa-youtube",
                "fas fa-phone",
                "fab fa-whatsapp"];

        $contacts=["https://www.facebook.com/neweventdev/",
                   "https://twitter.com/NewEventDevelo1",
                   "https://www.instagram.com/neweventdevelopment/",
                   "https://www.linkedin.com/company/new-event-developments/",
                   "https://www.youtube.com/channel/UCpnZ3WgxD-F2CiP8tcsWH0g",
                   "16343",
                   "01099248993"];

        $type=['social','social','social','social','social','phone','whatsapp'];
      

        for ($i = 0; $i < count($contacts); $i++) {
            $contact = Contact::create([
               'icon'=>$icon[$i],
                'contact'=>$contacts[$i],
                'type'=>$type[$i],
            ]);
        }
    }
}