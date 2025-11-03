   <header class="bg-white shadow-md fixed top-0 w-full z-50">
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
           <!-- شعار الشركة -->
           <a href="/pioneerway/index.php" class="flex items-center gap-3">
               <img src="/pioneerway/image/logo.png" alt="شعار" class="h-10 w-auto">
               <div class="text-xl font-bold text-blue-600">طريق الريادة</div>
           </a>

           <!-- قائمة سطح المكتب -->
           <nav class="hidden md:flex space-x-4 space-x-reverse items-center">
               <!-- الرئيسية -->
               <a href="/pioneerway/index.php"
                   class="flex items-center text-gray-700 hover:text-blue-600 transition duration-300 px-3 py-2">
                   <i class="fas fa-house ml-1 text-blue-500"></i>
                   الرئيسية
               </a>

               <!-- من نحن -->
               <a href="/pioneerway/index.php#about"
                   class="flex items-center text-gray-700 hover:text-blue-600 transition duration-300 px-3 py-2">
                   <i class="fas fa-user ml-1 text-blue-500"></i>
                   من نحن
               </a>

               <!-- خدماتنا - قائمة منسدلة -->
               <div class="dropdown-group relative">
                   <button
                       class="flex items-center text-gray-700 hover:text-blue-600 transition duration-300 px-3 py-2">
                       <i class="fas fa-briefcase ml-1 text-blue-500"></i>
                       خدماتنا
                       <i class="fas fa-chevron-down mr-2 text-xs"></i>
                   </button>
                   <div
                       class="dropdown-menu absolute top-full right-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-200 opacity-0 invisible transition-all duration-300 transform translate-y-2">

                       <!-- خدمات التجارة والعمل الحر -->
                       <a href="business-services.php"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-briefcase ml-3 text-blue-500"></i>
                           خدمات التجارة والعمل الحر
                       </a>

                       <!-- الخدمات الإبداعية والتسويقية -->
                       <a href="design-services.php"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-paint-brush ml-3 text-blue-500"></i>
                           الخدمات الإبداعية والتسويقية
                       </a>

                       <!-- الخدمات البرمجية -->
                       <a href="programming-services.php"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-code ml-3 text-blue-500"></i>
                           الخدمات البرمجية
                       </a>

                       <!-- الخدمات المكتبية -->
                       <a href="office-services.php"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-file-alt ml-3 text-blue-500"></i>
                           الخدمات المكتبية
                       </a>

                        <!--خدمات الدعم والتمويل -->
                       <a href="support-services.php"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-hand-holding-dollar ml-3 text-blue-500"></i>
                           خدمات الدعم والتمويل
                       </a>

                       <!-- الخدمات الحكومية -->
                       <a href="government-services.php"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200">
                           <i class="fas fa-landmark ml-3 text-blue-500"></i>
                           الخدمات الحكومية - السعودية
                       </a>
                   </div>

               </div>

               <!-- أعمالنا - قائمة منسدلة -->
               <div class="dropdown-group relative">
                   <button
                       class="flex items-center text-gray-700 hover:text-blue-600 transition duration-300 px-3 py-2">
                       <i class="fas fa-th-large ml-1 text-blue-500"></i>
                       أعمالنا
                       <i class="fas fa-chevron-down mr-2 text-xs"></i>
                   </button>
                   <div
                       class="dropdown-menu absolute top-full right-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-200 opacity-0 invisible transition-all duration-300 transform translate-y-2">
                       <a href="/pioneerway/index.php#portfolio"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-briefcase ml-3 text-blue-500"></i>
                           مشاريعنا
                       </a>
                       <a href="/pioneerway/index.php#testimonials"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200">
                           <i class="fas fa-star ml-3 text-blue-500"></i>
                           شهادات العملاء
                       </a>
                   </div>
               </div>

               <!-- عن الشركة - قائمة منسدلة -->
               <div class="dropdown-group relative">
                   <button
                       class="flex items-center text-gray-700 hover:text-blue-600 transition duration-300 px-3 py-2">
                       <i class="fas fa-building ml-1 text-blue-500"></i>
                       عن الشركة
                       <i class="fas fa-chevron-down mr-2 text-xs"></i>
                   </button>
                   <div
                       class="dropdown-menu absolute top-full right-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-gray-200 opacity-0 invisible transition-all duration-300 transform translate-y-2">
                       <a href="/pioneerway/index.php#team"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-users ml-3 text-blue-500"></i>
                           فريقنا
                       </a>
                       <a href="/pioneerway/index.php#about-us"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200 border-b border-gray-100">
                           <i class="fas fa-book-open ml-3 text-blue-500"></i>
                           قصتنا
                       </a>
                       <a href="/pioneerway/index.php#faq"
                           class="flex items-center px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition duration-200">
                           <i class="fas fa-question-circle ml-3 text-blue-500"></i>
                           الأسئلة الشائعة
                       </a>
                   </div>
               </div>

               <!-- المدونة -->
               <a href="blog.php"
                   class="flex items-center text-gray-700 hover:text-blue-600 transition duration-300 px-3 py-2">
                   <i class="fas fa-blog ml-1 text-blue-500"></i>
                   المدونة
               </a>

               <!-- تواصل معنا -->
               <a href="/pioneerway/index.php#contact"
                   class="flex items-center text-gray-700 hover:text-blue-600 transition duration-300 px-3 py-2">
                   <i class="fas fa-envelope ml-1 text-blue-500"></i>
                   تواصل معنا
               </a>
           </nav>

           <!-- زر القائمة الجانبية للموبايل -->
           <button id="menu-btn" class="md:hidden focus:outline-none">
               <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
               </svg>
           </button>
       </div>
   </header>

   <!-- القائمة الجانبية للموبايل -->
   <div class="mobile-menu" id="mobile-menu">
       <button style="color: white; font-size: 30px; position: absolute; top: 10px; left: 10px;" class="close-menu"
           id="close-menu">
           <i class="fas fa-times"></i>
       </button>
       <a href="/pioneerway/index.php">
           <i class="fas fa-house"></i>
           الرئيسية
       </a>
       <a href="business-services.php">
           <i class="fas fa-user"></i>
           خدمات التجارة والعمل الحر
       </a>
       <a href="design-services.php">
           <i class="fas fa-user"></i>
           الخدمات الإبداعية والتسويقية
       </a>
       <a href="programming-services.php">
           <i class="fas fa-briefcase"></i>
           الخدمات البرمجية
       </a>
       <a href="office-services.php">
           <i class="fas fa-briefcase"></i>
           الخدمات المكتبية
       </a>
        <a href="support-services.php">
           <i class="fas fa-briefcase"></i>
           خدمات الدعم والتمويل
       </a>
       <a href="government-services.php">
           <i class="fas fa-briefcase"></i>
           الخدمات الحكومية - السعودية
       </a>
       <a href="blog.php">
           <i class="fas fa-briefcase"></i>
           المدونة
       </a>
   </div>

   <!-- طبقة التعتيم -->
   <div class="overlay" id="overlay"></div>