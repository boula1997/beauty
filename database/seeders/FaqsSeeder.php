<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $title_en = [
                        "How do you ensure the safety of transported goods?",
                        "What size of loads can your trucks accommodate?",
                        "How can I track my shipment's progress?",
                    ];


        $description_en = [
                                "<p>Safety is our priority. We employ state-of-the-art equipment, trained personnel, and rigorous quality checks to ensure the secure transportation of goods.</p>",
                                "<p>Our fleet is equipped to handle a variety of load sizes. From partial to full truckloads, we tailor our services to accommodate your specific cargo needs.</p>",
                                "<p>We offer real-time tracking solutions, enabling you to monitor your shipment's progress every step of the way. Our team is also available for any updates or queries.</p>",

                            ];

        
        $title_ar = [
                        "كيف يمكنك التأكد من سلامة البضائع المنقولة؟",
                        "ما حجم الأحمال التي يمكن أن تستوعبها شاحناتك؟",
                        "كيف يمكنني متابعة تقدم شحنتي؟",
                    ];



        $description_ar =[
                            "<p>السلامة هي أولويتنا. نحن نستخدم أحدث المعدات والموظفين المدربين ونقوم بإجراء فحوصات صارمة للجودة لضمان النقل الآمن للبضائع.</p>",
                            "<p>أسطولنا مجهز للتعامل مع مجموعة متنوعة من أحجام التحميل. بدءًا من حمولات الشاحنات الجزئية إلى الكاملة، نقوم بتصميم خدماتنا لتلائم احتياجات الشحن المحددة الخاصة بك.</p>",
                            "<p>نحن نقدم حلول تتبع في الوقت الفعلي، مما يتيح لك مراقبة تقدم شحنتك في كل خطوة على الطريق. فريقنا متاح أيضًا لأية تحديثات أو استفسارات.</p>",
                         ];
 
        $image=[
                    null,
                    null,
                    null,
                ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $faq = Faq::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                  
                ],
            ]);
            $faq->file()->create(["url"=>$image[$i]]);
          }
    }
}
