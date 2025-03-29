<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
            'Nike',
            'Adidas',
            'Zara',
            'H&M',
            'Gucci',
            'Louis Vuitton',
            'Prada',
            'Chanel',
            'Versace',
            'Levi\'s',
        ];
        
        $title_fr = [
            'Nike',
            'Adidas',
            'Zara',
            'H&M',
            'Gucci',
            'Louis Vuitton',
            'Prada',
            'Chanel',
            'Versace',
            'Levi\'s',
        ];
        
        $title_ar = [
            'نايكي',
            'أديداس',
            'زارا',
            'إتش آند إم',
            'غوتشي',
            'لويس فيتون',
            'برادا',
            'شانيل',
            'فيرساتشي',
            'ليفايز',
        ];
        
        $description_en = [
            'High-performance sportswear brand.',
            'Global leader in athletic apparel.',
            'Trendy fashion retailer for all seasons.',
            'Affordable and stylish casual wear.',
            'Luxury brand with Italian craftsmanship.',
            'Iconic French luxury fashion house.',
            'Elegant and high-end fashion.',
            'Timeless luxury brand with French roots.',
            'Bold designs for contemporary fashion lovers.',
            'Classic denim and casual wear brand.',
        ];
        
        $description_fr = [
            'Marque de vêtements de sport haute performance.',
            'Leader mondial des vêtements de sport.',
            'Boutique de mode tendance pour toutes les saisons.',
            'Vêtements décontractés abordables et élégants.',
            'Marque de luxe avec un savoir-faire italien.',
            'Maison de mode française emblématique.',
            'Mode élégante et haut de gamme.',
            'Marque de luxe intemporelle d\'origine française.',
            'Designs audacieux pour les amateurs de mode contemporaine.',
            'Marque classique de denim et de vêtements décontractés.',
        ];
        
        $description_ar = [
            'علامة تجارية للأزياء الرياضية عالية الأداء.',
            'رائد عالمي في الملابس الرياضية.',
            'متجر أزياء عصري لكل المواسم.',
            'ملابس عصرية بأسعار معقولة.',
            'علامة فاخرة بجودة حرفية إيطالية.',
            'دار أزياء فرنسية فاخرة ومميزة.',
            'أزياء أنيقة وراقية.',
            'علامة تجارية فاخرة ذات جذور فرنسية.',
            'تصاميم جريئة لعشاق الموضة المعاصرة.',
            'ماركة كلاسيكية للجينز والملابس الكاجوال.',
        ];
        
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $brand = Brand::create([
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
                'isTop'=>rand(0,1),
                
            ]);
          }
    }
}