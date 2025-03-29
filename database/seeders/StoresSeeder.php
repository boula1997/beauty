<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
            'Fashion Central',
            'Tech Haven',
            'Beauty Bliss',
            'Home Essentials',
            'Kids Kingdom',
            'Sports Hub',
            'Gadget World',
            'Luxury Living',
            'Book Nook',
            'Healthy Harvest'
        ];
        
        $description_en = [
            'Discover the latest trends in fashion.',
            'Your one-stop shop for technology needs.',
            'Find everything for your beauty regimen.',
            'Top-quality products for your home.',
            'Toys and apparel for kids of all ages.',
            'Gear up for your favorite sports.',
            'Cutting-edge gadgets and accessories.',
            'Indulge in luxury products for your lifestyle.',
            'A curated collection of books for everyone.',
            'Fresh and organic products for a healthy life.'
        ];
        
        $title_fr = [
            'Centre de Mode',
            'Havre Technologique',
            'Bonheur Beauté',
            'Essentiels de Maison',
            'Royaume des Enfants',
            'Centre Sportif',
            'Monde des Gadgets',
            'Vie de Luxe',
            'Coin des Livres',
            'Récolte Saine'
        ];
        
        $description_fr = [
            'Découvrez les dernières tendances en mode.',
            'Votre guichet unique pour les besoins technologiques.',
            'Trouvez tout pour votre routine beauté.',
            'Des produits de qualité supérieure pour votre maison.',
            'Jouets et vêtements pour les enfants de tous âges.',
            'Équipez-vous pour vos sports préférés.',
            'Des gadgets et accessoires à la pointe de la technologie.',
            'Profitez de produits de luxe pour votre style de vie.',
            'Une collection de livres soigneusement sélectionnés pour tous.',
            'Produits frais et biologiques pour une vie saine.'
        ];
        
        $title_ar = [
            'مركز الموضة',
            'ملاذ التقنية',
            'نعيم الجمال',
            'أساسيات المنزل',
            'مملكة الأطفال',
            'مركز الرياضة',
            'عالم الأدوات',
            'حياة الفخامة',
            'زاوية الكتب',
            'حصاد صحي'
        ];
        
        $description_ar = [
            'اكتشف أحدث صيحات الموضة.',
            'وجهتك لجميع احتياجات التكنولوجيا.',
            'كل ما تحتاجه لروتين الجمال الخاص بك.',
            'منتجات عالية الجودة لمنزلك.',
            'ألعاب وملابس للأطفال من جميع الأعمار.',
            'تجهيز نفسك لرياضتك المفضلة.',
            'أحدث الأدوات والاكسسوارات.',
            'استمتع بمنتجات فاخرة تناسب أسلوب حياتك.',
            'مجموعة مختارة بعناية من الكتب للجميع.',
            'منتجات طازجة وعضوية لحياة صحية.'
        ];
        
  
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $store = Store::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                  
                ],
                'fr' => [
                    'title' => $title_fr[$i],
                    'description' => $description_fr[$i],
                  
                ],
                'email' => 'store' . ($i + 1) . '@gmail.com', 
                'banner' => 'store' . ($i + 1) . '_banner', 
                'deliveryCharge' => rand(5, 20), 
                'phone' => '+9665' . str_pad($i + 1, 8, '0', STR_PAD_LEFT),

            ]);

            $store->categories()->attach(rand(1,5));
            $store->categories()->attach(rand(6,10));

            $store->brands()->attach(rand(1,5));
            $store->brands()->attach(rand(6,10));
          }
    }
}