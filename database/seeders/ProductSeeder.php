<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $title_en = [
            "Men's Classic Shirt",
            "Women's Casual Dress",
            "Men's Sports Jacket",
            "Women's Formal Blouse",
            "Unisex Hoodie",
            "Children's T-shirt",
            "Men's Slim-fit Jeans",
            "Women's Maxi Skirt",
            "Men's Leather Belt",
            "Women's Winter Coat",
        ];
        
        $title_ar = [
            "قميص كلاسيكي للرجال",
            "فستان كاجوال للنساء",
            "جاكيت رياضي للرجال",
            "بلوزة رسمية للنساء",
            "هودي للجنسين",
            "تيشيرت للأطفال",
            "جينز ضيق للرجال",
            "تنورة ماكسي للنساء",
            "حزام جلدي للرجال",
            "معطف شتوي للنساء",
        ];
        
        $title_fr = [
            "Chemise classique pour homme",
            "Robe décontractée pour femme",
            "Veste de sport pour homme",
            "Blouse formelle pour femme",
            "Sweat à capuche unisexe",
            "T-shirt pour enfants",
            "Jean slim pour homme",
            "Jupe longue pour femme",
            "Ceinture en cuir pour homme",
            "Manteau d'hiver pour femme",
        ];
        
        $description_en = [
            "<p>A stylish and comfortable shirt, perfect for formal or casual occasions.</p>",
            "<p>A casual and elegant dress, ideal for day outings or relaxed evenings.</p>",
            "<p>A lightweight sports jacket, combining comfort and style for men.</p>",
            "<p>A formal blouse suitable for professional settings or formal gatherings.</p>",
            "<p>A cozy unisex hoodie, perfect for chilly days and casual wear.</p>",
            "<p>A fun and colorful T-shirt designed for active kids.</p>",
            "<p>Stylish slim-fit jeans made with durable, high-quality fabric.</p>",
            "<p>A flowy maxi skirt that is both chic and comfortable for all-day wear.</p>",
            "<p>Classic leather belt, a must-have accessory for any wardrobe.</p>",
            "<p>A warm and fashionable coat designed to keep you stylish in winter.</p>",
        ];
        
        $description_ar = [
            "<p>قميص أنيق ومريح، مثالي للمناسبات الرسمية أو الكاجوال.</p>",
            "<p>فستان كاجوال أنيق، مثالي للخروجات النهارية أو السهرات المريحة.</p>",
            "<p>جاكيت رياضي خفيف الوزن، يجمع بين الراحة والأناقة للرجال.</p>",
            "<p>بلوزة رسمية تناسب أماكن العمل أو الاجتماعات الرسمية.</p>",
            "<p>هودي مريح للجنسين، مثالي للأيام الباردة والملابس الكاجوال.</p>",
            "<p>تيشيرت ممتع وملون مصمم للأطفال النشطين.</p>",
            "<p>جينز ضيق أنيق مصنوع من قماش عالي الجودة ومتين.</p>",
            "<p>تنورة ماكسي انسيابية تجمع بين الأناقة والراحة لارتداء طوال اليوم.</p>",
            "<p>حزام جلدي كلاسيكي، قطعة أساسية لأي خزانة ملابس.</p>",
            "<p>معطف دافئ وأنيق مصمم ليحافظ على أناقتك في الشتاء.</p>",
        ];
        
        $description_fr = [
            "<p>Une chemise élégante et confortable, parfaite pour les occasions formelles ou décontractées.</p>",
            "<p>Une robe décontractée et élégante, idéale pour les sorties en journée ou les soirées détendues.</p>",
            "<p>Une veste de sport légère, combinant confort et style pour homme.</p>",
            "<p>Une blouse formelle adaptée aux environnements professionnels ou aux réunions formelles.</p>",
            "<p>Un sweat à capuche unisexe confortable, parfait pour les journées fraîches et les tenues décontractées.</p>",
            "<p>Un T-shirt amusant et coloré conçu pour les enfants actifs.</p>",
            "<p>Jean slim élégant fabriqué en tissu durable et de haute qualité.</p>",
            "<p>Une jupe longue fluide à la fois chic et confortable pour une tenue quotidienne.</p>",
            "<p>Ceinture en cuir classique, un accessoire indispensable pour toute garde-robe.</p>",
            "<p>Un manteau chaud et à la mode conçu pour rester stylé en hiver.</p>",
        ];
 

        $images = [
                    //    [ "images/7CzapEFYzk8hZLNXPXyHoY1KPb3h2MEQVndJ9I7T.jpg","images/3lu5xyBjdXLPmH7i5BrSLurgPnO3eaaFJ4JzqiFS.jpg"],
                    //    [ "images/3lu5xyBjdXLPmH7i5BrSLurgPnO3eaaFJ4JzqiFS.jpg"],
                    //    [ "images/QGoTeufhCJLyaypQmH2XfoLmFc76mRVOasKh5ThK.jpg"],
                    //    [ "images/D0cYjhqSZxNlkoxaIEpYd8oYaBDNfaoI15lO0noq.jpg"],
                       
                  ];

        $single_image = [
                            // "images/demo.png",
                            // "images/demo.png",
                            // "images/demo.png",
                        ];
                
                  


     
                
        
        for ($i = 0; $i < count($title_ar); $i++) {

            $product = Product::create([
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
                'category_id'=>rand(1,10),
                'subcategory_id'=>rand(1,10),
                'brand_id'=>rand(1,10),
                'store_id'=>rand(1,10),
                'weight'=>rand(50,150),
                'rate'=>mt_rand(30, 50) / 10,
                'sku' => 'SKU-' . strtoupper(Str::random(8)),
                'productOffer_id'=>rand(1,15),
            ]);

            // $product->file()->create(["url"=>$single_image[$i]]);
            
            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $product->file()->create(["url"=>$image]);
        }
    }
}