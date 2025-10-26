<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدونة طريق الريادة</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="style.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6C9EFC',
                        secondary: '#6A5E62',
                    },
                    fontFamily: {
                        'tajawal': ['Tajawal', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }
        
        .blog-card {
            transition: all 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #6C9EFC 0%, #6A5E62 100%);
        }
    </style>
</head>
<body class="bg-gray-50 font-tajawal">
     <?php include 'header-services.php'; ?>
    <!-- Header -->
    <header class="gradient-bg text-white mt-8">
        
        <div class="container mx-auto px-4 py-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">مدونة طريق الريادة</h1>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto">
                    أحدث النصائح والمقالات في عالم التجارة الإلكترونية والتسويق الرقمي
                </p>
            </div>
        </div>
    </header>

    <!-- Blog Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- المقالة الأولى -->
                <article class="blog-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl">
                    <div class="relative overflow-hidden">
                        <img src="image/blog1.jpg" alt="زيادة المبيعات" class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">نصائح تسويقية</span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-sm text-secondary mb-3">
                            <span class="flex items-center gap-1">
                                <i class="far fa-calendar text-primary"></i>
                                <span>10 مايو 2025</span>
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="far fa-clock text-primary"></i>
                                <span>5 دقائق قراءة</span>
                            </span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                            5 استراتيجيات لزيادة مبيعات متجرك الإلكتروني
                        </h3>
                        
                        <p class="text-secondary leading-relaxed mb-4">
                            اكتشف أهم الاستراتيجيات الفعالة لزيادة مبيعات متجرك الإلكتروني وتحقيق نمو مستمر في أرباحك.
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <button onclick="openModals(this)" 
                                    class="read-more-btn bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full font-semibold transition-all duration-300 flex items-center gap-2"
                                    data-title="5 استراتيجيات لزيادة مبيعات متجرك الإلكتروني"
                                    data-date="10 مايو 2025" 
                                    data-category="نصائح تسويقية" 
                                    data-image="image/blog1.jpg"
                                    data-content="إليك 5 استراتيجيات فعالة لزيادة مبيعات متجرك الإلكتروني:<br><br>
                                    1. <strong>تحسين وصف المنتج والصور:</strong> استخدم صور عالية الجودة ووصفًا تفصيليًا يجذب العملاء.<br>
                                    2. <strong>التسويق عبر البريد الإلكتروني:</strong> ابق على اتصال مع عملائك وعرفهم بالعروض الجديدة.<br>
                                    3. <strong>تقديم عروض حصرية:</strong> خصومات وعروض ترويجية تشجع على الشراء.<br>
                                    4. <strong>تحسين تجربة المستخدم:</strong> موقع سريع وسهل الاستخدام يزيد من معدلات التحويل.<br>
                                    5. <strong>حملات إعلانية مدفوعة:</strong> استهداف دقيق للجمهور المناسب يزيد من المبيعات.">
                                اقرأ المزيد
                                <i class="fas fa-arrow-left text-sm"></i>
                            </button>
                            
                            <div class="flex items-center gap-2 text-secondary">
                                <i class="far fa-eye"></i>
                                <span class="text-sm">1.2K</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- المقالة الثانية -->
                <article class="blog-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl">
                    <div class="relative overflow-hidden">
                        <img src="image/blog2.webp" alt="اتجاهات 2025" class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">اتجاهات تقنية</span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-sm text-secondary mb-3">
                            <span class="flex items-center gap-1">
                                <i class="far fa-calendar text-primary"></i>
                                <span>25 أبريل 2025</span>
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="far fa-clock text-primary"></i>
                                <span>7 دقائق قراءة</span>
                            </span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                            أهم اتجاهات التجارة الإلكترونية في 2025
                        </h3>
                        
                        <p class="text-secondary leading-relaxed mb-4">
                            تعرف على أحدث الاتجاهات والتقنيات التي ستشكل مستقبل التجارة الإلكترونية في العام الحالي.
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <button onclick="openModals(this)" 
                                    class="read-more-btn bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full font-semibold transition-all duration-300 flex items-center gap-2"
                                    data-title="أهم اتجاهات التجارة الإلكترونية في 2025"
                                    data-date="25 أبريل 2025" 
                                    data-category="اتجاهات تقنية" 
                                    data-image="image/blog2.webp"
                                    data-content="من أبرز اتجاهات التجارة الإلكترونية في 2025:<br><br>
                                    • <strong>الذكاء الاصطناعي:</strong> تحسين تجربة التسوق الشخصية وتقديم توصيات ذكية.<br>
                                    • <strong>الواقع المعزز (AR):</strong> تجربة افتراضية للمنتجات قبل الشراء.<br>
                                    • <strong>التجارة الاجتماعية:</strong> البيع المباشر عبر منصات التواصل الاجتماعي.<br>
                                    • <strong>المدفوعات الرقمية:</strong> انتشار المحافظ الإلكترونية والعملات المشفرة.<br>
                                    • <strong>الاستدامة:</strong> تركيز المتسوقين على العلامات التجارية الصديقة للبيئة.">
                                اقرأ المزيد
                                <i class="fas fa-arrow-left text-sm"></i>
                            </button>
                            
                            <div class="flex items-center gap-2 text-secondary">
                                <i class="far fa-eye"></i>
                                <span class="text-sm">2.1K</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- المقالة الثالثة -->
                <article class="blog-card bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 hover:shadow-xl">
                    <div class="relative overflow-hidden">
                        <img src="image/blog3.jpg" alt="اختيار المنصة" class="w-full h-48 object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span class="bg-purple-500 text-white px-3 py-1 rounded-full text-sm font-semibold">أدوات وتقنيات</span>
                        </div>
                    </div>
                    
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-sm text-secondary mb-3">
                            <span class="flex items-center gap-1">
                                <i class="far fa-calendar text-primary"></i>
                                <span>15 أبريل 2025</span>
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="far fa-clock text-primary"></i>
                                <span>6 دقائق قراءة</span>
                            </span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">
                            كيف تختار المنصة المناسبة لمتجرك الإلكتروني؟
                        </h3>
                        
                        <p class="text-secondary leading-relaxed mb-4">
                            دليل شامل لمساعدتك في اختيار منصة التجارة الإلكترونية المناسبة لاحتياجات عملك وميزانيتك.
                        </p>
                        
                        <div class="flex items-center justify-between">
                            <button onclick="openModals(this)" 
                                    class="read-more-btn bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full font-semibold transition-all duration-300 flex items-center gap-2"
                                    data-title="كيف تختار المنصة المناسبة لمتجرك الإلكتروني؟"
                                    data-date="15 أبريل 2025" 
                                    data-category="أدوات وتقنيات" 
                                    data-image="image/blog3.jpg"
                                    data-content="عند اختيار منصة التجارة الإلكترونية، يجب أن تسأل نفسك:<br><br>
                                    <strong>1. السهولة مقابل المرونة:</strong><br>
                                    - هل تحتاج واجهة سهلة للمبتدئين؟<br>
                                    - أم تفضل مرونة في البرمجة والتخصيص؟<br><br>
                                    <strong>2. حجم المتجر:</strong><br>
                                    - كم عدد المنتجات التي ستعرضها؟<br>
                                    - ما هو حجم حركة المرور المتوقعة؟<br><br>
                                    <strong>3. طرق الدفع:</strong><br>
                                    - ما هي طرق الدفع التي تحتاجها؟<br>
                                    - هل تدعم الدفع المحلي والدولي؟<br><br>
                                    <strong>التوصيات:</strong><br>
                                    • <strong>سلة:</strong> مثالية للمبتدئين، سهلة الاستخدام.<br>
                                    • <strong>WooCommerce:</strong> مناسبة للمستخدمين التقنيين.<br>
                                    • <strong>Shopify:</strong> حل متكامل مع دعم ممتاز.">
                                اقرأ المزيد
                                <i class="fas fa-arrow-left text-sm"></i>
                            </button>
                            
                            <div class="flex items-center gap-2 text-secondary">
                                <i class="far fa-eye"></i>
                                <span class="text-sm">1.8K</span>
                            </div>
                        </div>
                    </div>
                </article>

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="bg-white text-primary border-2 border-primary hover:bg-primary hover:text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                    <i class="fas fa-plus ml-2"></i>
                    تحميل المزيد من المقالات
                </button>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div id="blogModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden">
            <div class="relative">
                <img id="modalImage" src="" alt="" class="w-full h-64 md:h-80 object-cover">
                <button onclick="closeModals()" class="absolute top-4 left-4 bg-white text-gray-700 hover:text-primary w-10 h-10 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300">
                    <i class="fas fa-times text-lg"></i>
                </button>
                <div class="absolute bottom-4 right-4">
                    <span id="modalCategory" class="bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold"></span>
                </div>
            </div>
            
            <div class="p-6 md:p-8 overflow-y-auto max-h-[60vh]">
                <div class="flex items-center gap-4 text-sm text-secondary mb-4">
                    <span class="flex items-center gap-1">
                        <i class="far fa-calendar text-primary"></i>
                        <span id="modalDate"></span>
                    </span>
                    <span class="flex items-center gap-1">
                        <i class="far fa-folder text-primary"></i>
                        <span id="modalCategoryText"></span>
                    </span>
                </div>
                
                <h2 id="modalTitle" class="text-2xl md:text-3xl font-bold text-gray-900 mb-4"></h2>
                
                <div id="modalContent" class="text-secondary leading-relaxed text-lg space-y-4"></div>
            </div>
            
            <div class="border-t border-gray-200 p-6">
                <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
                    <div class="flex items-center gap-4 text-secondary">
                        <button class="flex items-center gap-2 text-primary hover:text-blue-600 transition-colors duration-300">
                            <i class="far fa-heart"></i>
                            <span>أعجبني</span>
                        </button>
                        <button class="flex items-center gap-2 text-primary hover:text-blue-600 transition-colors duration-300">
                            <i class="far fa-share-square"></i>
                            <span>مشاركة</span>
                        </button>
                    </div>
                    
                    <button onclick="closeModals()" class="bg-primary hover:bg-blue-600 text-white px-6 py-2 rounded-full font-semibold transition-all duration-300 flex items-center gap-2">
                        <i class="fas fa-times"></i>
                        إغلاق
                    </button>
                </div>
            </div>
        </div>
    </div>
     <?php include 'footer.php'; ?>

    <script>
        function openModals(button) {
            const modal = document.getElementById('blogModal');
            const title = button.getAttribute('data-title');
            const date = button.getAttribute('data-date');
            const category = button.getAttribute('data-category');
            const image = button.getAttribute('data-image');
            const content = button.getAttribute('data-content');
            
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDate').textContent = date;
            document.getElementById('modalCategory').textContent = category;
            document.getElementById('modalCategoryText').textContent = category;
            document.getElementById('modalImage').src = image;
            document.getElementById('modalContent').innerHTML = content;
            
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }
        
        function closeModals() {
            const modal = document.getElementById('blogModal');
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
        
        // Close modal when clicking outside
        document.getElementById('blogModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModals();
            }
        });
    </script>
    <script src="script.js"></script>
</body>
</html>