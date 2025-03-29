<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = [
            'Men\'s Wear',
            'Women\'s Wear',
            'Kids\' Wear',
            'Sportswear',
            'Formal Wear',
            'Casual Wear',
            'Traditional Clothing',
            'Accessories',
            'Shoes',
            'Winter Collection'
        ];
        
        $title_fr = [
            'Vêtements pour hommes',
            'Vêtements pour femmes',
            'Vêtements pour enfants',
            'Vêtements de sport',
            'Tenue formelle',
            'Tenue décontractée',
            'Vêtements traditionnels',
            'Accessoires',
            'Chaussures',
            'Collection hiver'
        ];
        
        $title_ar = [
            'ملابس الرجال',
            'ملابس النساء',
            'ملابس الأطفال',
            'ملابس رياضية',
            'ملابس رسمية',
            'ملابس كاجوال',
            'ملابس تقليدية',
            'إكسسوارات',
            'أحذية',
            'مجموعة الشتاء'
        ];
        
                    
        for ($i = 0; $i < count($title_ar); $i++) {
           
            $category = Category::create([
                'ar' => [
                    'title' => $title_ar[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
                'fr' => [
                    'title' => $title_fr[$i],
                ],
            ]);
            // $category->file()->create(["url"=>$images[$i]]);
        }
    }
}