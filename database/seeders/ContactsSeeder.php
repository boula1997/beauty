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
                "fab fa-linkedin-in",
                "fab fa-instagram",
                "fas fa-mail-bulk",
                "fas fa-phone",
                "fab fa-whatsapp"];

        $contacts=["https://www.facebook.com/YousabTech?mibextid=ZbWKwL",
                   "www.linkedin.com/in/yousab-tech-3707b428b",
                   "https://www.instagram.com",
                   "yousabtech@gmail.com",
                   "01126785910",
                   "01208050298"];

        $type=['social','social','social','email','phone','whatsapp'];
      

        for ($i = 0; $i < count($contacts); $i++) {
            $contact = Contact::create([
               'icon'=>$icon[$i],
                'contact'=>$contacts[$i],
                'type'=>$type[$i],
            ]);
        }
    }
}
