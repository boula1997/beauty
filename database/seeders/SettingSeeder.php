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
                'appointment1' => 'From Saturday to Thursday
                From 11 am to 7 pm',
                'copyright' => '© 2025 - Verde Developments . All rights reserved',
                'title' => 'Verde Developments',
                'address' => 'Building No.235 Second Sector, Fifth Settlement-New Cairo',
                'description' => 'One of the biggest real estate developments companies in the MENA region owned by a group of Arab investors, started more than 12 years ago in the United Arab Emirates, during which it built a strong portfolio in Abu Dhabi and other emirates.',
                'meta_data' => 'Development Company',
            ],
            'ar' => [
                'appointment1' => 'من السبت إلى الخميس من الساعة 11 صباحًا حتى 7 مساءً',
                'copyright' => '© 2025 - فيردي ديفيلوبمنتس. جميع الحقوق محفوظة',
                'title' => 'فيردي ديفيلوبمنتس',
                'address' => 'المبنى رقم 235، القطاع الثاني، التجمع الخامس - القاهرة الجديدة',
                'description' => 'إحدى أكبر شركات التطوير العقاري في منطقة الشرق الأوسط وشمال إفريقيا، مملوكة لمجموعة من المستثمرين العرب، بدأت منذ أكثر من 12 عامًا في الإمارات العربية المتحدة، وخلال تلك الفترة بنت محفظة قوية في أبوظبي والإمارات الأخرى.',
                'meta_data' => 'شركة تطوير عقاري',
            ],
            'logo' => 'images/logo.png',
            'white_logo' => 'images/logo.png',
            'tab' => 'images/logo.png',
            'image' => 'image',
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6908.540976581482!2d31.4565122!3d30.0290969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14582327d346541b%3A0x5958349b3e98235b!2sNew%20Event%20Developments!5e0!3m2!1sen!2seg!4v1739746329581!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ]);
    }
}