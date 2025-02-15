<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;



class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $title_en = ["How long does it take to develop a website or web application?",
                     "Can you help with website redesign or updates to an existing website?",
                     " Will my website be mobile-friendly and responsive?",
                     "Can you assist with search engine optimization (SEO)?",
                     "Will I have the ability to update my website's content?",
                     "Do you provide ongoing support and website maintenance?",
                     "What are your pricing and payment terms?",
                    "What does the web development process involve?"];

        $description_en = ["<p>The timeline for web development depends on the project's complexity, features, and client requirements. A simple website can be developed within a few days, while more extensive projects like e-commerce platforms or custom web applications may take several weeks. We provide a detailed timeline during the project planning phase, keeping you informed about the expected timeframe.</P>",

                            "<p>Yes, we offer website redesign services and can assist with updating existing websites. Whether you need a complete overhaul or specific updates, our team can work with you to enhance your website's design, functionality, and user experience.</P>",

                            "<p>Absolutely! We prioritize responsive web design, ensuring that your website looks and functions seamlessly across various devices, including desktops, tablets, and smartphones. A mobile-friendly website is essential for reaching a wider audience and providing a positive user experience.</P>",

                        "<p>Yes, we provide SEO-friendly web development services. While the primary focus is on creating a functional and visually appealing website, we implement best practices to optimize your website for search engines. This includes proper HTML structure, clean code, optimized page speed, and user-friendly URLs. For comprehensive SEO strategies, we can also offer guidance or collaborate with SEO specialists.</p>",

                        "<p>Yes, we offer content management system (CMS) solutions that allow you to update and manage your website's content easily. We can recommend and integrate popular CMS platforms such as WordPress, Drupal, or Joomla, enabling you to make changes without requiring technical expertise.
                        </p>",

                        "<p>Yes, we offer ongoing support and maintenance services to ensure your website remains secure, up-to-date, and optimized for performance. We provide regular updates, security patches, backups, and technical assistance to address any issues that may arise.</p>",

                        "<p>Our pricing depends on the scope and complexity of the project. We provide detailed project proposals and cost estimates based on your requirements. Payment terms are typically discussed and agreed upon during the project initiation phase.</p>",

                        "<p>The web development process typically involves several stages, including requirement analysis, design, development, testing, deployment, and ongoing maintenance. It begins with understanding your project goals, followed by designing and coding the website or web application. Testing ensures its functionality, and once approved, it is deployed to a live server. Ongoing maintenance includes updates, security patches, and technical support.</p>"];

        $title_ar = ["كم من الوقت يستغرق تطوير موقع ويب أو تطبيق ويب؟",
                     "هل يمكنك المساعدة في إعادة تصميم موقع الويب أو تحديث موقع ويب موجود؟",
                     "هل سيكون موقع الويب الخاص بي متوافقًا مع الجوّال وسريع الاستجابة؟",
                     "هل يمكنك المساعدة في تحسين محركات البحث (SEO)؟",
                     "هل سيكون لدي القدرة على تحديث محتوى موقع الويب الخاص بي؟",
                     "هل تقدمون الدعم المستمر وصيانة الموقع؟",
                     "ما هي التسعير وشروط الدفع الخاصة بك؟",
                     "ماذا تتضمن عملية تطوير الويب؟" ];

        $description_ar = ["<p> يعتمد الجدول الزمني لتطوير الويب على مدى تعقيد المشروع وميزاته ومتطلبات العميل. يمكن تطوير موقع ويب بسيط في غضون أيام قليلة، بينما قد تستغرق المشاريع الأكثر شمولاً مثل منصات التجارة الإلكترونية أو تطبيقات الويب المخصصة عدة أسابيع. نحن نقدم جدولًا زمنيًا مفصلاً خلال مرحلة تخطيط المشروع، ونبقيك على اطلاع بالإطار الزمني المتوقع.</P>",
 
                            "<p>نعم، نحن نقدم خدمات إعادة تصميم مواقع الويب ويمكننا المساعدة في تحديث مواقع الويب الحالية. سواء كنت بحاجة إلى إصلاح شامل أو تحديثات محددة، يمكن لفريقنا العمل معك لتحسين تصميم موقع الويب الخاص بك ووظائفه وتجربة المستخدم.</P>",

                            "<p>قطعاً! نحن نعطي الأولوية لتصميم الويب سريع الاستجابة، مما يضمن أن يبدو موقع الويب الخاص بك ويعمل بسلاسة عبر الأجهزة المختلفة، بما في ذلك أجهزة الكمبيوتر المكتبية والأجهزة اللوحية والهواتف الذكية. يعد موقع الويب المتوافق مع الأجهزة المحمولة أمرًا ضروريًا للوصول إلى جمهور أوسع وتوفير تجربة مستخدم إيجابية.</P>",

                            "<p>نعم، نحن نقدم خدمات تطوير الويب الصديقة لمحركات البحث (SEO). في حين أن التركيز الأساسي ينصب على إنشاء موقع ويب عملي وجذاب من الناحية المرئية، فإننا نطبق أفضل الممارسات لتحسين موقع الويب الخاص بك لمحركات البحث. يتضمن ذلك بنية HTML المناسبة والتعليمات البرمجية النظيفة وسرعة الصفحة المحسنة وعناوين URL سهلة الاستخدام. بالنسبة لاستراتيجيات تحسين محركات البحث الشاملة، يمكننا أيضًا تقديم التوجيه أو التعاون مع متخصصي تحسين محركات البحث.</p>",

                            "<p>نعم، نحن نقدم حلول نظام إدارة المحتوى (CMS) التي تتيح لك تحديث محتوى موقع الويب الخاص بك وإدارته بسهولة. يمكننا أن نوصي وندمج منصات CMS الشائعة مثل WordPress أو Drupal أو Joomla، مما يتيح لك إجراء تغييرات دون الحاجة إلى خبرة فنية.</p>",

                            "<p>نعم، نحن نقدم خدمات الدعم والصيانة المستمرة لضمان بقاء موقع الويب الخاص بك آمنًا وحديثًا ومحسنًا للأداء. نحن نقدم تحديثات منتظمة وتصحيحات أمنية ونسخًا احتياطية ومساعدة فنية لمعالجة أي مشكلات قد تنشأ.</p>",

                           "<p>تعتمد أسعارنا على نطاق المشروع وتعقيده. نحن نقدم مقترحات مشاريع مفصلة وتقديرات التكلفة بناء على متطلباتك. عادةً ما تتم مناقشة شروط الدفع والاتفاق عليها خلال مرحلة بدء المشروع.</p>",

                           "<p>تتضمن عملية تطوير الويب عادةً عدة مراحل، بما في ذلك تحليل المتطلبات والتصميم والتطوير والاختبار والنشر والصيانة المستمرة. يبدأ الأمر بفهم أهداف مشروعك، يليه تصميم وبرمجة موقع الويب أو تطبيق الويب. يضمن الاختبار وظائفه، وبمجرد الموافقة عليه، يتم نشره على خادم مباشر. تتضمن الصيانة المستمرة التحديثات وتصحيحات الأمان والدعم الفني.</p>" ];


        $image=[];

        for ($i = 0; $i < count($title_ar); $i++) {
            $FaqTranslation = Faq::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],

                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
            ]);
        }
    }
}
