<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'en' => [
                'appointment' => ': 24/7',
                'copyright' => 'Copyright reserved by Flower Fiori © 2025',
                'title' => 'Flower Fiori',
                'address' => 'Palm Hills Entrance, Mohandeseen, Grand Nile Tower Hotel - Egypt',
                'description' => "Founded in 1994, Flower Fiori has become one of the leading brands in floral arrangement and supply in Egypt. Over the years, we have collaborated with elite companies such as EFG Hermes and Arab African International Bank. Our influence extends to Egypt's most luxurious hotels, including Four Seasons Hotel, Hilton Heliopolis, and Hilton Grand Nile Tower.",
                'meta_data' => 'Flower Fiori - The Art of Floral Design & Luxury Arrangements',
                'policy' => 'Flower Fiori - Excellence in Floral Art & Supply',
            ],
            
            'fr' => [
                'appointment' => ': 24/7',
                'copyright' => 'Tous droits réservés par Flower Fiori © 2025',
                'title' => 'Flower Fiori',
                'address' => 'Entrée Palm Hills, Mohandeseen, Hôtel Grand Nile Tower - Égypte',
                'description' => "Fondée en 1994, Flower Fiori est devenue l'une des marques leaders dans l'arrangement floral et la fourniture de fleurs en Égypte. Au fil des ans, nous avons collaboré avec des entreprises prestigieuses telles que EFG Hermes et la Banque Arabe Africaine Internationale. Notre influence s'étend aux hôtels les plus luxueux d'Égypte, notamment le Four Seasons Hotel, le Hilton Heliopolis et le Hilton Grand Nile Tower.",
                'meta_data' => 'Flower Fiori - L’Art du Design Floral & Arrangements de Luxe',
                'policy' => 'Flower Fiori - L’Excellence dans l’Art Floral & Fourniture',
            ],
            
            'ar' => [
                'appointment' => ': 24/7',
                'copyright' => 'جميع الحقوق محفوظة لدى Flower Fiori © 2025',
                'title' => 'فلاور فيوري',
                'address' => 'مدخل بالم هيلز، المهندسين، فندق جراند نايل تاور - مصر',
                'description' => "تأسست Flower Fiori في عام 1994 لتصبح واحدة من أبرز العلامات في عالم تنسيق وتوريد الزهور في مصر. على مدار السنوات، عملنا مع نخبة من الشركات الكبرى مثل المجموعة المالية هيرميس والبنك العربي الأفريقي الدولي. وامتد تأثيرنا إلى أهم الفنادق الفاخرة في مصر، بما في ذلك فندق فورسيزونز، فندق هيلتون هليوبوليس، وهيلتون جراند نايل تاور.",
                'meta_data' => 'فلاور فيوري - فن تصميم الزهور والتنسيقات الفاخرة',
                'policy' => 'فلاور فيوري - التميز في فن الزهور وتوريدها',
            ],
            
            'logo' => 'images/logo.png',
            'white_logo' => 'images/logo.png',
            'tab' => 'images/logo.png',
            'breadcrumb'=>'images/TZb0eNyyzriIwXIELETQjBS5qdmYXQfmfegHEmQz.png',
            'image' => 'image',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55275.18948853619!2d31.18964315!3d30.016788299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1695471231297!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
    }
}