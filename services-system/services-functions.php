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
            'group' => "خدمات الاسر المنتجه",
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
            'image' => "/pioneerway/image/logo.png",
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
            'image' => "/pioneerway/image/logo.png",
            'link' => "order.php?service=32",
            'description' => "تصميم بطاقات تعريف احترافية للموظفين تحمل شعار وهوية شركتك"
        ],
        [
            'id' => 33,
            'name' => "خدمات الغرف التجارية",
            'group' => "استخراج الوثائق والشهادات",
            'price' => "135 ريال",
            'image' => "/pioneerway/image/logo.png",
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
        [
            'id' => 100,
            'name' => "تطوير تطبيقات ويب متكاملة",
            'group' => "تطوير الويب",
            'price' => "2500 ريال",
            'image' => "image/programming/web-development.png",
            'link' => "order.php?service=100",
            'description' => "تطوير تطبيقات ويب متكاملة باستخدام أحدث تقنيات PHP, Laravel, React"
        ],
        [
            'id' => 101,
            'name' => "برمجة تطبيقات الجوال",
            'group' => "تطبيقات الجوال",
            'price' => "3500 ريال",
            'image' => "image/programming/mobile-apps.png",
            'link' => "order.php?service=101",
            'description' => "تصميم وتطوير تطبيقات الجوال لنظامي iOS و Android باستخدام Flutter أو React Native"
        ],
        [
            'id' => 102,
            'name' => "تصميم قواعد البيانات",
            'group' => "قواعد البيانات",
            'price' => "1200 ريال",
            'image' => "image/programming/database.png",
            'link' => "order.php?service=102",
            'description' => "تصميم وهيكلة قواعد البيانات باحترافية وأمان عالي مع تحسين الأداء"
        ],
        [
            'id' => 103,
            'name' => "برمجة سكريبتات مخصصة",
            'group' => "برمجة مخصصة",
            'price' => "1500 ريال",
            'image' => "image/programming/coding.png",
            'link' => "order.php?service=103",
            'description' => "تطوير سكريبتات مخصصة تلبي احتياجات عملك الخاصة بأعلى جودة"
        ],
        [
            'id' => 104,
            'name' => "تطوير متاجر إلكترونية متقدمة",
            'group' => "تطوير الويب",
            'price' => "3000 ريال",
            'image' => "image/programming/ecommerce.png",
            'link' => "order.php?service=104",
            'description' => "تطوير متاجر إلكترونية متقدمة مع أنظمة دفع وتوصيل متكاملة"
        ],
        [
            'id' => 105,
            'name' => "برمجة أنظمة إدارة المحتوى",
            'group' => "أنظمة الإدارة",
            'price' => "2000 ريال",
            'image' => "image/programming/cms.png",
            'link' => "order.php?service=105",
            'description' => "تطوير أنظمة إدارة محتوى مخصصة لإدارة مواقعك بسهولة وكفاءة"
        ],
        [
            'id' => 106,
            'name' => "خدمات الصيانة والتطوير",
            'group' => "الصيانة والتطوير",
            'price' => "800 ريال",
            'image' => "image/programming/maintenance.png",
            'link' => "order.php?service=106",
            'description' => "صيانة دورية وتطوير مستمر لتطبيقاتك ومواقعك الإلكترونية"
        ],
        [
            'id' => 107,
            'name' => "تحسين أداء المواقع",
            'group' => "تحسين الأداء",
            'price' => "900 ريال",
            'image' => "image/programming/optimization.png",
            'link' => "order.php?service=107",
            'description' => "تحسين سرعة وأداء مواقعك لتحسين تجربة المستخدم ومحركات البحث"
        ],
        [
            'id' => 108,
            'name' => "تطوير واجهات برمجة التطبيقات API",
            'group' => "تطوير الويب",
            'price' => "1800 ريال",
            'image' => "image/programming/api.png",
            'link' => "order.php?service=108",
            'description' => "تطوير واجهات برمجة تطبيقات آمنة وسريعة لتكامل الأنظمة المختلفة"
        ],
        [
            'id' => 109,
            'name' => "برمجة chatbots ذكية",
            'group' => "الذكاء الاصطناعي",
            'price' => "2200 ريال",
            'image' => "image/programming/chatbot.png",
            'link' => "order.php?service=109",
            'description' => "تطوير روبوتات محادثة ذكية للدعم الفني والتسويق الآلي"
        ],
        [
            'id' => 110,
            'name' => "حلول الأمن السيبراني",
            'group' => "الأمن والحماية",
            'price' => "1600 ريال",
            'image' => "image/programming/security.png",
            'link' => "order.php?service=110",
            'description' => "تأمين وحماية تطبيقاتك ومواقعك من الاختراق والهجمات الإلكترونية"
        ],
        [
            'id' => 111,
            'name' => "استشارات برمجية متخصصة",
            'group' => "استشارات تقنية",
            'price' => "500 ريال",
            'image' => "image/programming/consultation.png",
            'link' => "order.php?service=111",
            'description' => "استشارات تقنية متخصصة لمساعدتك في اختيار الحلول البرمجية المناسبة"
        ],
        [
            'id' => 112,
            'name' => "تطوير أنظمة المحاسبة",
            'group' => "أنظمة الإدارة",
            'price' => "2800 ريال",
            'image' => "image/programming/accounting.png",
            'link' => "order.php?service=112",
            'description' => "تطوير أنظمة محاسبة وإدارة مالية متكاملة لمؤسستك"
        ],
        [
            'id' => 113,
            'name' => "برمجة ألعاب إلكترونية",
            'group' => "تطوير الألعاب",
            'price' => "4000 ريال",
            'image' => "image/programming/game.png",
            'link' => "order.php?service=113",
            'description' => "تصميم وتطوير ألعاب إلكترونية للويب والجوال بأحدث التقنيات"
        ],
        [
            'id' => 114,
            'name' => "تحليل البيانات والتقارير",
            'group' => "تحليل البيانات",
            'price' => "1300 ريال",
            'image' => "image/programming/analytics.png",
            'link' => "order.php?service=114",
            'description' => "تحليل البيانات وإنشاء تقارير تفاعلية لاتخاذ القرارات المدروسة"
        ]
    ];
}

// دالة للخدمات المكتبية
function getOfficeServices()
{
    return [
        [
            'id' => 200,
            'name' => "إدخال البيانات",
            'group' => "خدمات البيانات",
            'price' => "200 ريال",
            'image' => "../image/office/data-entry.png",
            'link' => "order.php?service=200",
            'description' => "خدمة إدخال البيانات بدقة وسرعة عالية"
        ],
        [
            'id' => 201,
            'name' => "إعداد التقارير",
            'group' => "خدمات التقارير",
            'price' => "350 ريال",
            'image' => "../image/office/reports.png",
            'link' => "order.php?service=201",
            'description' => "إعداد تقارير احترافية وشاملة لبيانات أعمالك"
        ],
        [
            'id' => 202,
            'name' => "إدارة الملفات",
            'group' => "إدارة الملفات",
            'price' => "180 ريال",
            'image' => "../image/office/file-management.png",
            'link' => "order.php?service=202",
            'description' => "تنظيم وإدارة الملفات والمستندات بشكل منظم وآمن"
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
