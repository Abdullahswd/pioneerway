<?php include '../header.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خدمات الشركة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            font-size: 0.9rem;
        }

        .service-cards h3 {
            font-size: 1rem;
        }

        .service-cards p {
            font-size: 0.85rem;
        }

        .price-tag {
            font-size: 1.1rem;
        }

        .brand-primary {
            color: var(--primary);
        }

        .bg-brand-primary {
            background-color: var(--primary);
        }

        .border-brand-primary {
            border-color: var(--primary);
        }

        .service-cards {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: linear-gradient(145deg, #ffffff, #f0f0f0);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .service-cards:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(108, 99, 255, 0.15);
        }

        .service-image {
            height: 170px;
            overflow: hidden;
            position: relative;
            object-fit: contain;
            padding-top: 20px;
        }

        @media (max-width: 768px) {
            .service-image {
                height: 140px !important;
                padding-top: 15px;
            }

            .service-image img {
                width: 100%;
                height: 100%;
                object-fit: contain;
                max-width: 80%;
                margin: 0 auto;
                display: block;
            }
        }

        @media (max-width: 480px) {
            .service-image {
                height: 120px !important;
                padding-top: 10px;
            }
        }

        .service-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.2), transparent);
        }

        .service-image img {
            transition: transform 0.7s ease;
            transform: translateZ(0);
            backface-visibility: hidden;
            perspective: 1000;
        }

        .service-cards:hover .service-image img {
            transform: scale(1.4);
            transition: transform 0.5s ease;
        }

        .group-badge {
            background: var(--primary);
            color: #FFFFFF;
            border-radius: 0px 20px 0 20px;
            padding: 6px 16px;
            font-size: 0.8rem;
            box-shadow: 0 4px 10px rgba(108, 99, 255, 0.3);
        }

        @media (max-width: 640px) {
            #servicesContainer {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 0.75rem;
            }

            .service-cards {
                min-height: 320px;
            }

            .service-image {
                height: 120px !important;
                padding-top: 10px;
            }
        }

        @media (min-width: 641px) and (max-width: 1024px) {
            #servicesContainer {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }
        }

        @media (min-width: 1025px) {
            #servicesContainer {
                grid-template-columns: repeat(3, 1fr);
                gap: 1.5rem;
            }
        }

        @media (min-width: 1280px) {
            #servicesContainer {
                grid-template-columns: repeat(4, 1fr);
                gap: 1.5rem;
            }
        }

        @media (max-width: 640px) {
            .flex-wrap.justify-center.gap-6 {
                gap: 0.25rem !important;
                justify-content: space-between;
            }

            .tab-btn {
                width: 30% !important;
                min-width: 60px;
                padding: 0.4rem !important;
                margin-bottom: 0.5rem;
            }

            .tab-btn .w-16 {
                width: 2rem !important;
                height: 2rem !important;
            }

            .tab-btn img {
                width: 1.2rem !important;
                height: 1.2rem !important;
            }

            .tab-btn span {
                font-size: 0.65rem !important;
                line-height: 1.1;
            }
        }

        @media (max-width: 768px) {
            .container.mx-auto.px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .search-container {
                padding: 1rem !important;
                margin-bottom: 1.5rem !important;
            }

            .service-cards {
                margin-bottom: 1rem;
            }

            .service-cards .p-6 {
                padding: 1rem !important;
            }

            .service-cards h3 {
                font-size: 1rem !important;
                line-height: 1.4;
            }

            .service-cards p {
                font-size: 0.8rem !important;
                line-height: 1.4;
                margin-bottom: 0.75rem !important;
            }

            .price-tag {
                font-size: 1.1rem !important;
            }

            .order-btn {
                padding: 0.75rem !important;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 768px) {
            .flex-col.md\:flex-row {
                flex-direction: column;
                gap: 1rem !important;
            }

            .search-input {
                padding: 0.75rem !important;
                font-size: 0.9rem;
            }

            .breadcrumb {
                text-align: center;
                width: 100%;
            }
        }

        @media (hover: none) and (pointer: coarse) {
            .service-cards:hover {
                transform: none !important;
            }

            .service-cards:hover .service-image img {
                transform: none !important;
            }
        }

        @media (max-width: 1024px) {
            .service-cards {
                transform: none !important;
            }

            .service-cards:active {
                transform: scale(0.98) !important;
            }
        }

        .search-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 20px;
        }

        .search-input {
            border: none;
            background: #f8fafc;
            border-radius: 10px;
            padding: 15px 20px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .breadcrumb {
            color: var(--primary);
            font-weight: 500;
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 60%;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 10px;
        }

        .order-btn {
            background: linear-gradient(45deg, var(--primary), var(--primary-light));
            border: none;
            border-radius: 15px;
            padding: 14px;
            font-weight: 700;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.3);
        }

        .order-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(108, 99, 255, 0.4);
        }

        .price-tag {
            background: linear-gradient(45deg, var(--primary), var(--accent));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            font-weight: 800;
        }

        .curved-div {
            position: relative;
            height: 120px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 0 0 50% 50% / 0 0 100px 100px;
        }

        .tab-btn.active {
            background: linear-gradient(45deg, var(--primary), var(--primary-light));
            color: white;
            box-shadow: 0 8px 20px rgba(108, 99, 255, 0.3);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .curved-div {
                height: 100px;
                border-radius: 0 0 30% 30% / 0 0 60px 60px;
            }
        }

        @media (max-width: 640px) {
            .service-cards .p-6 {
                padding: 0.75rem !important;
            }

            .service-cards h3 {
                font-size: 0.9rem !important;
                line-height: 1.3;
                height: 2.6em;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                line-clamp: 2;
            }

            .service-cards p {
                font-size: 0.75rem !important;
                line-height: 1.3;
                height: 2.6em;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                line-clamp: 2;
                margin-bottom: 0.5rem !important;
            }

            .price-tag {
                font-size: 0.9rem !important;
            }

            .order-btn {
                padding: 0.5rem !important;
                font-size: 0.8rem;
                border-radius: 10px;
            }

            .group-badge {
                font-size: 0.65rem !important;
                padding: 4px 8px !important;
                border-radius: 0px 15px 0 15px !important;
            }

            .flex.items-center.text-yellow-400 {
                font-size: 0.7rem;
            }

            .service-image img {
                max-width: 70%;
                transform: none !important;
            }

            .service-cards:hover .service-image img {
                transform: none !important;
            }
        }

        @media (max-width: 380px) {
            #servicesContainer {
                grid-template-columns: repeat(2, 1fr) !important;
                gap: 0.5rem;
            }

            .service-cards {
                min-height: 300px;
            }

            .service-image {
                height: 100px !important;
            }

            .service-cards h3 {
                font-size: 0.85rem !important;
            }

            .service-cards p {
                font-size: 0.7rem !important;
            }
        }

        @media (min-width: 641px) and (max-width: 768px) {
            #servicesContainer {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
        }

        .tab-btn img {
            object-fit: contain;
        }

        @media (max-width: 640px) {
            .tab-btn img {
                object-fit: contain;
            }
        }

        .skeleton-loader {
            animation: skeleton-pulse 1.5s ease-in-out infinite alternate;
        }

        @keyframes skeleton-pulse {
            0% {
                background-color: #e2e8f0;
            }

            100% {
                background-color: #cbd5e0;
            }
        }

        .skeleton-image {
            height: 170px;
            background: #e2e8f0;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .skeleton-text {
            height: 1rem;
            background: #e2e8f0;
            border-radius: 4px;
            margin-bottom: 0.5rem;
        }

        .skeleton-text.short {
            width: 60%;
        }

        .skeleton-text.medium {
            width: 80%;
        }

        .skeleton-button {
            height: 3rem;
            background: #e2e8f0;
            border-radius: 15px;
            margin-top: 1rem;
        }

        .skeleton-badge {
            width: 100px;
            height: 1.5rem;
            background: #e2e8f0;
            border-radius: 0px 20px 0 20px;
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        @media (max-width: 768px) {
            .skeleton-image {
                height: 140px;
            }
        }

        @media (max-width: 640px) {
            .skeleton-image {
                height: 120px;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- قسم منحني فاخر -->
    <div class="curved-div"></div>

    <!-- قسم البحث والمسار -->
    <section class="py-8 -mt-20 relative z-10">
        <div class="container mx-auto px-4">
            <div class="search-container mb-10">
                <div class="flex flex-col md:flex-row gap-6 items-center justify-between">
                    <!-- المسار -->
                    <div class="breadcrumb text-sm">
                        <span>الرئيسية</span> / <span>خدمات التجارة والعمل الحر</span>
                    </div>

                    <!-- البحث -->
                    <div class="flex-1 w-full">
                        <div class="flex items-center max-w-xl mx-auto border border-gray-300 rounded-md ">
                            <input type="text" id="searchInput" placeholder="ابحث عن الخدمة التي تريدها..." class="search-input w-full py-2 focus:outline-none">
                            <i class="fas fa-search text-gray-400 ml-2"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- تبويبات دائرية -->
            <div class="mb-12">
                <div class="flex flex-wrap justify-center gap-6">
                    <button class="tab-btn active flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="all">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-blue-200 to-purple-200 flex items-center justify-center mb-3">
                            <img src="../image/business-and-freelance-services/all.png" alt="الكل" class="w-10 h-10 object-contain">
                        </div>
                        <span class="text-sm font-medium text-center">الكل</span>
                    </button>

                    <button class="tab-btn flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="خدمات المتاجر الالكترونيه">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-green-200 to-teal-200 flex items-center justify-center mb-3">
                            <img src="../image/business-and-freelance-services/E-Commerce.png" alt="المتاجر" class="w-10 h-10 object-contain">
                        </div>
                        <span class="text-sm font-medium text-center">المتاجر</span>
                    </button>

                    <button class="tab-btn flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="خدمات العمل الحر">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-purple-200 to-pink-200 flex items-center justify-center mb-3">
                            <img src="../image/business-and-freelance-services/Freelancing.png" alt="العمل الحر" class="w-10 h-10 object-contain">
                        </div>
                        <span class="text-sm font-medium text-center">العمل الحر</span>
                    </button>

                    <button class="tab-btn flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="خدمات الاسر المنتجه">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-orange-200 to-red-200 flex items-center justify-center mb-3">
                            <img src="../image/business-and-freelance-services/HomeBusinesses.png" alt="الأسر المنتجة" class="w-10 h-10 object-contain">
                        </div>
                        <span class="text-sm font-medium text-center">الأسر المنتجة</span>
                    </button>

                    <button class="tab-btn flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="خدمات الشركات والموسسات">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-red-200 to-orange-200 flex items-center justify-center mb-3">
                            <img src="../image/business-and-freelance-services/Companies.png" alt="الشركات" class="w-10 h-10 object-contain">
                        </div>
                        <span class="text-sm font-medium text-center">الشركات</span>
                    </button>

                    <button class="tab-btn flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="استخراج الوثائق والشهادات">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-br from-teal-200 to-blue-200 flex items-center justify-center mb-3">
                            <img src="../image/business-and-freelance-services/Documents.png" alt="الوثائق" class="w-10 h-10 object-contain">
                        </div>
                        <span class="text-sm font-medium text-center">الوثائق</span>
                    </button>
                </div>
            </div>

            <!-- عرض الخدمات -->
            <div id="servicesContainer" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- سيتم تعبئة الخدمات هنا عبر JavaScript -->
            </div>
        </div>
    </section>

    <script>
        /* ===========================
           بيانات الخدمات
        =========================== */

        const services = [{
                id: 0,
                name: "تصميم متجر إلكتروني احترافي",
                group: "خدمات المتاجر الالكترونيه",
                price: "450 ريال",
                image: "../image/services/create shop.png",
                link: "",
                description: "تصميم متجر إلكتروني كامل واحترافي، مع واجهة جذابة وتجربة مستخدم سلسة، لعرض منتجاتك وزيادة مبيعاتك عبر الإنترنت."
            },
            {
                id: 1,
                name: "تصميم واعداد صفحات الهبوط",
                group: "خدمات المتاجر الالكترونيه",
                price: "720 ريال",
                image: "../image/services/Landing Page.png",
                link: "",
                description: "تصميم صفحات هبوط احترافية تركز على جذب العملاء وتحقيق أعلى معدلات التحويل"
            },
            {
                id: 2,
                name: "خدمة التواصل والتفاوض مع الموردين",
                group: "خدمات المتاجر الالكترونيه",
                price: "315 ريال",
                image: "../image/services/Delivery and delegation service.png",
                link: "",
                description: "نقوم بالتواصل مع الموردين نيابة عنك والتفاوض للحصول على أفضل الأسعار والشروط"
            },
            {
                id: 3,
                name: "توثيق حساب واتساب الاعمال",
                group: "خدمات المتاجر الالكترونيه",
                price: "270 ريال",
                image: "../image/services/whatsapp.png",
                link: "order.php?service=3",
                description: "خدمة توثيق حساب واتساب أعمالك لزيادة الموثوقية وتعزيز التواصل مع العملاء"
            },
            {
                id: 4,
                name: "بناء وتصميم الهوية البصرية",
                group: "خدمات المتاجر الالكترونيه",
                price: "540 ريال",
                image: "../image/services/Visual_identity.png",
                link: "order.php?service=4",
                description: "بناء هوية بصرية متكاملة تشمل الشعار، الألوان، الخطوط، ونماذج الاستخدام"
            },
            {
                id: 5,
                name: "شهادة توثيق التجارة الالكترونية",
                group: "خدمات المتاجر الالكترونيه",
                price: "117 ريال",
                image: "../image/services/Electronic commerce authentication certificate.png",
                link: "order.php?service=5",
                description: "نساعدك في الحصول على شهادة موثقة لتجارتك الإلكترونية لزيادة ثقة العملاء"
            },
            {
                id: 6,
                name: "استخراج وثيقة العمل الحر",
                group: "خدمات العمل الحر",
                price: "135 ريال",
                image: "../image/services/Self-employment document.png",
                link: "order.php?service=6",
                description: "خدمة متكاملة لاستخراج وثيقة العمل الحر المعتمدة من وزارة الموارد البشرية"
            },
            {
                id: 7,
                name: "إعداد منيو اكسل احترافي",
                group: "خدمات العمل الحر",
                price: "180 ريال",
                image: "../image/services/excel.png",
                link: "order.php?service=7",
                description: "تصميم منيو منسق عبر برنامج Excel يسهل عليك إدارة الأسعار والمنتجات باحترافية"
            },
            {
                id: 8,
                name: "نقل المنتجات من متجر إلى متجر",
                group: "خدمات المتاجر الالكترونيه",
                price: "405 ريال",
                image: "../image/services/Transporting products.png",
                link: "order.php?service=8",
                description: "نقوم بنقل بيانات ومنتجات متجرك الإلكتروني من منصة إلى أخرى بسرعة ودقة عالية"
            },
            {
                id: 9,
                name: "إنشاء رابط موحد لجميع الروابط",
                group: "خدمات العمل الحر",
                price: "72 ريال",
                image: "../image/services/Unified link.png",
                link: "order.php?service=9",
                description: "خدمة تصميم رابط موحد يجمع جميع روابطك ومنصاتك الاجتماعية في صفحة واحدة أنيقة"
            },
            {
                id: 10,
                name: "تسجيل مندوب توصيل",
                group: "خدمات المتاجر الالكترونيه",
                price: "90 ريال",
                image: "../image/services/sales representative.png",
                link: "order.php?service=10",
                description: "خدمة تسجيل مندوب توصيل مع الجهات الرسمية لتفعيل عملك بشكل نظامي ومعتمد"
            },
            {
                id: 11,
                name: "تصميم منيو Menu | مجلة عروض وأسعار",
                group: "خدمات الاسر المنتجه",
                price: "225 ريال",
                image: "../image/services/menu.png",
                link: "order.php?service=11",
                description: "تصميم منيو احترافي أو مجلة عروض بأسلوب جذاب يعكس هوية متجرك ويبرز منتجاتك"
            },
            {
                id: 12,
                name: "إنشاء سند أمر",
                group: "خدمات الشركات والموسسات",
                price: "117 ريال",
                image: "../image/services/Promissory note.png",
                link: "order.php?service=12",
                description: "نقوم بإنشاء سند أمر قانوني معتمد يضمن حقوقك المالية بطريقة صحيحة ومنظمة"
            },
            {
                id: 13,
                name: "باقة التوثيق المتكاملة للمشاريع والمتاجر",
                group: "خدمات المتاجر الالكترونيه",
                price: "450 ريال",
                image: "../image/services/Document package.png",
                link: "order.php?service=13",
                description: "باقة متكاملة تشمل توثيق الحسابات الرسمية والمتجر لرفع مصداقية مشروعك"
            },
            {
                id: 14,
                name: "رخصة موثوق لتقديم المحتوى الإعلاني",
                group: "استخراج الوثائق والشهادات",
                price: "225 ريال",
                image: "../image/services/Media license.png",
                link: "order.php?service=14",
                description: "نساعدك في الحصول على رخصة موثوق الرسمية لتقديم الإعلانات والمحتوى التجاري"
            },
            {
                id: 15,
                name: "خدمات مساند - إصدار تأشيرة",
                group: "استخراج الوثائق والشهادات",
                price: "387 ريال",
                image: "../image/services/musanid.png",
                link: "order.php?service=15",
                description: "خدمة متكاملة لإصدار تأشيرات العمالة المنزلية عبر منصة مساند بسهولة وسرعة"
            },
            {
                id: 16,
                name: "خدمات العنوان الوطني - تسجيل / تحديث / إدارة",
                group: "استخراج الوثائق والشهادات",
                price: "54 ريال",
                image: "../image/services/National address.png",
                link: "order.php?service=16",
                description: "نقوم بتسجيل أو تحديث بيانات العنوان الوطني الخاص بك بدقة وسهولة"
            },
            {
                id: 17,
                name: "خدمات التسجيل التجاري",
                group: "استخراج الوثائق والشهادات",
                price: "117 ريال",
                image: "../image/services/commercial register.png",
                link: "order.php?service=17",
                description: "نساعدك في استخراج وتوثيق السجل التجاري لنشاطك التجاري بسرعة واحترافية"
            },
            {
                id: 18,
                name: "خدمات ضريبة القيمة المضافة",
                group: "استخراج الوثائق والشهادات",
                price: "180 ريال",
                image: "../image/services/Value added tax.png",
                link: "order.php?service=18",
                description: "تسجيل منشأتك في ضريبة القيمة المضافة وإدارة عمليات التسجيل والتحديث بسهولة"
            },
            {
                id: 19,
                name: "فتح حساب بنكي تجاري",
                group: "خدمات الشركات والموسسات",
                price: "117 ريال",
                image: "../image/services/Open a bank account.png",
                link: "order.php?service=19",
                description: "نقدم لك خدمة فتح حساب بنكي تجاري باسم مؤسستك بخطوات مبسطة وسريعة"
            },
            {
                id: 20,
                name: "تصميم سيرة ذاتية إبداعية - عربي وإنجليزي",
                group: "خدمات العمل الحر",
                price: "63 ريال",
                image: "../image/services/CV.png",
                link: "order.php?service=20",
                description: "نصمم سيرة ذاتية احترافية بأسلوب إبداعي باللغتين العربية والإنجليزية لتميزك في سوق العمل"
            },
            {
                id: 21,
                name: "ربط المتجر الإلكتروني ب مخازن",
                group: "خدمات المتاجر الالكترونيه",
                price: "68 ريال",
                image: "../image/services/Connect stores.png",
                link: "order.php?service=21",
                description: "ربط متجر سلة بمخازن الإلكترونية تعد عملية مباشرة تساعد المتاجر على زيادة تواجدها عبر الإنترنت "
            },
            {
                id: 22,
                name: "تسجيل نشاطك في منصات التقسيط | اشتر الآن وادفع لاحقاً",
                group: "خدمات المتاجر الالكترونيه",
                price: "45 ريال",
                image: "../image/services/Installment platforms.png",
                link: "order.php?service=22",
                description: "نقوم بتسجيل نشاطك التجاري في منصات الدفع بالتقسيط لتوسيع خيارات الشراء لعملائك"
            },
            {
                id: 23,
                name: "تصميم شعار احترافي",
                group: "خدمات العمل الحر",
                price: "225 ريال",
                image: "../image/services/Logos design.png",
                link: "order.php?service=23",
                description: "تصميم شعار مميز يعبر عن هوية مشروعك بأسلوب إبداعي واحترافي"
            },
            {
                id: 24,
                name: "إصدار جهاز نقاط البيع",
                group: "خدمات الشركات والموسسات",
                price: "135 ريال",
                image: "../image/logo.png",
                link: "order.php?service=24",
                description: "نساعدك في إصدار وتفعيل جهاز نقاط البيع (POS) لمتجرك أو مطعمك بسهولة"
            },
            {
                id: 25,
                name: "تسجيل العلامة التجارية في الهيئة السعودية للملكية الفكرية",
                group: "استخراج الوثائق والشهادات",
                price: "315 ريال",
                image: "../image/services/Saudi Authority for Intellectual Property.png",
                link: "order.php?service=25",
                description: "خدمة تسجيل علامتك التجارية رسميًا لحماية حقوقك الفكرية ومنع أي استخدام غير مصرح به"
            },
            {
                id: 26,
                name: "نقطة بيع أندرويد Go Air",
                group: "خدمات الشركات والموسسات",
                price: "135 ريال",
                image: "../image/services/Android point of sale.png",
                link: "order.php?service=26",
                description: "جهاز نقاط بيع متنقل يعمل بنظام أندرويد لسهولة البيع والتحصيل في أي مكان"
            },
            {
                id: 27,
                name: "تسجيل مشروعك أو محلك في تطبيقات التوصيل",
                group: "خدمات المتاجر الالكترونيه",
                price: "225 ريال",
                image: "../image/services/Register for delivery applications.png",
                link: "order.php?service=27",
                description: "نقوم بتسجيل مشروعك في تطبيقات التوصيل الشهيرة مثل جاهز ومرسول لزيادة المبيعات"
            },
            {
                id: 28,
                name: "رفع وإضافة منتجات",
                group: "خدمات المتاجر الالكترونيه",
                price: "18 ريال",
                image: "../image/services/Upload and add products.png",
                link: "order.php?service=28",
                description: "نساعدك في رفع وإضافة منتجاتك لمتجرك الإلكتروني مع وصف وصور احترافية"
            },
            {
                id: 29,
                name: "إنشاء باركود للمسح للملفات والمواقع",
                group: "خدمات العمل الحر",
                price: "41 ريال",
                image: "../image/services/QR.png",
                link: "order.php?service=29",
                description: "إنشاء رمز QR احترافي قابل للمسح يربط إلى ملفاتك أو موقعك أو حساباتك الإلكترونية"
            },
            {
                id: 30,
                name: "إنشاء استبيان أو اختبار إلكتروني",
                group: "خدمات العمل الحر",
                price: "108 ريال",
                image: "../image/logo.png",
                link: "order.php?service=30",
                description: "نصمم لك استبيانًا أو اختبارًا إلكترونيًا تفاعليًا لجمع البيانات أو تقييم العملاء بسهولة"
            },
            {
                id: 31,
                name: "إنشاء نطاق / دومين وربطه في موقعك",
                group: "خدمات المتاجر الالكترونيه",
                price: "135 ريال",
                image: "../image/services/Create a domain.png",
                link: "order.php?service=31",
                description: "نساعدك في حجز نطاق (دومين) مميز وربطه بموقعك الإلكتروني باحترافية وسرعة"
            },
            {
                id: 32,
                name: "تصميم بطاقة موظف",
                group: "خدمات الشركات والموسسات",
                price: "90 ريال",
                image: "../image/logo.png",
                link: "order.php?service=32",
                description: "تصميم بطاقات تعريف احترافية للموظفين تحمل شعار وهوية شركتك"
            },
            {
                id: 33,
                name: "خدمات الغرف التجارية",
                group: "استخراج الوثائق والشهادات",
                price: "135 ريال",
                image: "../image/logo.png",
                link: "order.php?service=33",
                description: "نقدم خدمات إصدار وتجديد وتوثيق العضويات في الغرف التجارية بجميع المناطق"
            },
            {
                id: 34,
                name: "إصدار باركود مطابقة منتج - الهيئة السعودية للمواصفات والمقاييس",
                group: "استخراج الوثائق والشهادات",
                price: "315 ريال",
                image: "../image/logo.png",
                link: "order.php?service=34",
                description: "خدمة استخراج باركود مطابقة المنتج المعتمد لضمان توافق منتجاتك مع المعايير السعودية"
            },
        ];



        /* ===========================
           الحالة العامة للتطبيق
        =========================== */
        let state = {
            currentServices: services,
            currentCategory: 'all',
            searchTerm: ''
        };

        /* ===========================
           عناصر DOM
        =========================== */
        const elements = {
            servicesContainer: document.getElementById('servicesContainer'),
            searchInput: document.getElementById('searchInput'),
            tabButtons: document.querySelectorAll('.tab-btn')
        };

        /* ===========================
           عرض الخدمات مباشرة
        =========================== */
        function displayServices(servicesToShow = services) {
            if (!servicesToShow.length) {
                elements.servicesContainer.innerHTML = `
                    <div class="no-results">
                        <i class="fas fa-search"></i>
                        <h3>لم نعثر على نتائج</h3>
                        <p>جرب كلمات بحث مختلفة أو فئة أخرى</p>
                    </div>`;
                return;
            }

            const html = servicesToShow.map(service => `
            <div class="service-cards h-full flex flex-col"
                 data-service-id="${service.id}"
                 data-category="${service.group}">
                 
                <div class="service-image relative">
                    <img src="${service.image}" alt="${service.name}"
                         class="w-full h-full object-cover"
                         loading="lazy"
                         onerror="this.src='../image/logo.png'; this.alt='صورة بديلة'">
                    <div class="absolute top-0 right-0">
                        <span class="group-badge">${service.group}</span>
                    </div>
                </div>

                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 mb-3 line-clamp-2">${service.name}</h3>
                    <p class="text-gray-600 mb-4 flex-grow line-clamp-3">${service.description}</p>
                    <div class="flex items-center justify-between mb-5">
                        <span class="text-2xl font-bold price-tag">${service.price}</span>
                        <div class="flex items-center text-yellow-400">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <button onclick="orderService(event, '${service.link}')"
                            class="order-btn text-white font-bold transition-all duration-300">
                        <i class="fas fa-shopping-cart ml-2"></i> اطلب الخدمة الآن
                    </button>
                </div>
            </div>
            `).join('');

            elements.servicesContainer.innerHTML = html;
        }

        /* ===========================
           البحث عن الخدمات
        =========================== */
        function searchServices() {
            const searchTerm = elements.searchInput.value.trim().toLowerCase();
            state.searchTerm = searchTerm;

            const filtered = services.filter(s =>
                s.name.toLowerCase().includes(searchTerm) ||
                s.description.toLowerCase().includes(searchTerm) ||
                s.group.toLowerCase().includes(searchTerm)
            );

            state.currentServices = filtered;
            displayServices(filtered);
        }

        /* ===========================
           التصفية حسب الفئة
        =========================== */
        function filterServicesByCategory(category) {
            state.currentCategory = category;

            state.currentServices = (category === 'all') ?
                services :
                services.filter(s => s.group === category);

            const filtered = state.searchTerm ?
                state.currentServices.filter(s =>
                    s.name.toLowerCase().includes(state.searchTerm) ||
                    s.description.toLowerCase().includes(state.searchTerm)) :
                state.currentServices;

            displayServices(filtered);
        }

        /* ===========================
           طلب الخدمة
        =========================== */
        function orderService(event, link) {
            // منع السلوك الافتراضي وانتقال الحدث
            if (event) {
                event.preventDefault();
                event.stopPropagation();
            }

            // ✅ التوجيه الفعلي إلى صفحة الطلب
            if (link && link.trim() !== '') {
                window.location.href = link;
            } else {
                console.error('❌ رابط الخدمة غير محدد:', link);
                alert('عذراً، رابط الخدمة غير متوفر حالياً');
            }
        }

        /* ===========================
           تبويب نشط
        =========================== */
        function setActiveTab(activeBtn) {
            elements.tabButtons.forEach(btn => {
                btn.classList.remove('active');
            });
            activeBtn.classList.add('active');
        }

        /* ===========================
           تهيئة التطبيق
        =========================== */
        function initializeApp() {
            // عرض جميع الخدمات مباشرة عند تحميل الصفحة
            displayServices();

            // إضافة مستمعي الأحداث
            elements.searchInput.addEventListener('input', searchServices);

            elements.tabButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const category = btn.getAttribute('data-category');
                    setActiveTab(btn);
                    filterServicesByCategory(category);
                });
            });

            console.log('✅ التطبيق تم تهيئته بنجاح - جميع الخدمات معروضة مباشرة');
        }

        // تشغيل التطبيق عند تحميل الصفحة
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializeApp);
        } else {
            initializeApp();
        }
    </script>

    <script src="../script.js"></script>
</body>

</html>