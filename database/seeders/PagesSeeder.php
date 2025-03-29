<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // English Data
        $title_en = [
                        "ABOUT WORLD PT SUPERSTARS",
                        "Find a job",
                        "Courses",
                        "JOB OPPORTUNITIES",
                        null,
                        "World Personal Trainer Superstar Gym Policy",
                    ];

        $subtitle_en = [
                            null,
                            null,
                            null,
                            null,
                            null,
                            null,
                          
                        ];

        $description_en = [
                           "<p>World personal trainers superstars are personal training Specialists. Recruiting professionals of dedicated dynamic as personal trainer, sports therapy, swim coach, sports massage, or any coach specific in fitness We take care of marketing personal training sales techniques and technology. We provide the complete Personal Training Management solution for both Personal Trainers and Health Clubs. Elite trainers are most experienced and qualified staff, delivering first class service in a professional and friendly environment.</p>",
                           "<p>Visit our Careers page on the World PT Superstars website to view current job openings and submit your application. We welcome candidates who are passionate about health, fitness, and creating a positive impact on others. At World PT Superstars, we believe that a strong and dedicated team is the foundation of our success. Join us in inspiring and empowering individuals to achieve their fitness goals and lead healthier lives. Your journey towards a rewarding career starts here. Apply today and become a valuable member of our fitness community!</p>",
                           "<p>Visit our Courses page on the World PT Superstars website to discover detailed course descriptions, schedules, and enrollment information. Whether you're starting a new career in fitness or seeking to expand your knowledge, World PT Superstars is your partner in achieving excellence in health and wellness education. Embark on a transformative learning journey with us, where each course is a step toward a healthier, more knowledgeable you. Your future in fitness education begins at World PT Superstars. Enroll today and unlock a world of possibilities!</p>",
                           "<p>INTERNATIONAL OPPORTUNITIES WHERE YOU KEEP ALL THE PROFIT PLUS YOU GET ALL THE HELP. There are a big demand opportunities for Personal trainers in Dubai You could earn £80K plus Tax Free. If you would like to apply to join our Team of Personal Trainers, send your CV with covering letter and your photo to our Recruitment Department.</p>",
                            "<p>Are you looking for something more advanced and innovative that can help you in managing your fitness club or Spa hotels in an innovative easy way and for free? Yes... you have come to the right place at World personal Trainers superstars. We have a team of professional developers with expertise in developing the most advanced and latest health club management. Our Personal Training Management Company operates at zero-cost, offering a service to gyms clubs & Spa hotels. Our trainers offering a free first session to all clients. Serving you as a gym owner, members of the gym and your clients in the best possible manner. The people recruiting for your gym or Spa hotel, are personal trainers and know exactly what the clients are looking for. For an initial consultation to discuss our Personal Training Solutions in more detail please contact us.</p>",
                            "<p>1. Membership
                            Eligibility: Membership is open to individuals aged 18 and above. Minors aged 16-17 may join with parental consent.
                            Membership Types: We offer various membership plans including monthly, quarterly, and annual subscriptions.
                            Cancellation and Refunds: Memberships can be canceled at any time with a 30-day notice. Refunds are provided for unused months on annual memberships only.
                            2. Gym Usage
                            Hours of Operation: The gym is open from 5:00 AM to 11:00 PM on weekdays and 6:00 AM to 10:00 PM on weekends.
                            Access: Members must use their membership card to gain access. Sharing cards is strictly prohibited.
                            Attire: Appropriate workout attire, including closed-toe athletic shoes, is required at all times.
                            3. Personal Training
                            Booking: Personal training sessions must be booked in advance through our online portal or at the front desk.
                            Cancellations: Cancellations or rescheduling must be made at least 24 hours in advance to avoid a cancellation fee.
                            Conduct: Trainers and clients are expected to maintain professionalism and respect during sessions.
                            4. Equipment and Facility Usage
                            Care of Equipment: Members are required to use equipment properly and return it to its designated place after use.
                            Cleanliness: Wipe down equipment after use with provided cleaning supplies. Dispose of trash in designated bins.
                            Damage: Any damage to equipment or facilities caused by a member must be reported immediately. The member may be held responsible for repair costs.
                            5. Health and Safety
                            Health: Members should consult a physician before beginning any new exercise program. Notify staff of any medical conditions or injuries.
                            Emergency Procedures: In case of an emergency, follow staff instructions and use emergency exits. First aid kits and AEDs are available on-site.
                            Prohibited Items: No smoking, alcohol, or illegal substances are allowed on the premises.
                            6. Code of Conduct
                            Respect: Treat staff and fellow members with respect. Harassment or discrimination of any kind will not be tolerated.
                            Noise Levels: Use headphones for personal music. Avoid loud or disruptive behavior.
                            Lost and Found: The gym is not responsible for lost or stolen items. Please use provided lockers and report any lost items to the front desk.
                            7. Amendments
                            Policy Changes: World Personal Trainer Superstar reserves the right to modify these policies at any time. Members will be notified of any changes.
                            8. Contact Information
                            For any inquiries or assistance, please contact us at:
                            Phone: 01289187870
                            Email: admin@worlssuperstar.com
                            Address: Cairo Egypt
                            This policy ensures a safe, respectful, and efficient environment for all members and staff at World Personal Trainer Superstar. Adjust and customize the policy as necessary to fit the specific needs and regulations of your gym.</p>",
                        ];


        // Arabic Data
        $title_ar = [
                        "حول نجوم العالم",
                        "البحث عن عمل",
                        "الدورات",
                        "فرص عمل",
                        null,
                        "سياسة نادي وورلد بيرسونال ترينر سوبرستار",

                    ];

    
            $subtitle_ar = [
                           null,
                           null,
                           null,
                           null,
                           null,
                           null,
                          
                            ];
    
            $description_ar = [
                              "<p>نجوم المدربين الشخصيين في العالم هم متخصصون في التدريب الشخصي. توظيف محترفين ديناميكيين متخصصين كمدرب شخصي، أو علاج رياضي، أو مدرب سباحة، أو تدليك رياضي، أو أي مدرب خاص باللياقة البدنية. نحن نهتم بتسويق تقنيات وتقنيات مبيعات التدريب الشخصي. نحن نقدم الحل الكامل لإدارة التدريب الشخصي لكل من المدربين الشخصيين والنوادي الصحية. المدربون النخبة هم الموظفون الأكثر خبرة ومؤهلين، ويقدمون خدمة من الدرجة الأولى في بيئة احترافية وودودة.</p>",
                              "<p>قم بزيارة صفحة الوظائف الخاصة بنا على موقع نجوم العالم لعرض الوظائف الشاغرة الحالية وتقديم طلبك. نرحب بالمرشحين المتحمسين للصحة واللياقة البدنية وإحداث تأثير إيجابي على الآخرين.  في نجوم العالم، نؤمن بأن الفريق القوي والمتفاني هو أساس نجاحنا. انضم إلينا في إلهام وتمكين الأفراد لتحقيق أهداف اللياقة البدنية الخاصة بهم وعيش حياة أكثر صحة. رحلتك نحو مهنة مجزية تبدأ هنا. تقدم بطلبك اليوم وكن عضوًا قيمًا في مجتمع اللياقة البدنية لدينا!</p>",
                              "<p>قم بزيارة صفحة الدورات التدريبية الخاصة بنا على موقع نجوم العالم لاكتشاف الأوصاف التفصيلية للدورات والجداول الزمنية ومعلومات التسجيل. سواء كنت تبدأ مهنة جديدة في مجال اللياقة البدنية أو تسعى إلى توسيع معرفتك، فإن نجوم العالم هي شريكك في تحقيق التميز في تعليم الصحة والعافية. انطلق معنا في رحلة تعليمية تحويلية، حيث تمثل كل دورة خطوة نحو التمتع بصحة أفضل وأكثر معرفة. مستقبلك في تعليم اللياقة البدنية يبدأ في نجوم العالم. سجل اليوم وافتح عالمًا من الإمكانيات!</p>",
                              "<p>فرص دولية حيث يمكنك الاحتفاظ بجميع الأرباح بالإضافة إلى حصولك على كل المساعدة. هناك فرص كبيرة للطلب على المدربين الشخصيين في دبي، حيث يمكنك كسب 80 ألف جنيه إسترليني بالإضافة إلى الإعفاء من الضرائب. إذا كنت ترغب في التقدم للانضمام إلى فريق المدربين الشخصيين لدينا، فأرسل سيرتك الذاتية مع خطاب تقديمي وصورتك إلى قسم التوظيف لدينا.</p>",
                              "<p>هل تبحث عن شيء أكثر تقدمًا وابتكارًا يمكنه مساعدتك في إدارة نادي اللياقة البدنية أو فنادق السبا الخاصة بك بطريقة مبتكرة وسهلة ومجانية؟ نعم... لقد وصلت إلى المكان الصحيح في نجوم العالم. لدينا فريق من المطورين المحترفين ذوي الخبرة في تطوير أحدث وأحدث إدارة الأندية الصحية. تعمل شركة إدارة التدريب الشخصي الخاصة بنا بدون تكلفة، وتقدم خدمة لنوادي الصالات الرياضية وفنادق السبا. يقدم المدربون لدينا جلسة أولى مجانية لجميع العملاء. خدمتك كمالك صالة الألعاب الرياضية وأعضاء الصالة الرياضية وعملائك بأفضل طريقة ممكنة. الأشخاص الذين يقومون بالتوظيف في صالة الألعاب الرياضية أو فندق المنتجع الصحي الخاص بك، هم مدربون شخصيون ويعرفون بالضبط ما يبحث عنه العملاء. للحصول على استشارة أولية لمناقشة حلول التدريب الشخصي لدينا بمزيد من التفاصيل، يرجى الاتصال بنا.</p>",
                              "<p>1. العضوية
                              الأهلية: العضوية مفتوحة للأفراد الذين تبلغ أعمارهم 18 عامًا فما فوق. يمكن للقاصرين الذين تتراوح أعمارهم بين 16-17 عامًا الانضمام بموافقة الوالدين.
                              أنواع العضوية: نقدم خطط عضوية متنوعة تشمل الاشتراكات الشهرية وربع السنوية والسنوية.
                              الإلغاء والاسترداد: يمكن إلغاء العضويات في أي وقت بإخطار مدته 30 يومًا. يتم توفير المبالغ المستردة للشهور غير المستخدمة في العضويات السنوية فقط.
                              2. استخدام النادي
                              ساعات العمل: النادي مفتوح من الساعة 5:00 صباحًا حتى 11:00 مساءً في أيام الأسبوع ومن الساعة 6:00 صباحًا حتى 10:00 مساءً في عطلات نهاية الأسبوع.
                              الوصول: يجب على الأعضاء استخدام بطاقة العضوية للدخول. مشاركة البطاقات ممنوع تمامًا.
                              الملابس: يجب ارتداء ملابس رياضية مناسبة بما في ذلك الأحذية الرياضية المغلقة دائمًا.
                              3. التدريب الشخصي
                              الحجز: يجب حجز جلسات التدريب الشخصي مسبقًا عبر بوابتنا الإلكترونية أو في المكتب الأمامي.
                              الإلغاء: يجب الإلغاء أو إعادة الجدولة قبل 24 ساعة على الأقل لتجنب رسوم الإلغاء.
                              السلوك: يُتوقع من المدربين والعملاء الحفاظ على المهنية والاحترام أثناء الجلسات.
                              4. استخدام المعدات والمنشآت
                              العناية بالمعدات: يجب على الأعضاء استخدام المعدات بشكل صحيح وإعادتها إلى مكانها المخصص بعد الاستخدام.
                              النظافة: يجب مسح المعدات بعد الاستخدام باستخدام المستلزمات المتاحة للتنظيف. التخلص من القمامة في الصناديق المخصصة.
                              الأضرار: يجب الإبلاغ عن أي أضرار في المعدات أو المنشآت فورًا. قد يتحمل العضو المسؤولية عن تكاليف الإصلاح.
                              5. الصحة والسلامة
                              الصحة: يجب على الأعضاء استشارة الطبيب قبل بدء أي برنامج رياضي جديد. إبلاغ الموظفين بأي حالات طبية أو إصابات.
                              إجراءات الطوارئ: في حالة الطوارئ، اتباع تعليمات الموظفين واستخدام مخارج الطوارئ. تتوفر مجموعات الإسعافات الأولية وأجهزة الصدمات القلبية في الموقع.
                              العناصر المحظورة: يُمنع التدخين أو شرب الكحول أو استخدام المواد غير القانونية في المباني.
                              6. قواعد السلوك
                              الاحترام: معاملة الموظفين والأعضاء الآخرين باحترام. لن يتم التسامح مع أي نوع من التحرش أو التمييز.
                              مستويات الضوضاء: استخدام سماعات الرأس للاستماع للموسيقى الشخصية. تجنب السلوك الصاخب أو المزعج.
                              المفقودات: النادي غير مسؤول عن فقدان أو سرقة أي عناصر. يُرجى استخدام الخزائن المتاحة والإبلاغ عن أي عناصر مفقودة إلى المكتب الأمامي.
                              7. التعديلات
                              تغييرات السياسة: يحتفظ نادي وورلد بيرسونال ترينر سوبرستار بحق تعديل هذه السياسات في أي وقت. سيتم إبلاغ الأعضاء بأي تغييرات.
                              8. معلومات الاتصال
                              لأي استفسارات أو مساعدة، يرجى الاتصال بنا على:
                              الهاتف: 01289187870
                              البريد الإلكتروني: admin@worlssuperstar.com
                              العنوان: القاهرة- مصر
                              تضمن هذه السياسة بيئة آمنة ومحترمة وفعالة لجميع الأعضاء والموظفين في نادي وورلد بيرسونال ترينر سوبرستار. يمكنك تعديل وتخصيص السياسة حسب الحاجة لتلبية الاحتياجات واللوائح الخاصة بناديك.
                              </p>",
                            ];    

            $identifiers=[ "about","find_job","courses","job_opportunity","solution_for_health_club","policy"
                         ];  

                        //  images/VaSC7BojUjitywEAhEwzNaxkeCntv2cgR58mhsTu.jpg
             $images=[ 
                        ["images/oxJFTxgRUajxwi9VpK98dpuEuzs01a31G2XuSvEq.jpg"],
                        ["images/fUOWBiLZ65TADrxftkdqDBYMDfymgnsWDewlrlOs.jpg"],
                        ["images/VCr8VN4DZZGuKDiS6Ahhfnye5l8BvWYsjFMdwgAd.jpg"],
                        null,
                        null,
                     
                    ];
                    $youtube_link=["https://www.youtube.com/watch?v=4UDPaC5tUH0"]; 
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $page = Page::create([
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
                'identifier'=>$identifiers[$i],
                'youtube_link'=>$youtube_link[0],
            ]);

            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $page->file()->create(["url"=>$image]);
     }
    }
}
