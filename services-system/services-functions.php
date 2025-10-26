<?php
// services-functions.php

// دالة لتحميل الخدمات بناءً على القسم
function getServices($section)
{
    switch ($section) {
        case 'business-and-freelance':
            return getBusinessServices();
        case 'programming':
            return getProgrammingServices();
        case 'office':
            return getOfficeServices();
        case 'design':
            return getDesignServices();
        case 'government':
            return getGovernmentServices();
        default:
            return getBusinessServices();
    }
}

// دالة لاستخراج المجموعات الفريدة من الخدمات
function getServiceGroups($services)
{
    $groups = [];
    foreach ($services as $service) {
        if (!in_array($service['group'], $groups)) {
            $groups[] = $service['group'];
        }
    }
    return $groups;
}

// دالة لتنظيف أسماء المجموعات لاستخدامها في مسارات الصور
function sanitizeGroupName($groupName)
{
    return str_replace([' ', '-', '/', '\\'], '', $groupName);
}

// دالة لخدمات التجارة الإلكترونية والعمل الحر
function getBusinessServices()
{
    return [
        [
            'id' => 0,
            'name' => "تصميم متجر إلكتروني احترافي",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "450 ريال",
            'image' => "/pioneerway/image/services/create shop.png",
            'link' => "order.php?service=0",
            'description' => "تصميم متجر إلكتروني كامل واحترافي، مع واجهة جذابة وتجربة مستخدم سلسة، لعرض منتجاتك وزيادة مبيعاتك عبر الإنترنت."
        ],
        [
            'id' => 1,
            'name' => "تصميم واعداد صفحات الهبوط",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "720 ريال",
            'image' => "/pioneerway/image/services/Landing Page.png",
            'link' => "order.php?service=1",
            'description' => "تصميم صفحات هبوط احترافية تركز على جذب العملاء وتحقيق أعلى معدلات التحويل"
        ],
        [
            'id' => 2,
            'name' => "خدمة التواصل والتفاوض مع الموردين",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "315 ريال",
            'image' => "/pioneerway/image/services/Delivery and delegation service.png",
            'link' => "order.php?service=2",
            'description' => "نقوم بالتواصل مع الموردين نيابة عنك والتفاوض للحصول على أفضل الأسعار والشروط"
        ],
        [
            'id' => 3,
            'name' => "توثيق حساب واتساب الاعمال",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "270 ريال",
            'image' => "/pioneerway/image/services/whatsapp.png",
            'link' => "order.php?service=3",
            'description' => "خدمة توثيق حساب واتساب أعمالك لزيادة الموثوقية وتعزيز التواصل مع العملاء"
        ],
        [
            'id' => 4,
            'name' => "بناء وتصميم الهوية البصرية",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "540 ريال",
            'image' => "/pioneerway/image/services/Visual_identity.png",
            'link' => "order.php?service=4",
            'description' => "بناء هوية بصرية متكاملة تشمل الشعار، الألوان، الخطوط، ونماذج الاستخدام"
        ],
        [
            'id' => 5,
            'name' => "شهادة توثيق التجارة الالكترونية",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "117 ريال",
            'image' => "/pioneerway/image/services/Electronic commerce authentication certificate.png",
            'link' => "order.php?service=5",
            'description' => "نساعدك في الحصول على شهادة موثقة لتجارتك الإلكترونية لزيادة ثقة العملاء"
        ],
        [
            'id' => 6,
            'name' => "استخراج وثيقة العمل الحر",
            'group' => "خدمات العمل الحر",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/services/Self-employment document.png",
            'link' => "order.php?service=6",
            'description' => "خدمة متكاملة لاستخراج وثيقة العمل الحر المعتمدة من وزارة الموارد البشرية"
        ],
        [
            'id' => 7,
            'name' => "إعداد منيو اكسل احترافي",
            'group' => "خدمات العمل الحر",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/services/excel.png",
            'link' => "order.php?service=7",
            'description' => "تصميم منيو منسق عبر برنامج Excel يسهل عليك إدارة الأسعار والمنتجات باحترافية"
        ],
        [
            'id' => 8,
            'name' => "نقل المنتجات من متجر إلى متجر",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "405 ريال",
            'image' => "/pioneerway/image/services/Transporting products.png",
            'link' => "order.php?service=8",
            'description' => "نقوم بنقل بيانات ومنتجات متجرك الإلكتروني من منصة إلى أخرى بسرعة ودقة عالية"
        ],
        [
            'id' => 9,
            'name' => "إنشاء رابط موحد لجميع الروابط",
            'group' => "خدمات العمل الحر",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/services/Unified link.png",
            'link' => "order.php?service=9",
            'description' => "خدمة تصميم رابط موحد يجمع جميع روابطك ومنصاتك الاجتماعية في صفحة واحدة أنيقة"
        ],
        [
            'id' => 10,
            'name' => "تسجيل مندوب توصيل",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/services/sales representative.png",
            'link' => "order.php?service=10",
            'description' => "خدمة تسجيل مندوب توصيل مع الجهات الرسمية لتفعيل عملك بشكل نظامي ومعتمد"
        ],
        [
            'id' => 11,
            'name' => "تصميم منيو Menu | مجلة عروض وأسعار",
            'group' => "خدمات الشركات والموسسات",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/services/menu.png",
            'link' => "order.php?service=11",
            'description' => "تصميم منيو احترافي أو مجلة عروض بأسلوب جذاب يعكس هوية متجرك ويبرز منتجاتك"
        ],
        [
            'id' => 12,
            'name' => "إنشاء سند أمر",
            'group' => "خدمات الشركات والموسسات",
            'price' => "117 ريال",
            'image' => "/pioneerway/image/services/Promissory note.png",
            'link' => "order.php?service=12",
            'description' => "نقوم بإنشاء سند أمر قانوني معتمد يضمن حقوقك المالية بطريقة صحيحة ومنظمة"
        ],
        [
            'id' => 13,
            'name' => "باقة التوثيق المتكاملة للمشاريع والمتاجر",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "450 ريال",
            'image' => "/pioneerway/image/services/Document package.png",
            'link' => "order.php?service=13",
            'description' => "باقة متكاملة تشمل توثيق الحسابات الرسمية والمتجر لرفع مصداقية مشروعك"
        ],
        [
            'id' => 14,
            'name' => "رخصة موثوق لتقديم المحتوى الإعلاني",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/services/Media license.png",
            'link' => "order.php?service=14",
            'description' => "نساعدك في الحصول على رخصة موثوق الرسمية لتقديم الإعلانات والمحتوى التجاري"
        ],
        [
            'id' => 15,
            'name' => "خدمات مساند - إصدار تأشيرة",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "387 ريال",
            'image' => "/pioneerway/image/services/musanid.png",
            'link' => "order.php?service=15",
            'description' => "خدمة متكاملة لإصدار تأشيرات العمالة المنزلية عبر منصة مساند بسهولة وسرعة"
        ],
        [
            'id' => 16,
            'name' => "خدمات العنوان الوطني - تسجيل / تحديث / إدارة",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/services/National address.png",
            'link' => "order.php?service=16",
            'description' => "نقوم بتسجيل أو تحديث بيانات العنوان الوطني الخاص بك بدقة وسهولة"
        ],
        [
            'id' => 17,
            'name' => "خدمات التسجيل التجاري",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "117 ريال",
            'image' => "/pioneerway/image/services/commercial register.png",
            'link' => "order.php?service=17",
            'description' => "نساعدك في استخراج وتوثيق السجل التجاري لنشاطك التجاري بسرعة واحترافية"
        ],
        [
            'id' => 18,
            'name' => "خدمات ضريبة القيمة المضافة",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/services/Value added tax.png",
            'link' => "order.php?service=18",
            'description' => "تسجيل منشأتك في ضريبة القيمة المضافة وإدارة عمليات التسجيل والتحديث بسهولة"
        ],
        [
            'id' => 19,
            'name' => "فتح حساب بنكي تجاري",
            'group' => "خدمات الشركات والموسسات",
            'price' => "117 ريال",
            'image' => "/pioneerway/image/services/Open a bank account.png",
            'link' => "order.php?service=19",
            'description' => "نقدم لك خدمة فتح حساب بنكي تجاري باسم مؤسستك بخطوات مبسطة وسريعة"
        ],
        [
            'id' => 20,
            'name' => "تصميم سيرة ذاتية إبداعية - عربي وإنجليزي",
            'group' => "خدمات العمل الحر",
            'price' => "63 ريال",
            'image' => "/pioneerway/image/services/CV.png",
            'link' => "order.php?service=20",
            'description' => "نصمم سيرة ذاتية احترافية بأسلوب إبداعي باللغتين العربية والإنجليزية لتميزك في سوق العمل"
        ],
        [
            'id' => 21,
            'name' => "ربط المتجر الإلكتروني ب مخازن",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "68 ريال",
            'image' => "/pioneerway/image/services/Connect stores.png",
            'link' => "order.php?service=21",
            'description' => "ربط متجر سلة بمخازن الإلكترونية تعد عملية مباشرة تساعد المتاجر على زيادة تواجدها عبر الإنترنت "
        ],
        [
            'id' => 22,
            'name' => "تسجيل نشاطك في منصات التقسيط | اشتر الآن وادفع لاحقاً",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "45 ريال",
            'image' => "/pioneerway/image/services/Installment platforms.png",
            'link' => "order.php?service=22",
            'description' => "نقوم بتسجيل نشاطك التجاري في منصات الدفع بالتقسيط لتوسيع خيارات الشراء لعملائك"
        ],
        [
            'id' => 23,
            'name' => "تصميم شعار احترافي",
            'group' => "خدمات العمل الحر",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/services/Logos design.png",
            'link' => "order.php?service=23",
            'description' => "تصميم شعار مميز يعبر عن هوية مشروعك بأسلوب إبداعي واحترافي"
        ],
        [
            'id' => 24,
            'name' => "إصدار جهاز نقاط البيع",
            'group' => "خدمات الشركات والموسسات",
            'price' => "135 ريال",
            'image' => "/pioneerway/image\services\Device issuance.png",
            'link' => "order.php?service=24",
            'description' => "نساعدك في إصدار وتفعيل جهاز نقاط البيع (POS) لمتجرك أو مطعمك بسهولة"
        ],
        [
            'id' => 25,
            'name' => "تسجيل العلامة التجارية في الهيئة السعودية للملكية الفكرية",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "315 ريال",
            'image' => "/pioneerway/image/services/Saudi Authority for Intellectual Property.png",
            'link' => "order.php?service=25",
            'description' => "خدمة تسجيل علامتك التجارية رسميًا لحماية حقوقك الفكرية ومنع أي استخدام غير مصرح به"
        ],
        [
            'id' => 26,
            'name' => "نقطة بيع أندرويد Go Air",
            'group' => "خدمات الشركات والموسسات",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/services/Android point of sale.png",
            'link' => "order.php?service=26",
            'description' => "جهاز نقاط بيع متنقل يعمل بنظام أندرويد لسهولة البيع والتحصيل في أي مكان"
        ],
        [
            'id' => 27,
            'name' => "تسجيل مشروعك أو محلك في تطبيقات التوصيل",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/services/Register for delivery applications.png",
            'link' => "order.php?service=27",
            'description' => "نقوم بتسجيل مشروعك في تطبيقات التوصيل الشهيرة مثل جاهز ومرسول لزيادة المبيعات"
        ],
        [
            'id' => 28,
            'name' => "رفع وإضافة منتجات",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "18 ريال",
            'image' => "/pioneerway/image/services/Upload and add products.png",
            'link' => "order.php?service=28",
            'description' => "نساعدك في رفع وإضافة منتجاتك لمتجرك الإلكتروني مع وصف وصور احترافية"
        ],
        [
            'id' => 29,
            'name' => "إنشاء باركود للمسح للملفات والمواقع",
            'group' => "خدمات العمل الحر",
            'price' => "41 ريال",
            'image' => "/pioneerway/image/services/QR.png",
            'link' => "order.php?service=29",
            'description' => "إنشاء رمز QR احترافي قابل للمسح يربط إلى ملفاتك أو موقعك أو حساباتك الإلكترونية"
        ],
        [
            'id' => 30,
            'name' => "إنشاء استبيان أو اختبار إلكتروني",
            'group' => "خدمات العمل الحر",
            'price' => "108 ريال",
            'image' => "/pioneerway/image/services/Questionnaire.png",
            'link' => "order.php?service=30",
            'description' => "نصمم لك استبيانًا أو اختبارًا إلكترونيًا تفاعليًا لجمع البيانات أو تقييم العملاء بسهولة"
        ],
        [
            'id' => 31,
            'name' => "إنشاء نطاق / دومين وربطه في موقعك",
            'group' => "خدمات المتاجر الالكترونيه",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/services/Create a domain.png",
            'link' => "order.php?service=31",
            'description' => "نساعدك في حجز نطاق (دومين) مميز وربطه بموقعك الإلكتروني باحترافية وسرعة"
        ],
        [
            'id' => 32,
            'name' => "تصميم بطاقة موظف",
            'group' => "خدمات الشركات والموسسات",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/services/Employee card.png",
            'link' => "order.php?service=32",
            'description' => "تصميم بطاقات تعريف احترافية للموظفين تحمل شعار وهوية شركتك"
        ],
        [
            'id' => 33,
            'name' => "خدمات الغرف التجارية",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/services/chamber of commerce.png",
            'link' => "order.php?service=33",
            'description' => "نقدم خدمات إصدار وتجديد وتوثيق العضويات في الغرف التجارية بجميع المناطق"
        ],
        [
            'id' => 34,
            'name' => "إصدار باركود مطابقة منتج - الهيئة السعودية للمواصفات والمقاييس",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "315 ريال",
            'image' => "/pioneerway/image/logo.png",
            'link' => "order.php?service=34",
            'description' => "خدمة استخراج باركود مطابقة المنتج المعتمد لضمان توافق منتجاتك مع المعايير السعودية"
        ],
    ];
}


// دالة لخدمات البرمجة
function getProgrammingServices()
{
    return [
        // تطوير المواقع والمنصات
        [
            'id' => 328,
            'name' => "تصميم وإنشاء موقع تعريفي للأعمال",
            'group' => "تطوير المواقع والمنصات",
            'price' => "1170 ريال",
            'image' => "/pioneerway/image/programming/business-website.png",
            'link' => "order.php?service=328",
            'description' => "تصميم وإنشاء موقع تعريفي احترافي يعرض خدمات أعمالك بشكل مميز"
        ],
        [
            'id' => 329,
            'name' => "تصميم صفحات الهبوط",
            'group' => "تطوير المواقع والمنصات",
            'price' => "720 ريال",
            'image' => "/pioneerway/image/programming/landing-pages.png",
            'link' => "order.php?service=329",
            'description' => "تصميم صفحات هبوط مخصصة للحملات التسويقية والإعلانية"
        ],
        [
            'id' => 331,
            'name' => "إنشاء مدونة متكاملة على ووردبريس",
            'group' => "تطوير المواقع والمنصات",
            'price' => "27 ريال",
            'image' => "/pioneerway/image/programming/wordpress-blog.png",
            'link' => "order.php?service=331",
            'description' => "إنشاء مدونة متكاملة ومهيئة لمحركات البحث على منصة ووردبريس"
        ],
        [
            'id' => 332,
            'name' => "إنشاء نطاق / دومين وربطه مع موقعك",
            'group' => "تطوير المواقع والمنصات",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/programming/domain.png",
            'link' => "order.php?service=332",
            'description' => "إنشاء نطاق إلكتروني وربطه مع موقعك الإلكتروني بشكل احترافي"
        ],

        // تطوير التطبيقات
        [
            'id' => 330,
            'name' => "تصميم وبرمجة تطبيقات الجوال",
            'group' => "تطوير التطبيقات",
            'price' => "سيتم حجز موعد لتحديد السعر",
            'image' => "/pioneerway/image/programming/mobile-apps.png",
            'link' => "order.php?service=330",
            'description' => "تصميم وبرمجة تطبيقات جوال احترافية لمنصتي iOS و Android"
        ]
    ];
}

// دالة للخدمات المكتبية
function getOfficeServices()
{
    return [
        // خدمات الذكاء الاصطناعي والتصميم
        [
            'id' => 400,
            'name' => "تصميم درس أو إذاعة بالذكاء الاصطناعي",
            'group' => "خدمات الذكاء الاصطناعي والتصميم",
            'price' => "270 ريال",
            'image' => "/pioneerway/image/office/ai-lesson.png",
            'link' => "order.php?service=400",
            'description' => "تصميم محتوى تعليمي أو إذاعي باستخدام تقنيات الذكاء الاصطناعي"
        ],
        [
            'id' => 401,
            'name' => "تصميم سيرة ذاتية إبداعية",
            'group' => "خدمات الذكاء الاصطناعي والتصميم",
            'price' => "63 ريال",
            'image' => "/pioneerway/image/office/cv-design.png",
            'link' => "order.php?service=401",
            'description' => "تصميم سيرة ذاتية إبداعية ومتميزة تعزز فرصك الوظيفية"
        ],
        [
            'id' => 402,
            'name' => "إعداد وتصميم أوراق العمل",
            'group' => "خدمات الذكاء الاصطناعي والتصميم",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/office/worksheets.png",
            'link' => "order.php?service=402",
            'description' => "إعداد وتصميم أوراق العمل بشكل احترافي ومنظم"
        ],

        // خدمات الملفات والمستندات
        [
            'id' => 403,
            'name' => "تجميع ملفات الـ PDF في ملف واحد",
            'group' => "خدمات الملفات والمستندات",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/office/pdf-merge.png",
            'link' => "order.php?service=403",
            'description' => "تجميع عدة ملفات PDF في ملف واحد منظم وسهل الإدارة"
        ],
        [
            'id' => 404,
            'name' => "تعديل محتوى PDF",
            'group' => "خدمات الملفات والمستندات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/office/pdf-edit.png",
            'link' => "order.php?service=404",
            'description' => "تعديل وتحرير محتوى ملفات PDF بشكل احترافي"
        ],
        [
            'id' => 405,
            'name' => "إنشاء باركود للمسح الملفات والمواقع",
            'group' => "خدمات الملفات والمستندات",
            'price' => "40.5 ريال",
            'image' => "/pioneerway/image/office/barcode.png",
            'link' => "order.php?service=405",
            'description' => "إنشاء باركود مخصص لمسح الملفات والمواقع الإلكترونية"
        ],

        // خدمات الحسابات والاستبيانات
        [
            'id' => 406,
            'name' => "إنشاء حساب آيكلاود",
            'group' => "خدمات الحسابات والاستبيانات",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/office/icloud.png",
            'link' => "order.php?service=406",
            'description' => "إنشاء وإعداد حساب آيكلاود بشكل احترافي وآمن"
        ],
        [
            'id' => 407,
            'name' => "إنشاء حساب جيميل",
            'group' => "خدمات الحسابات والاستبيانات",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/office/gmail.png",
            'link' => "order.php?service=407",
            'description' => "إنشاء وإعداد حساب جيميل بشكل احترافي وآمن"
        ],
        [
            'id' => 408,
            'name' => "إنشاء استبيان أو اختبار إلكتروني",
            'group' => "خدمات الحسابات والاستبيانات",
            'price' => "117 ريال",
            'image' => "/pioneerway/image/office/survey.png",
            'link' => "order.php?service=408",
            'description' => "إنشاء استبيان أو اختبار إلكتروني متكامل ومهني"
        ]
    ];
}

function getDesignServices()
{
    return [
        // التصاميم الاحترافية
        [
            'id' => 300,
            'name' => "بناء وتصميم الهوية البصرية",
            'group' => "التصاميم الاحترافية",
            'price' => "360 ريال",
            'image' => "/pioneerway/image/design/visual-identity.png",
            'link' => "order.php?service=300",
            'description' => "تصميم هوية بصرية متكاملة لعلامتك التجارية"
        ],
        [
            'id' => 301,
            'name' => "تصميم بطاقة الموظف",
            'group' => "التصاميم الاحترافية",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/design/employee-card.png",
            'link' => "order.php?service=301",
            'description' => "تصميم بطاقة موظف احترافية ومميزة"
        ],
        [
            'id' => 302,
            'name' => "تصميم منيو (قائمة الطعام)",
            'group' => "التصاميم الاحترافية",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/design/menu.png",
            'link' => "order.php?service=302",
            'description' => "تصميم قائمة طعام جذابة واحترافية"
        ],
        [
            'id' => 303,
            'name' => "تصميم البوسترات والإعلانات",
            'group' => "التصاميم الاحترافية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/design/posters.png",
            'link' => "order.php?service=303",
            'description' => "تصميم بوسترات وإعلانات مبدعة وجذابة"
        ],
        [
            'id' => 304,
            'name' => "تحريك شعار - موشن",
            'group' => "التصاميم الاحترافية",
            'price' => "270 ريال",
            'image' => "/pioneerway/image/design/logo-motion.png",
            'link' => "order.php?service=304",
            'description' => "تحريك شعارك بتقنية الموشن جرافيك"
        ],
        [
            'id' => 305,
            'name' => "تصميم بنر",
            'group' => "التصاميم الاحترافية",
            'price' => "63 ريال",
            'image' => "/pioneerway/image/design/banner.png",
            'link' => "order.php?service=305",
            'description' => "تصميم بنر إعلاني احترافي وجذاب"
        ],
        [
            'id' => 306,
            'name' => "تصميم وإضافة فلاتر سناب شات",
            'group' => "التصاميم الاحترافية",
            'price' => "324 ريال",
            'image' => "/pioneerway/image/design/snapchat-filters.png",
            'link' => "order.php?service=306",
            'description' => "تصميم فلاتر مخصصة لتطبيق سناب شات"
        ],
        [
            'id' => 307,
            'name' => "تصميم شعار احترافي",
            'group' => "التصاميم الاحترافية",
            'price' => "315 ريال",
            'image' => "/pioneerway/image/design/professional-logo.png",
            'link' => "order.php?service=307",
            'description' => "تصميم شعار احترافي يعبر عن هوية علامتك التجارية"
        ],
        [
            'id' => 308,
            'name' => "إنشاء باركود للمسح للملفات والمواقع",
            'group' => "التصاميم الاحترافية",
            'price' => "40.5 ريال",
            'image' => "/pioneerway/image/design/barcode.png",
            'link' => "order.php?service=308",
            'description' => "إنشاء باركود مخصص للملفات والمواقع الإلكترونية"
        ],
        [
            'id' => 309,
            'name' => "تصميم عروض تقديمية",
            'group' => "التصاميم الاحترافية",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/design/presentations.png",
            'link' => "order.php?service=309",
            'description' => "تصميم عروض تقديمية احترافية وجذابة"
        ],
        [
            'id' => 310,
            'name' => "تصاميم انفو جرافيك",
            'group' => "التصاميم الاحترافية",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/design/infographic.png",
            'link' => "order.php?service=310",
            'description' => "تصميم انفو جرافيك لعرض البيانات والمعلومات بشكل مرئي"
        ],
        [
            'id' => 311,
            'name' => "تصاميم بطاقة دعوة",
            'group' => "التصاميم الاحترافية",
            'price' => "82.8 ريال",
            'image' => "/pioneerway/image/design/invitation-card.png",
            'link' => "order.php?service=311",
            'description' => "تصميم بطاقة دعوة مميزة وفاخرة"
        ],
        [
            'id' => 312,
            'name' => "تصميم بطاقة عمل",
            'group' => "التصاميم الاحترافية",
            'price' => "82.8 ريال",
            'image' => "/pioneerway/image/design/business-card.png",
            'link' => "order.php?service=312",
            'description' => "تصميم بطاقة عمل احترافية تعكس هوية علامتك التجارية"
        ],

        // إنتاج الفيديو الإبداعي
        [
            'id' => 313,
            'name' => "تصميم فيديو كولاج مع رياكشن",
            'group' => "إنتاج الفيديو الإبداعي",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/video/collage-reaction.png",
            'link' => "order.php?service=313",
            'description' => "تصميم فيديو كولاج مع تفاعل رياكشن مبدع"
        ],
        [
            'id' => 314,
            'name' => "خدمة تصميم إعلان احترافي بالذكاء الاصطناعي",
            'group' => "إنتاج الفيديو الإبداعي",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/video/ai-ad.png",
            'link' => "order.php?service=314",
            'description' => "تصميم إعلان احترافي باستخدام تقنيات الذكاء الاصطناعي"
        ],
        [
            'id' => 315,
            'name' => "تصميم فيديو موشن جرافيك",
            'group' => "إنتاج الفيديو الإبداعي",
            'price' => "162 ريال",
            'image' => "/pioneerway/image/video/motion-graphics.png",
            'link' => "order.php?service=315",
            'description' => "تصميم فيديو موشن جرافيك إبداعي واحترافي"
        ],
        [
            'id' => 316,
            'name' => "تصميم فيديوهات للمناسبات",
            'group' => "إنتاج الفيديو الإبداعي",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/video/occasion-videos.png",
            'link' => "order.php?service=316",
            'description' => "تصميم فيديوهات مخصصة للمناسبات والأحداث الخاصة"
        ],

        // خدمات السوشال ميديا
        [
            'id' => 317,
            'name' => "حل مشاكل حسابات السوشال ميديا | استرجاع الحسابات المخترقة والمعطلة",
            'group' => "خدمات السوشال ميديا",
            'price' => "27 ريال",
            'image' => "/pioneerway/image/social/account-recovery.png",
            'link' => "order.php?service=317",
            'description' => "حل مشاكل حسابات السوشال ميديا واسترجاع الحسابات المخترقة والمعطلة"
        ],
        [
            'id' => 318,
            'name' => "خدمة إنشاء رابط موحد لجميع الخدمات",
            'group' => "خدمات السوشال ميديا",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/social/unified-link.png",
            'link' => "order.php?service=318",
            'description' => "إنشاء رابط موحد يجمع جميع خدماتك ومنصاتك"
        ],
        [
            'id' => 319,
            'name' => "البحث عن اسم لمشروعك",
            'group' => "خدمات السوشال ميديا",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/social/project-name.png",
            'link' => "order.php?service=319",
            'description' => "البحث واقتراح اسم مميز ومبتكر لمشروعك"
        ],
        [
            'id' => 320,
            'name' => "خدمات الميل شيمب - التسويق عبر الإيميل",
            'group' => "خدمات السوشال ميديا",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/social/mailchimp.png",
            'link' => "order.php?service=320",
            'description' => "خدمات التسويق عبر البريد الإلكتروني باستخدام ميل شيمب"
        ],
        [
            'id' => 321,
            'name' => "رخصة موثوق لتقديم المحتوى الإعلاني",
            'group' => "خدمات السوشال ميديا",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/social/mawthooq-license.png",
            'link' => "order.php?service=321",
            'description' => "الحصول على رخصة موثوق لتقديم المحتوى الإعلاني"
        ],
        [
            'id' => 322,
            'name' => "إنشاء حساب آيكلاود",
            'group' => "خدمات السوشال ميديا",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/social/icloud.png",
            'link' => "order.php?service=322",
            'description' => "إنشاء وإعداد حساب آيكلاود بشكل احترافي"
        ],
        [
            'id' => 323,
            'name' => "إنشاء حساب جيميل",
            'group' => "خدمات السوشال ميديا",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/social/gmail.png",
            'link' => "order.php?service=323",
            'description' => "إنشاء وإعداد حساب جيميل بشكل احترافي"
        ],
        [
            'id' => 324,
            'name' => "إنشاء نطاق / دومين وربطه مع موقعك",
            'group' => "خدمات السوشال ميديا",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/social/domain.png",
            'link' => "order.php?service=324",
            'description' => "إنشاء نطاق إلكتروني وربطه مع موقعك الإلكتروني"
        ],
        [
            'id' => 325,
            'name' => "إضافة موقعك على خريطة سناب شات",
            'group' => "خدمات السوشال ميديا",
            'price' => "315 ريال",
            'image' => "/pioneerway/image/social/snapchat-map.png",
            'link' => "order.php?service=325",
            'description' => "إضافة موقع عملك على خريطة سناب شات"
        ],
        [
            'id' => 326,
            'name' => "خدمات خرائط قوقل",
            'group' => "خدمات السوشال ميديا",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/social/google-maps.png",
            'link' => "order.php?service=326",
            'description' => "خدمات متكاملة لخرائط قوقل للأعمال"
        ],

        // خدمات كتابة المحتوى
        [
            'id' => 327,
            'name' => "خدمة كتابة المحتوى",
            'group' => "خدمات كتابة المحتوى",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/content/writing.png",
            'link' => "order.php?service=327",
            'description' => "خدمة كتابة محتوى احترافي وجذاب لمواقعك ومنصاتك"
        ]
    ];
}

function getGovernmentServices()
{
    return [
        // الوثائق والشهادات والعقود
        [
            'id' => 500,
            'name' => "انشاء سند أمر",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "117 ريال",
            'image' => "/pioneerway/image/government/order-bond.png",
            'link' => "order.php?service=500",
            'description' => "إنشاء سند أمر رسمي ومعتمد"
        ],
        [
            'id' => 501,
            'name' => "خدمات الغرف التجارية",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "117 ريال",
            'image' => "/pioneerway/image/government/chamber-of-commerce.png",
            'link' => "order.php?service=501",
            'description' => "خدمات متكاملة للغرف التجارية السعودية"
        ],
        [
            'id' => 502,
            'name' => "إصدار باركود مطابقة منتج - الهيئة السعودية للمواصفات والمقاييس",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "315 ريال",
            'image' => "/pioneerway/image/government/product-barcode.png",
            'link' => "order.php?service=502",
            'description' => "إصدار باركود مطابقة منتج من الهيئة السعودية للمواصفات والمقاييس"
        ],
        [
            'id' => 503,
            'name' => "باقة التوثيق المتكاملة للمشاريع والمتاجر",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "450 ريال",
            'image' => "/pioneerway/image/government/documentation-package.png",
            'link' => "order.php?service=503",
            'description' => "باقة توثيق متكاملة للمشاريع والمتاجر تشمل جميع المستندات المطلوبة"
        ],
        [
            'id' => 504,
            'name' => "رخصة موثوق لتقديم المحتوى الإعلاني",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/government/mawthooq-license.png",
            'link' => "order.php?service=504",
            'description' => "الحصول على رخصة موثوق لتقديم المحتوى الإعلاني"
        ],
        [
            'id' => 505,
            'name' => "الغاء عقد الايجار",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/lease-cancellation.png",
            'link' => "order.php?service=505",
            'description' => "خدمات إلغاء عقود الإيجار بشكل رسمي وقانوني"
        ],
        [
            'id' => 506,
            'name' => "تجديد عقد الايجار",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/lease-renewal.png",
            'link' => "order.php?service=506",
            'description' => "خدمات تجديد عقود الإيجار بشكل رسمي وقانوني"
        ],
        [
            'id' => 507,
            'name' => "عقد ايجار تجاري",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "360 ريال",
            'image' => "/pioneerway/image/government/commercial-lease.png",
            'link' => "order.php?service=507",
            'description' => "إعداد عقد إيجار تجاري شامل ومطابق للأنظمة"
        ],
        [
            'id' => 508,
            'name' => "عقد ايجار زراعي تجاري",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "359.1 ريال",
            'image' => "/pioneerway/image/government/agricultural-commercial-lease.png",
            'link' => "order.php?service=508",
            'description' => "إعداد عقد إيجار زراعي تجاري شامل ومطابق للأنظمة"
        ],
        [
            'id' => 509,
            'name' => "عقد ايجار زراعي سكني",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "269.1 ريال",
            'image' => "/pioneerway/image/government/agricultural-residential-lease.png",
            'link' => "order.php?service=509",
            'description' => "إعداد عقد إيجار زراعي سكني شامل ومطابق للأنظمة"
        ],
        [
            'id' => 510,
            'name' => "استخراج شهادات التامينات الاجتماعيه",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "54 ريال",
            'image' => "/pioneerway/image/government/social-insurance-certificates.png",
            'link' => "order.php?service=510",
            'description' => "استخراج شهادات التأمينات الاجتماعية للموظفين والمنشآت"
        ],
        [
            'id' => 511,
            'name' => "تسجيل العلامة التجارية في الملكية الفكرية",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "315 ريال",
            'image' => "/pioneerway/image/government/trademark-registration.png",
            'link' => "order.php?service=511",
            'description' => "تسجيل العلامة التجارية في هيئة الملكية الفكرية"
        ],
        [
            'id' => 512,
            'name' => "خدمات مساند - اصدار تاشيره",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "387 ريال",
            'image' => "/pioneerway/image/government/musaned-visa.png",
            'link' => "order.php?service=512",
            'description' => "خدمات مساند لإصدار التأشيرات للعمالة المنزلية"
        ],
        [
            'id' => 513,
            'name' => "استخراج وثيقة العمل الحر",
            'group' => "الوثائق والشهادات والعقود",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/government/freelance-document.png",
            'link' => "order.php?service=513",
            'description' => "استخراج وثيقة العمل الحر من منصة العمل الحر"
        ],

        // خدمات التسجيل والتحديث
        [
            'id' => 514,
            'name' => "تسجيل مندوب توصيل",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/government/delivery-agent-registration.png",
            'link' => "order.php?service=514",
            'description' => "تسجيل مندوب توصيل في منصات التوصيل المختلفة"
        ],
        [
            'id' => 515,
            'name' => "تحديث حساب المواطن",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/citizen-account-update.png",
            'link' => "order.php?service=515",
            'description' => "تحديث بيانات حساب المواطن والمعلومات الشخصية"
        ],
        [
            'id' => 516,
            'name' => "تسجيل مشروعك أو محلك في تطبيقات التوصيل",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "18 ريال",
            'image' => "/pioneerway/image/government/delivery-apps-registration.png",
            'link' => "order.php?service=516",
            'description' => "تسجيل المشروع أو المحل في تطبيقات التوصيل المختلفة"
        ],
        [
            'id' => 517,
            'name' => "التسجيل في الإسكان التنموي",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "270 ريال",
            'image' => "/pioneerway/image/government/developmental-housing.png",
            'link' => "order.php?service=517",
            'description' => "التسجيل في برنامج الإسكان التنموي"
        ],
        [
            'id' => 518,
            'name' => "التسجيل في طاقات",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/government/taqat.png",
            'link' => "order.php?service=518",
            'description' => "التسجيل في منصة طاقات للتوظيف"
        ],
        [
            'id' => 519,
            'name' => "التسجيل في جدارات",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/jadaratt.png",
            'link' => "order.php?service=519",
            'description' => "التسجيل في منصة جدارات للمهارات"
        ],
        [
            'id' => 520,
            'name' => "برنامج قرة لمساعدة الأم العاملة",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "126 ريال",
            'image' => "/pioneerway/image/government/qurra-program.png",
            'link' => "order.php?service=520",
            'description' => "التسجيل في برنامج قرة لدعم الأمهات العاملات"
        ],
        [
            'id' => 521,
            'name' => "دعم توطين",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "126 ريال",
            'image' => "/pioneerway/image/government/tatweer.png",
            'link' => "order.php?service=521",
            'description' => "خدمات دعم توطين القطاعات المختلفة"
        ],
        [
            'id' => 522,
            'name' => "التسجيل في وظائف طاقات",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "108 ريال",
            'image' => "/pioneerway/image/government/taqat-jobs.png",
            'link' => "order.php?service=522",
            'description' => "التسجيل والتقديم على الوظائف في منصة طاقات"
        ],
        [
            'id' => 523,
            'name' => "التسجيل في وظائف جدارات",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/government/jadaratt-jobs.png",
            'link' => "order.php?service=523",
            'description' => "التسجيل والتقديم على الوظائف في منصة جدارات"
        ],
        [
            'id' => 524,
            'name' => "التسجيل في وظائف كادر",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/government/kader-jobs.png",
            'link' => "order.php?service=524",
            'description' => "التسجيل والتقديم على الوظائف في برنامج كادر"
        ],
        [
            'id' => 525,
            'name' => "التسجيل في وظائف العمل عن بعد",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/government/remote-work-jobs.png",
            'link' => "order.php?service=525",
            'description' => "التسجيل والتقديم على وظائف العمل عن بعد"
        ],
        [
            'id' => 526,
            'name' => "دعم ساند يصل الى 5400 شهريا",
            'group' => "خدمات التسجيل والتحديث",
            'price' => "سيتم حجز موعد لتحديد السعر",
            'image' => "/pioneerway/image/government/sanid-support.png",
            'link' => "order.php?service=526",
            'description' => "التسجيل في برنامج ساند للحصول على دعم يصل إلى 5400 ريال شهرياً"
        ],

        // التوظيف ودعم الموظفين
        [
            'id' => 527,
            'name' => "تمهير يصل الى 3000 شهريا",
            'group' => "التوظيف ودعم الموظفين",
            'price' => "126 ريال",
            'image' => "/pioneerway/image/government/tamheer.png",
            'link' => "order.php?service=527",
            'description' => "التسجيل في برنامج تمهير للحصول على دعم يصل إلى 3000 ريال شهرياً"
        ],
        [
            'id' => 528,
            'name' => "التقديم على الوظائف الحكوميه",
            'group' => "التوظيف ودعم الموظفين",
            'price' => "90 ريال",
            'image' => "/pioneerway/image/government/government-jobs.png",
            'link' => "order.php?service=528",
            'description' => "التقديم على الوظائف الحكومية في مختلف القطاعات"
        ],
        [
            'id' => 529,
            'name' => "دعم وصول يصل الى 1100 شهريا",
            'group' => "التوظيف ودعم الموظفين",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/wusool.png",
            'link' => "order.php?service=529",
            'description' => "التسجيل في برنامج وصول للحصول على دعم يصل إلى 1100 ريال شهرياً"
        ],

        // خدمات أبشر والأحوال المدنية
        [
            'id' => 530,
            'name' => "مبايعة المركبات",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/vehicle-transfer.png",
            'link' => "order.php?service=530",
            'description' => "خدمات مبايعة ونقل ملكية المركبات عبر أبشر"
        ],
        [
            'id' => 531,
            'name' => "تسجيل مواليد",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/birth-registration.png",
            'link' => "order.php?service=531",
            'description' => "تسجيل المواليد في الأحوال المدنية عبر أبشر"
        ],
        [
            'id' => 532,
            'name' => "خدمات المكفولين العماله",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/sponsored-workers.png",
            'link' => "order.php?service=532",
            'description' => "خدمات إدارة العمالة المكفولة عبر أبشر"
        ],
        [
            'id' => 533,
            'name' => "الإستعلام عن المخالفات و معلومات رخصة القيادة",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/violations-inquiry.png",
            'link' => "order.php?service=533",
            'description' => "الاستعلام عن المخالفات المرورية ومعلومات رخصة القيادة"
        ],
        [
            'id' => 534,
            'name' => "خدمات الهوية الوطنيه",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/national-id.png",
            'link' => "order.php?service=534",
            'description' => "خدمات تجديد واستخراج الهوية الوطنية"
        ],
        [
            'id' => 535,
            'name' => "اصدار سجل الاسره",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/family-record.png",
            'link' => "order.php?service=535",
            'description' => "إصدار وتجديد سجل الأسرة"
        ],
        [
            'id' => 536,
            'name' => "خدمات المرور",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/traffic-services.png",
            'link' => "order.php?service=536",
            'description' => "خدمات المرور المختلفة عبر منصة أبشر"
        ],
        [
            'id' => 537,
            'name' => "خدمات الأحوال المدنيه",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/civil-affairs.png",
            'link' => "order.php?service=537",
            'description' => "خدمات الأحوال المدنية الشاملة عبر أبشر"
        ],
        [
            'id' => 538,
            'name' => "تعديل المعلومات الشخصيه",
            'group' => "خدمات أبشر والأحوال المدنية",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/personal-info-update.png",
            'link' => "order.php?service=538",
            'description' => "تعديل المعلومات الشخصية في سجلات الأحوال المدنية"
        ],

        // تقديم الشكاوى والإعتراضات
        [
            'id' => 539,
            'name' => "شكوى وزارة التجارة أو المركز السعودي للأعمال",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "82.8 ريال",
            'image' => "/pioneerway/image/government/commerce-complaint.png",
            'link' => "order.php?service=539",
            'description' => "تقديم شكوى لوزارة التجارة أو المركز السعودي للأعمال"
        ],
        [
            'id' => 540,
            'name' => "تقديم شكوى في البنك المركزي",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/central-bank-complaint.png",
            'link' => "order.php?service=540",
            'description' => "تقديم شكوى للبنك المركزي السعودي"
        ],
        [
            'id' => 541,
            'name' => "تقديم شكوى في الهيئة الملكية الفكرية",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/intellectual-property-complaint.png",
            'link' => "order.php?service=541",
            'description' => "تقديم شكوى للهيئة السعودية للملكية الفكرية"
        ],
        [
            'id' => 542,
            'name' => "تقديم اعتراض في حساب المواطن",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/citizen-account-objection.png",
            'link' => "order.php?service=542",
            'description' => "تقديم اعتراض على قرارات حساب المواطن"
        ],
        [
            'id' => 543,
            'name' => "تقديم اعتراض في الضمان الاجتماعي",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/social-security-objection.png",
            'link' => "order.php?service=543",
            'description' => "تقديم اعتراض على قرارات الضمان الاجتماعي"
        ],
        [
            'id' => 544,
            'name' => "تقديم شكوى في طاقات",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/taqat-complaint.png",
            'link' => "order.php?service=544",
            'description' => "تقديم شكوى في منصة طاقات للتوظيف"
        ],
        [
            'id' => 545,
            'name' => "تقديم شكوى في منصة العمل الحر",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/freelance-platform-complaint.png",
            'link' => "order.php?service=545",
            'description' => "تقديم شكوى في منصة العمل الحر"
        ],
        [
            'id' => 546,
            'name' => "تقديم شكوى في بنك التنميه الاجتماعيه",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/social-development-bank-complaint.png",
            'link' => "order.php?service=546",
            'description' => "تقديم شكوى في بنك التنمية الاجتماعية"
        ],
        [
            'id' => 547,
            'name' => "تقديم شكوى في ساند",
            'group' => "تقديم الشكاوى والإعتراضات",
            'price' => "72 ريال",
            'image' => "/pioneerway/image/government/sanid-complaint.png",
            'link' => "order.php?service=547",
            'description' => "تقديم شكوى في برنامج ساند للدعم"
        ],

        // خدمات الدعم والتمويل
        [
            'id' => 548,
            'name' => "التمويل الموسمي دعم يصل لـ 30 الآلف ريال",
            'group' => "خدمات الدعم والتمويل",
            'price' => "225 ريال",
            'image' => "/pioneerway/image/government/seasonal-financing.png",
            'link' => "order.php?service=548",
            'description' => "التقديم على التمويل الموسمي بدعم يصل إلى 30 ألف ريال"
        ],
        [
            'id' => 549,
            'name' => "تمويل التميز يصل إلى 40 مليون",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/excellence-financing.png",
            'link' => "order.php?service=549",
            'description' => "التقديم على تمويل التميز بمبلغ يصل إلى 40 مليون ريال"
        ],
        [
            'id' => 550,
            'name' => "تمويل سيولة يصل الى 300 الف",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/liquidity-financing.png",
            'link' => "order.php?service=550",
            'description' => "التقديم على تمويل السيولة بمبلغ يصل إلى 300 ألف ريال"
        ],
        [
            'id' => 551,
            'name' => "تمويل الترميم يصل الى 60 الف",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/renovation-financing.png",
            'link' => "order.php?service=551",
            'description' => "التقديم على تمويل الترميم بمبلغ يصل إلى 60 ألف ريال"
        ],
        [
            'id' => 552,
            'name' => "تمويل الاسر المنتجه يصل الى 50 الف",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/productive-families-financing.png",
            'link' => "order.php?service=552",
            'description' => "التقديم على تمويل الأسر المنتجة بمبلغ يصل إلى 50 ألف ريال"
        ],
        [
            'id' => 553,
            'name' => "تمويل الأصول - السيارات يصل الى 300 الف",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/assets-financing.png",
            'link' => "order.php?service=553",
            'description' => "التقديم على تمويل الأصول والمركبات بمبلغ يصل إلى 300 ألف ريال"
        ],
        [
            'id' => 554,
            'name' => "تمويل كنف يصل الى 30 الف",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/kanaf-financing.png",
            'link' => "order.php?service=554",
            'description' => "التقديم على تمويل كنف بمبلغ يصل إلى 30 ألف ريال"
        ],
        [
            'id' => 555,
            'name' => "تمويل الاسره يصل الى 100 الف",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/family-financing.png",
            'link' => "order.php?service=555",
            'description' => "التقديم على تمويل الأسرة بمبلغ يصل إلى 100 ألف ريال"
        ],
        [
            'id' => 556,
            'name' => "تمويل الزواج يصل الى 60 الف",
            'group' => "خدمات الدعم والتمويل",
            'price' => "180 ريال",
            'image' => "/pioneerway/image/government/marriage-financing.png",
            'link' => "order.php?service=556",
            'description' => "التقديم على تمويل الزواج بمبلغ يصل إلى 60 ألف ريال"
        ]
    ];
}



// أضف هذه الدالة إلى services-functions.php
function getGroupImagePath($groupName, $section = 'programming')
{
    $groupImages = [
        // صور قسم البرمجة
        'تطوير الويب' => 'web-development.png',
        'تطبيقات الجوال' => 'mobile-apps.png',
        'قواعد البيانات' => 'database.png',
        'برمجة مخصصة' => 'coding.png',
        'أنظمة الإدارة' => 'cms.png',
        'الصيانة والتطوير' => 'maintenance.png',
        'تحسين الأداء' => 'optimization.png',
        'الذكاء الاصطناعي' => 'ai.png',
        'الأمن والحماية' => 'security.png',
        'استشارات تقنية' => 'consultation.png',
        'تطوير الألعاب' => 'game.png',
        'تحليل البيانات' => 'analytics.png',

        // صور قسم التجارة
        'خدمات المتاجر الالكترونيه' => 'ecommerce.png',
        'خدمات العمل الحر' => 'freelance.png',
        'خدمات الاسر المنتجه' => 'family-business.png',
        'خدمات الشركات والموسسات' => 'Companies.png',
        'استخراج الوثائق والشهادات' => 'documents.png',
    ];

    $imageName = $groupImages[$groupName] ?? 'default.png';

    // تحديد المسار حسب القسم
    switch ($section) {
        case 'programming':
            return "/pioneerway/image/groups/programming/{$imageName}";
        case 'business-and-freelance':
            return "/pioneerway/image/groups/business/{$imageName}";
        case 'office':
            return "/pioneerway/image/groups/office/{$imageName}";
        case 'design':
            return "/pioneerway/image/groups/design/{$imageName}";
        case 'marketing':
            return "/pioneerway/image/groups/marketing/{$imageName}";
        default:
            return "/pioneerway/image/groups/business/{$imageName}";
    }
}

// دالة للصورة الافتراضية إذا لم توجد الصورة
function getDefaultGroupImage($section = 'programming')
{
    if ($section === 'programming') {
        return "../image/groups/programming/default.png";
    } else {
        return "../image/groups/business/default.png";
    }
}
