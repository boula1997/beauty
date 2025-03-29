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
                'copyright' => 'Copyright reserved by Aloo © 2025',
                'title' => 'Aloo',
                'address' => 'Al-Olayah - Riyadh - Saudi Arabia',
                'description' => "Aloo is your ultimate fashion destination, offering a unique blend of trendy designs, premium quality, and sustainable clothing. Redefining style, Aloo empowers you to express yourself with confidence and elegance.",
                'meta_data' => 'Aloo - Redefining Fashion and Elegance',
                'policy' => 'Aloo - Redefining Fashion and Elegance',
                
            ],
            'fr' => [
                'appointment' => ': 24/7',
                'copyright' => 'Tous droits réservés par Aloo © 2025',
                'title' => 'Aloo',
                'address' => 'Riyad, Arabie Saoudite',
                'description' => "Aloo est votre destination ultime pour la mode, offrant un mélange unique de designs tendance, de qualité premium et de vêtements durables. En redéfinissant le style, Aloo vous permet de vous exprimer avec confiance et élégance.",
                'meta_data' => 'Aloo - Redéfinir la mode et l’élégance',
                'policy' => 'Aloo - Redéfinir la mode et l’élégance',
                
            ],
            'ar' => [
                'appointment' => ': 24/7',
                'copyright' => 'جميع الحقوق محفوظة لدي الو © 2025 ',
                'title' => 'الو',
                'address' => 'الرياض، السعودية',            
                'description' => "شركة ألو هي وجهتك المثالية للموضة، حيث تقدم مزيجًا فريدًا من التصاميم العصرية والجودة الممتازة والملابس المستدامة. تعيد تعريف الأناقة لتساعدك على التعبير عن نفسك بثقة ورقي.",
                'meta_data' => 'ألو - إعادة تعريف الموضة والأناقة',
                'policy' => 'ألو - إعادة تعريف الموضة والأناقة',
                
            ],
            'logo' => 'images/WGG9CT6GCMDLOPvhaS9VDyKLHWbzICgmV5ShcUTs.png',
            'white_logo' => 'images/WGG9CT6GCMDLOPvhaS9VDyKLHWbzICgmV5ShcUTs.png',
            'tab' => 'images/WGG9CT6GCMDLOPvhaS9VDyKLHWbzICgmV5ShcUTs.png',
            'breadcrumb'=>'images/TZb0eNyyzriIwXIELETQjBS5qdmYXQfmfegHEmQz.png',
            'image' => 'image',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55275.18948853619!2d31.18964315!3d30.016788299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458469235579697%3A0x4e91d61f9878fc52!2sGiza%2C%20El%20Omraniya%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1695471231297!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
        ]);
    }
}