<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ChooseUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChooseUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles_en = [
            'Elegant & Creative Designs',
            'Seamless Planning',
            'Personalized Touch',
            'Stress-Free Execution',
            'Cherished Memories',
        ];

        $titles_ar = [
            'تصاميم أنيقة ومبتكرة',
            'تخطيط سلس',
            'لمسة شخصية',
            'تنفيذ بدون توتر',
            'ذكريات خالدة',
        ];

        $titles_fr = [
            'Des designs élégants et créatifs',
            'Planification sans faille',
            'Une touche personnalisée',
            'Exécution sans stress',
            'Souvenirs inoubliables',
        ];

        $descriptions_en = [
            'Stunning décor & floral arrangements tailored to your style.',
            'Every detail handled with precision for a flawless experience.',
            'Your vision, our expertise—crafted just for you.',
            'Relax & enjoy while we bring your event to life.',
            'With Fiori Flower, every moment becomes a cherished memory!',
        ];

        $descriptions_ar = [
            'ديكورات مذهلة وترتيبات زهور مصممة على ذوقك.',
            'كل التفاصيل يتم التعامل معها بدقة للحصول على تجربة مثالية.',
            'رؤيتك وخبرتنا - مصممة خصيصًا لك.',
            'استرخِ واستمتع بينما نحول رؤيتك إلى واقع.',
            'مع فيوري فلاور، كل لحظة تصبح ذكرى لا تُنسى!',
        ];

        $descriptions_fr = [
            'Une décoration et des arrangements floraux époustouflants adaptés à votre style.',
            'Chaque détail est géré avec précision pour une expérience parfaite.',
            'Votre vision, notre expertise – conçue juste pour vous.',
            'Détendez-vous pendant que nous donnons vie à votre événement.',
            'Avec Fiori Flower, chaque moment devient un souvenir précieux !',
        ];

        $emojis = [
            '🎨',
            '🗂️',
            '💡',
            '🧘‍♀️',
            '💐',
        ];

        for ($i = 0; $i < count($titles_en); $i++) {
            ChooseUs::create([
                'emoji' => $emojis[$i],
                'ar' => [
                    'title' => $titles_ar[$i],
                    'description' => $descriptions_ar[$i],
                ],
                'en' => [
                    'title' => $titles_en[$i],
                    'description' => $descriptions_en[$i],
                ],
                'fr' => [
                    'title' => $titles_fr[$i],
                    'description' => $descriptions_fr[$i],
                ],
            ]);
        }
    }
}