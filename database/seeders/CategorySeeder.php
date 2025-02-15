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
        $title_en = ["Custom Website Development",
                     "E-commerce Development",
                     "Website Maintenance and Support",
                     "Website Hosting"];
        $subtitle_en = [null,null,null,null];
        $description_en = [ "<p>We specialize in creating custom websites that fit your specific business needs. Our team of experienced developers and designers work closely with you to understand your requirements and develop a website that reflects your brand identity. We take advantage of the latest web technologies and responsive design principles to ensure that your website looks amazing and works flawlessly across devices and in addition to a control panel to make you able to control all     site content</p>",
                            "<p>If you're looking to sell products or categories online, our e-commerce development categories can help. We have expertise in building secure and scalable e-commerce platforms that offer seamless user experiences and robust payment integration. From product catalogs and shopping carts to inventory management and order processing, we create e-commerce solutions that drive conversions and maximize revenue</p>",

                            "<p>We believe in long-term partnerships with our clients. Our website maintenance and support categories ensure that your website remains secure, up-to-date, and optimized for performance. We provide regular updates, security patches, and backups to protect your website from vulnerabilities. Our support team is available to address any issues, answer questions, and provide ongoing technical assistance </p>",
                            "<p>At our web development company, we offer comprehensive hosting categories to ensure that your website performs optimally and remains accessible to your visitors. Our hosting category provides a reliable and secure environment for your website to thrive. Here's an overview of our hosting category:

                                Reliable Hosting Infrastructure: We maintain a robust hosting infrastructure with state-of-the-art servers and network equipment. Our servers are optimized for performance, offering fast load times and minimal downtime. We prioritize reliability to ensure that your website is accessible to visitors around the clock.
                                
                                Scalable Solutions: Our hosting category is designed to accommodate your website's growth. Whether you have a small business website or a complex web application, we offer scalable hosting solutions that can adapt to your changing needs. As your website expands, we can seamlessly scale up the hosting resources to handle increased traffic and data requirements.
                                
                                Security Measures: We prioritize the security of your website and the data it contains. Our hosting category includes robust security measures such as firewalls, intrusion detection systems, and regular security updates. We also implement SSL certificates to encrypt data transmission, safeguarding sensitive information and building trust with your visitors.
                                
                                Backup and Disaster Recovery: We understand the importance of data protection. Our hosting category includes regular backups of your website and its associated data. In the event of a technical issue or unexpected event, we can quickly restore your website to minimize downtime and data loss.
                                
                                Technical Support: Our dedicated support team is available to assist you with any hosting-related concerns or technical issues. Whether you have questions about server configurations, need assistance with DNS settings, or require troubleshooting, our knowledgeable support staff is just a phone call or email away.
                                
                                Compatibility with Web Technologies: Our hosting category supports a wide range of web technologies and programming languages. Whether your website is built with PHP, Python, Node.js, or other frameworks, our hosting environment can accommodate your specific requirements.
                                
                                Content Delivery Network (CDN): To enhance the performance of your website, we can integrate a Content Delivery Network (CDN) into our hosting category. A CDN helps deliver your website content quickly to visitors from various geographical locations, improving load times and user experience.
                                
                                Email Hosting: Along with website hosting, we also offer email hosting categories. You can have professional email addresses associated with your domain name, providing a seamless and unified communication experience for your business.
                                
                                 </p>"];

        $title_ar = ["انشاء مواقع الويب",
                     "انشاء مواقع تجارة الكترونية",
                     "صيانة ودعم الموقع",
                     "استضافت مواقع "];  

        $subtitle_ar = [null,null,null,null];

        $description_ar = [ "<p>نحن متخصصون في إنشاء مواقع ويب مخصصة تناسب احتياجات عملك المحددة. يعمل فريقنا من المطورين والمصممين ذوي الخبرة بشكل وثيق معك لفهم متطلباتك وتطوير موقع ويب يعكس هوية علامتك التجارية. نحن نستفيد من أحدث تقنيات الويب ومبادئ التصميم سريع الاستجابة لضمان أن يبدو موقع الويب الخاص بك مذهلاً ويعمل بشكل لا تشوبه شائبة عبر الأجهزة وبالاضافه الى لوحة تحكم لنجعلك قادر على التحكم فى جميع محتويات الموقع  </p>",

                            "<p>إذا كنت تتطلع إلى بيع منتجات أو خدمات عبر الإنترنت، فيمكن أن تساعدك خدمات تطوير التجارة الإلكترونية لدينا. لدينا خبرة في بناء منصات تجارة إلكترونية آمنة وقابلة للتطوير توفر تجارب مستخدم سلسة وتكاملًا قويًا للدفع. بدءًا من كتالوجات المنتجات وعربات التسوق وحتى إدارة المخزون ومعالجة الطلبات، نقوم بإنشاء حلول للتجارة الإلكترونية تعمل على زيادة التحويلات وزيادة الإيرادات إلى أقصى حد</p>",

                            "<p>نحن نؤمن بالشراكات طويلة الأمد مع عملائنا. تضمن خدمات صيانة ودعم موقع الويب لدينا بقاء موقع الويب الخاص بك آمنًا وحديثًا ومحسّنًا للأداء. نحن نقدم تحديثات منتظمة وتصحيحات أمنية ونسخًا احتياطية لحماية موقع الويب الخاص بك من نقاط الضعف. فريق الدعم لدينا متاح لمعالجة أية مشكلات والإجابة على الأسئلة وتقديم المساعدة الفنية المستمرة</p>",

                            "<p>في شركة تطوير الويب لدينا، نقدم خدمات استضافة شاملة للتأكد من أن موقع الويب الخاص بك يعمل على النحو الأمثل ويظل في متناول زوار موقعك. توفر خدمة الاستضافة لدينا بيئة موثوقة وآمنة لازدهار موقع الويب الخاص بك. فيما يلي نظرة عامة على خدمة الاستضافة لدينا:

بنية تحتية موثوقة للاستضافة: نحن نحافظ على بنية تحتية قوية للاستضافة مع خوادم ومعدات شبكات حديثة. تم تحسين خوادمنا من أجل الأداء، مما يوفر أوقات تحميل سريعة وأقل وقت توقف. نحن نعطي الأولوية للموثوقية للتأكد من أن موقع الويب الخاص بك في متناول الزوار على مدار الساعة.

حلول قابلة للتطوير: تم تصميم خدمة الاستضافة لدينا لاستيعاب نمو موقع الويب الخاص بك. سواء كان لديك موقع ويب خاص بشركة صغيرة أو تطبيق ويب معقد، فإننا نقدم حلول استضافة قابلة للتطوير يمكنها التكيف مع احتياجاتك المتغيرة. مع توسع موقع الويب الخاص بك، يمكننا بسهولة زيادة موارد الاستضافة للتعامل مع زيادة حركة المرور ومتطلبات البيانات.

التدابير الأمنية: نحن نعطي الأولوية لأمن موقع الويب الخاص بك والبيانات التي يحتوي عليها. تتضمن خدمة الاستضافة لدينا إجراءات أمنية قوية مثل جدران الحماية، وأنظمة كشف التسلل، والتحديثات الأمنية المنتظمة. نقوم أيضًا بتنفيذ شهادات SSL لتشفير نقل البيانات وحماية المعلومات الحساسة وبناء الثقة مع زوار موقعك.

النسخ الاحتياطي والتعافي من الكوارث: نحن ندرك أهمية حماية البيانات. تتضمن خدمة الاستضافة لدينا نسخًا احتياطية منتظمة لموقعك على الويب والبيانات المرتبطة به. في حالة وجود مشكلة فنية أو حدث غير متوقع، يمكننا استعادة موقع الويب الخاص بك بسرعة لتقليل وقت التوقف عن العمل وفقدان البيانات.

الدعم الفني: فريق الدعم المخصص لدينا متاح لمساعدتك في أي مخاوف أو مشكلات فنية متعلقة بالاستضافة. سواء كانت لديك أسئلة حول تكوينات الخادم، أو كنت بحاجة إلى مساعدة بشأن إعدادات DNS، أو كنت بحاجة إلى استكشاف الأخطاء وإصلاحها، فإن موظفي الدعم ذوي المعرفة لدينا ليسوا سوى مكالمة هاتفية أو بريد إلكتروني.

التوافق مع تقنيات الويب: تدعم خدمة الاستضافة لدينا مجموعة واسعة من تقنيات الويب ولغات البرمجة. سواء تم إنشاء موقع الويب الخاص بك باستخدام PHP أو Python أو Node.js أو أطر عمل أخرى، يمكن لبيئة الاستضافة لدينا أن تلبي متطلباتك المحددة.

شبكة تسليم المحتوى (CDN): لتحسين أداء موقع الويب الخاص بك، يمكننا دمج شبكة تسليم المحتوى (CDN) في خدمة الاستضافة لدينا. تساعد شبكة CDN على تقديم محتوى موقع الويب الخاص بك بسرعة للزائرين من مواقع جغرافية مختلفة، مما يحسن أوقات التحميل وتجربة المستخدم.

استضافة البريد الإلكتروني: إلى جانب استضافة مواقع الويب، نقدم أيضًا خدمات استضافة البريد الإلكتروني. يمكنك الحصول على عناوين بريد إلكتروني احترافية مرتبطة باسم النطاق الخاص بك، مما يوفر تجربة اتصال سلسة وموحدة لشركتك. </p>"];

        $images = ["images/lFm4BhN2x9t3xJnk42ivFtqCWzMCcLppx1Mlr9gN.jpg",
                    "images/tqmoHh1nzC4Zg0IE4JykvWbBigfJpdIxMqxNcYPF.jpg",
                    "images/fih4AHmLMdr3mBpXqeeellC00S18BZm5dDCHcntw.jpg",
                    "images/yvxLurP4RFhTzwsih8n5pYC62eHgY74TDzQ3J8xF.jpg"];

        $icons=["far fa-window-restore",
                "fas fa-shopping-cart",
                "fas fa-cog",
                "fab fa-ioxhost"];

        for ($i = 0; $i < count($title_ar); $i++) {
            $category = Category::create([
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
                'icon'=>$icons[$i],
            ]);

            $category->file()->create(["url"=>$images[$i]]);
        }
    }
}
