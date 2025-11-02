<?php
// services-template.php
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    
    <!-- CSS أولاً -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/pioneerway/fonts.css">
    <link rel="stylesheet" href="/pioneerway/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* شاشة التحميل والتهيئة الأولية */
        body {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        body.page-loaded {
            opacity: 1;
            visibility: visible;
        }

        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading-screen.hidden {
            display: none;
        }

        /* الأنماط الأصلية */
        .service-cards h3 {
            font-size: 1rem;
        }

        .service-cards p {
            font-size: 0.85rem;
        }

        .price-tag {
             color: #3b82f6;
            
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
                height: 160px !important;
                padding-top: 15px;
            }

            .service-image img {
                width: 100%;
                height: 100%;
                object-fit: contain;
                max-width: 90%;
                margin: 0 auto;
                display: block;
                transform: scale(1.1);
            }
        }

        @media (max-width: 480px) {
            .service-image {
                height: 150px !important;
                padding-top: 10px;
            }

            .service-image img {
                max-width: 95%;
                transform: scale(1.15);
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
            width: 100%;
            height: 100%;
            object-fit: contain;
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
                height: 140px !important;
                padding-top: 10px;
            }

            .service-image img {
                max-width: 85%;
                transform: scale(1.2);
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
                max-width: 85%;
                transform: scale(1.2) !important;
            }

            .service-cards:hover .service-image img {
                transform: scale(1.3) !important;
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
                height: 130px !important;
            }

            .service-image img {
                max-width: 90%;
                transform: scale(1.25) !important;
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

            .service-image img {
                max-width: 85%;
                transform: scale(1.1);
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
    </style>
</head>

<body class="bg-gray-50">
    <!-- شاشة تحميل -->
    <div id="loadingScreen" class="loading-screen">
        <div class="text-center">
            <div class="w-16 h-16 border-4 border-blue-500 border-t-transparent rounded-full animate-spin mx-auto mb-4"></div>
            <p class="text-gray-600">جاري التحميل...</p>
        </div>
    </div>

    <!-- قسم منحني فاخر -->
    <div class="curved-div"></div>

    <!-- قسم البحث والمسار -->
    <section class="py-8 -mt-20 relative z-10">
        <div class="container mx-auto px-4">
            <div class="search-container mb-10">
                <div class="flex flex-col md:flex-row gap-6 items-center justify-between">
                    <!-- المسار -->
                    <div class="breadcrumb text-sm">
                        <span><a href="/pioneerway/index.php#services">الرئيسية</a></span> / <span><?php echo $pageTitle; ?></span>
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
                    <!-- تبويب "الكل" -->
                    <button class="tab-btn active flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="all">
                        <div class="w-25 h-25 rounded-full bg-gradient-to-br from-blue-200 to-purple-200 flex items-center   mb-3">
                            <img src="/pioneerway/image/groups/all.png" alt="الكل"
                                class="w-25 h-25 object-contain"
                                onerror="this.src='/pioneerway/image/logo2.png'">
                        </div>
                        <span class="text-sm font-medium text-center">الكل</span>
                    </button>

                    <!-- تبويبات المجموعات الديناميكية -->
                    <?php foreach ($groups as $group): ?>
                        <button class="tab-btn flex flex-col items-center p-4 rounded-2xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 w-28" data-category="<?php echo htmlspecialchars($group); ?>">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mb-3">
                                <img src="<?php echo getGroupImagePath($group, $section); ?>"
                                    alt="<?php echo htmlspecialchars($group); ?>"
                                    class="w-15 h-15 object-contain"
                                    onerror="this.src='<?php echo getDefaultGroupImage($section); ?>'">
                            </div>
                            <span class="text-sm font-medium text-center"><?php echo $group; ?></span>
                        </button>
                    <?php endforeach; ?>
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
           بيانات الخدمات الديناميكية
        =========================== */
        const services = <?php echo json_encode($services, JSON_UNESCAPED_UNICODE); ?>;

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
                    <div class="col-span-full text-center py-12">
                        <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
                        <h3 class="text-xl font-bold text-gray-600 mb-2">لم نعثر على نتائج</h3>
                        <p class="text-gray-500">جرب كلمات بحث مختلفة أو فئة أخرى</p>
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
                    <span price-tag class="text-2xl">${service.price}</span>
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

            // إخفاء شاشة التحميل وإظهار المحتوى بعد تحميل كل شيء
            setTimeout(() => {
                document.body.classList.add('page-loaded');
                document.getElementById('loadingScreen').classList.add('hidden');
            }, 300);

            console.log('✅ التطبيق تم تهيئته بنجاح - جميع الخدمات معروضة مباشرة');
        }

        // تشغيل التطبيق عند تحميل الصفحة
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initializeApp);
        } else {
            initializeApp();
        }
    </script>
    
    <?php include 'footer.php'; ?>

    <script src="/pioneerway/script.js" defer></script>
</body>

</html>