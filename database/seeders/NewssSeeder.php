<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewssSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en= [
            "Press conference Launch Qamari Project",
            "Cityscape News",
            "Launching Qamari Project",
            "Why Invest in Commercial Units in New Administrative Capital Malls?",
            "Real Estate Companies in Egypt: Guide to Profitable Investments",
                    ];
        
        $subtitle_en= [
            null,
            null,
            null,
            null,
            null,
                     ];
        
        $description_en= [
    
            null,
            null,
            null,
            "<p>Choosing the best time and properties for real estate investment can be overwhelming and challenging for inexperienced people. This can make them unsure and hesitant. However, many real estate companies in Egypt offer great investment opportunities and help people find suitable properties that fit their budgets and needs.

            New Events is among the best Egyptian development real estate companies offering various investment options. If you need help figuring out where to start with your real estate investments, our experts can help you get on the right track.</p>",
            "<p>The real estate sector in Egypt is experiencing a profound transformation, with development real estate companies playing a pivotal role in shaping this evolution. They have a significant role in progress, infrastructure, and economic growth. Their influence extends to many Egyptian cities, especially the new cities of Egypt, with a prime focus on the colossal endeavor, the New Administrative Capital, the most significant project of this decade.

            The Egyptian government's decision to establish new cities is motivated by several key objectives. These goals encompass the redistribution of the population away from the Nile Valley, the expansion of urban development into desert and remote regions, the creation of modern attraction areas outside of existing cities and villages, and the crucial task of curbing urban sprawl on agricultural lands.
            
            This initiative promotes sustainable development and generates new job opportunities, stimulating economic growth. With the help of real estate companies in Egypt, an integrated infrastructure is built in these cities, including commercial and residential facilities, malls, and many other projects.
            
            As we explore further, we'll delve into the remarkable journey of New Event Developments, one of the key players in this thriving landscape, and discover how we contribute to developing these new cities, especially in the New Administrative Capital.</p>",
            ];

            $title_ar = [
                "المؤتمر الصحفي لإطلاق مشروع قماري",
                "أخبار سيتي سكيب",
                "إطلاق مشروع قماري",
                "لماذا تستثمر في الوحدات التجارية في مولات العاصمة الإدارية الجديدة؟",
                "شركات التطوير العقاري في مصر: دليل للاستثمارات المربحة",
            ];
            
            $subtitle_ar = [
                null,
                null,
                null,
                null,
                null,
            ];
            
            $description_ar = [
                null,
                null,
                null,
                "<p>يمكن أن يكون اختيار الوقت المناسب والعقارات المناسبة للاستثمار العقاري أمرًا مربكًا وصعبًا للأشخاص غير ذوي الخبرة، مما يجعلهم مترددين وغير متأكدين. ومع ذلك، تقدم العديد من شركات التطوير العقاري في مصر فرص استثمارية رائعة وتساعد الأشخاص في العثور على العقارات المناسبة التي تتناسب مع ميزانياتهم واحتياجاتهم.
            
                تعد نيو إيفنتس واحدة من أفضل شركات التطوير العقاري في مصر، حيث توفر خيارات استثمارية متنوعة. إذا كنت بحاجة إلى مساعدة في معرفة من أين تبدأ استثماراتك العقارية، يمكن لخبرائنا مساعدتك في اتخاذ المسار الصحيح.</p>",
            
                "<p>يشهد القطاع العقاري في مصر تحولًا كبيرًا، حيث تلعب شركات التطوير العقاري دورًا محوريًا في تشكيل هذا التطور. فهي تساهم بشكل كبير في التقدم والبنية التحتية والنمو الاقتصادي. ويمتد تأثيرها إلى العديد من المدن المصرية، وخاصة المدن الجديدة، مع تركيز رئيسي على المشروع الضخم، العاصمة الإدارية الجديدة، وهو أكبر مشروع في هذا العقد.
            
                جاء قرار الحكومة المصرية بإنشاء مدن جديدة مدفوعًا بعدة أهداف رئيسية، منها إعادة توزيع السكان بعيدًا عن وادي النيل، وتوسيع التنمية الحضرية إلى المناطق الصحراوية والنائية، وإنشاء مناطق جذب حديثة خارج المدن والقرى القائمة، وكذلك الحد من الزحف العمراني على الأراضي الزراعية.
            
                تعزز هذه المبادرة التنمية المستدامة وتخلق فرص عمل جديدة، مما يحفز النمو الاقتصادي. وبمساعدة شركات التطوير العقاري في مصر، يتم بناء بنية تحتية متكاملة في هذه المدن، تشمل المرافق التجارية والسكنية، والمولات، والعديد من المشاريع الأخرى.
            
                بينما نستكشف المزيد، سنلقي نظرة على المسيرة المتميزة لشركة نيو إيفنت ديفيلوبمنتس، إحدى اللاعبين الرئيسيين في هذا المجال المزدهر، ونتعرف على كيفية مساهمتنا في تطوير هذه المدن الجديدة، وخاصة العاصمة الإدارية الجديدة.</p>",
            ];

            
                $image=[
                "images/news/1.jpg",
                "images/news/2.jpg",
                "images/news/3.jpg",
                "images/news/4.jpg",
                "images/news/5.jpg",
              
                
            ];
        for ($i = 0; $i < count($title_en); $i++) {
            $news = News::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                   
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                   
                ],
            ]);
            $news->file()->create(["url"=>$image[$i]]);
            
        }
    }
}