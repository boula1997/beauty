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
            "Romantic Red Roses",
            "Elegant White Lilies",
            "Sunshine Sunflower Bouquet",
            "Mixed Spring Flowers",
            "Luxury Orchid Arrangement",
            "Valentine's Special Roses",
            "Pink Peony Delight",
            "Tulip Love Bouquet",
            "Classic Carnation Bunch",
            "Garden Fresh Lavender"
        ];

        $title_ar = [
            "ورود حمراء رومانسية",
            "زنابق بيضاء أنيقة",
            "باقة عباد الشمس المشرقة",
            "زهور الربيع المختلطة",
            "تنسيق أوركيد فاخر",
            "ورود خاصة لعيد الحب",
            "بهجة الفاونيا الوردية",
            "باقة حب التوليب",
            "مجموعة القرنفل الكلاسيكية",
            "لافندر طازج من الحديقة"
        ];

        $title_fr = [
            "Roses rouges romantiques",
            "Lys blancs élégants",
            "Bouquet de tournesols ensoleillés",
            "Fleurs de printemps mélangées",
            "Arrangement luxueux d'orchidées",
            "Roses spéciales Saint-Valentin",
            "Délice de pivoines roses",
            "Bouquet d'amour de tulipes",
            "Botte classique d'œillets",
            "Lavande fraîche du jardin"
        ];

        $description_en = [
            "<p>A bouquet of deep red roses, perfect for expressing love and romance.</p>",
            "<p>Elegant white lilies that symbolize purity and grace, ideal for any occasion.</p>",
            "<p>Bright sunflowers that bring warmth and happiness into any space.</p>",
            "<p>A mix of spring flowers to add freshness and color to your home.</p>",
            "<p>Luxury orchids arranged beautifully for a touch of sophistication.</p>",
            "<p>Specially crafted red roses bouquet for Valentine's Day surprises.</p>",
            "<p>Soft pink peonies for a delicate and charming floral arrangement.</p>",
            "<p>A vibrant tulip bouquet, a symbol of perfect love.</p>",
            "<p>Classic carnations that represent deep admiration and love.</p>",
            "<p>Fresh lavender, known for its calming scent and elegant look.</p>"
        ];

        $description_ar = [
            "<p>باقة من الورود الحمراء العميقة، مثالية للتعبير عن الحب والرومانسية.</p>",
            "<p>زنابق بيضاء أنيقة ترمز إلى النقاء والرقي، مناسبة لجميع المناسبات.</p>",
            "<p>زهور عباد الشمس المشرقة التي تضيف الدفء والسعادة لأي مكان.</p>",
            "<p>خليط من زهور الربيع يضفي لمسة منعشة ومفعمة بالألوان.</p>",
            "<p>تنسيق فاخر من زهور الأوركيد لإضافة لمسة من الأناقة.</p>",
            "<p>باقة ورد حمراء مصممة خصيصًا لمفاجآت عيد الحب.</p>",
            "<p>فاونيا وردية ناعمة لتنسيق زهور رقيق وساحر.</p>",
            "<p>باقة توليب نابضة بالحياة، رمز الحب المثالي.</p>",
            "<p>قرنفل كلاسيكي يعبر عن الإعجاب العميق والحب.</p>",
            "<p>لافندر طازج معروف برائحته الهادئة ومظهره الأنيق.</p>"
        ];

        $description_fr = [
            "<p>Un bouquet de roses rouges profondes, parfait pour exprimer l'amour et la romance.</p>",
            "<p>Des lys blancs élégants qui symbolisent la pureté et la grâce, idéaux pour toute occasion.</p>",
            "<p>Des tournesols lumineux qui apportent chaleur et bonheur à tout espace.</p>",
            "<p>Un mélange de fleurs de printemps pour ajouter fraîcheur et couleur à votre maison.</p>",
            "<p>Des orchidées luxueuses arrangées avec soin pour une touche de sophistication.</p>",
            "<p>Un bouquet de roses rouges spécialement conçu pour la Saint-Valentin.</p>",
            "<p>Des pivoines roses douces pour un arrangement floral délicat et charmant.</p>",
            "<p>Un bouquet de tulipes éclatant, symbole de l'amour parfait.</p>",
            "<p>Des œillets classiques représentant une profonde admiration et amour.</p>",
            "<p>De la lavande fraîche, connue pour son parfum apaisant et son allure élégante.</p>"
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
                'category_id' => rand(1, 10),
                'subcategory_id' => rand(1, 10),
                'rate' => mt_rand(30, 50) / 10, 
                'sku' => 'SKU-' . strtoupper(Str::random(8)),
                'price' => rand(100, 1000), 
                'quantity' => rand(5, 50), 
            ]);

            // $product->file()->create(["url"=>$single_image[$i]]);
            
            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $product->file()->create(["url"=>$image]);
        }
    }
}