<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>طريق الريادة - حلول التجارة الإلكترونية المتكاملة</title>
    <meta name="description"
        content="طريق الريادة تقدم حلولاً ذكية ومتكاملة للتجارة الإلكترونية، تصميم متاجر إلكترونية، وخدمات تسويق رقمي تساعدك على النجاح في السوق السعودي والخليجي.">
    <meta name="keywords"
        content="تجارة إلكترونية, تصميم متجر, طريق الريادة, حلول متاجر, بوابة دفع, متجر الكتروني, السعودية, الخليج, ريادة أعمال, تسويق رقمي">
    <meta name="author" content="شركة طريق الريادة">
    <link rel="icon" href="image\logo.png" type="image/x-icon">
    <meta property="og:title" content="طريق الريادة | حلول التجارة الإلكترونية">
    <meta property="og:description" content="نساعدك في إطلاق متجرك الإلكتروني باحتراف. من التصميم حتى الدفع والتسويق.">
    <meta property="og:type" content="website">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <link rel="stylesheet" href="style.css">
</head>



<body>

    <!-- الترويسة -->
    <?php include 'header.php'; ?>



    <!-- واجهة رئيسية -->
    <section class="hero-section" id="home">
        <div class="hero-bg"></div>

        <div class="hero-container hero-flex">
            <!-- نص الواجهة -->
            <div class="hero-content">

                <div class="hero-badge animate__animated animate__fadeInDown" data-aos="fade-down">
                    <i class="fas fa-rocket"></i> الشركة الرائدة في حلول التجارة الإلكترونية
                </div>

                <h1 class="hero-title animate__animated animate__fadeInUp" data-aos="fade-up">
                    طريق الريادة<br>
                    <span style="font-size: 2.5rem; display: block; margin-top: 10px;">لتحويل أفكارك إلى واقع
                        ملموس</span>
                </h1>

                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                    نقدم حلولاً متكاملة تجمع بين الإبداع والتكنولوجيا لبناء متاجر إلكترونية استثنائية تنمو مع طموحاتك.
                </p>

                <ul class="hero-features" data-aos="fade-up" data-aos-delay="400">
                    <li><i class="fas fa-check"></i> تصميم متاجر احترافية بتجربة مستخدم استثنائية</li>
                    <li><i class="fas fa-check"></i> حلول تسويقية تزيد مبيعاتك بنسبة تصل إلى 200%</li>
                    <li><i class="fas fa-check"></i> دعم فني مستمر وخطط نمو طويلة المدى</li>
                </ul>

                <div class="hero-buttons" data-aos="zoom-in" data-aos-delay="600">
                    <a href="#services" class="btn-primary">
                        <i class="fas fa-play-circle"></i> ابدأ مشروعك الآن
                    </a>
                    <a href="#portfolio" class="btn-secondary">
                        <i class="fas fa-eye"></i> شاهد أعمالنا
                    </a>
                </div>
            </div>

            <!-- صورة المؤسس -->
            <div class="hero-image" data-aos="fade-left">
                <img src="image\misk main.png" alt="مؤسس الشركة" />
            </div>
        </div>

        <div class="scroll-indicator animate__animated animate__bounce" data-aos="fade-up" data-aos-delay="800">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>


    <!-- قسم الخدمات -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>خدماتنا المتكاملة</h2>
                <p>نقدم مجموعة شاملة من الخدمات التي تغطي جميع جوانب التجارة الإلكترونية</p>
            </div>
            <div class="services-grid">

                <a href="business-services.php" class="service-card">
                    <div class="service-icon"><i class="fas fa-store"></i></div>
                    <h3>خدمات التجارة والعمل الحر</h3>
                    <p>نوفر لك متاجر إلكترونية احترافية جاهزة للانطلاق والربح.</p>
                </a>

                <a href="marketing.html" class="service-card">
                    <div class="service-icon"><i class="fas fa-bullhorn"></i></div>
                    <h3>الخدمات الإبداعية والتسويقية</h3>
                    <p>حملات تسويقية مبتكرة لإبراز مشروعك وزيادة مبيعاتك.</p>
                </a>

                <a href="programming-services.php" class="service-card">
                    <div class="service-icon"><i class="fas fa-code"></i></div>
                    <h3>الخدمات البرمجية</h3>
                    <p>تطوير مواقع وتطبيقات مخصصة بأحدث التقنيات.</p>
                </a>

                <a href="office.html" class="service-card">
                    <div class="service-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>الخدمات المكتبية</h3>
                    <p>إعداد مستندات وتقارير احترافية بأعلى جودة.</p>
                </a>

            </div>

        </div>
    </section>

    <!-- قسم الإحصائيات -->
    <?php include 'section/statistics.php'; ?>
   

    <!-- قسم خطوات العمل  -->
    <section class="work-steps" id="work-steps">
        <div class="container">
            <div class="section-title">
                <h2>كيف نعمل</h2>
                <p>رحلة نجاح متجرك الإلكتروني تبدأ بخطوات بسيطة ومحكمة</p>
            </div>
            <div class="steps-container">
                <div class="step-card fade-in">
                    <div class="step-number">1</div>
                    <h3>الاستشارة والتخطيط</h3>
                    <p>نبدأ بفهم احتياجاتك وأهدافك لتخطيط استراتيجية متكاملة تناسب مشروعك</p>
                </div>
                <div class="step-card fade-in">
                    <div class="step-number">2</div>
                    <h3>التصميم والتطوير</h3>
                    <p>نصمم متجرك الإلكتروني بتقنيات حديثة تجمع بين الجمال والوظائف</p>
                </div>
                <div class="step-card fade-in">
                    <div class="step-number">3</div>
                    <h3>الاختبار والتجربة</h3>
                    <p>نختبر كل تفاصيل المتجر لضمان تجربة مستخدم سلسة وخالية من الأخطاء</p>
                </div>
                <div class="step-card fade-in">
                    <div class="step-number">4</div>
                    <h3>الإطلاق والدعم</h3>
                    <p>نطلق متجرك وندعمك بشكل مستمر لضمان نجاحه ونموه المستمر</p>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم من نحن -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2 class="fade-in">من نحن</h2>
                    <p class="fade-in">"طريق الريادة" هي شركة رائدة في مجال حلول التجارة الإلكترونية، تأسست برؤية واضحة
                        لتمكين الشركات والأفراد من تحقيق النجاح في العالم الرقمي.</p>
                    <p class="fade-in">نحن نؤمن بأن نجاح متجرك الإلكتروني لا يعتمد فقط على التصميم الجذاب، بل على
                        استراتيجية متكاملة تشمل التطوير، الإدارة، والتسويق الفعال.</p>

                    <div class="vision-mission">
                        <div class="vision fade-in">
                            <h3><i class="fas fa-eye"></i> رؤيتنا</h3>
                            <p>أن نكون الشريك المفضل في رحلة التحول الرقمي للشركات في المملكة العربية السعودية، وأن
                                نساهم في بناء
                                جيل من رواد الأعمال الرقميين.</p>
                        </div>
                        <div class="mission fade-in">
                            <h3><i class="fas fa-bullseye"></i> رسالتنا</h3>
                            <p>تقديم حلول تجارة إلكترونية مبتكرة وشاملة تساعد عملائنا على النمو والازدهار في السوق
                                الرقمية التنافسية.</p>
                        </div>
                    </div>
                </div>
                <div class="about-image fade-in">
                    <!-- يمكن إضافة صورة هنا -->
                    <div
                        style="background: var(--gradient-primary); height: 500px; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--white); font-size: 1.2rem;">
                        <div style="text-align: center; padding: 20px;">
                            <i class="fas fa-users" style="font-size: 3rem; margin-bottom: 20px; display: block;"></i>
                            فريق طريق الريادة المحترف
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم قصتنا-->
    <section class="about-us" id="about-us">
        <div class="container">
            <div class="section-title">
                <h2>قصتنا</h2>
                <p>من فكرة طموحة إلى شريك موثوق في عالم التجارة الإلكترونية</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        بدأت رحلتنا بشغف حقيقي لصناعة بيئة متكاملة تدعم رواد الأعمال الطموحين في دخول عالم التجارة
                        الإلكترونية بثقة واستعداد.
                        رأينا التحديات التي يواجهها الكثيرون في الانطلاقة، من تأسيس المتجر وبناء الهوية، إلى توريد
                        المنتجات وتسويقها باحتراف.
                        ومن هنا، نشأت رسالتنا: أن نكون الشريك الذي يحوّل الأفكار إلى واقع، والطموحات إلى إنجازات.
                    </p>

                    <p>
                        نقدم منظومة خدمات متكاملة تبدأ من بناء المتاجر الإلكترونية عبر منصات <strong>سلة</strong>
                        و<strong>زد</strong>، وتشمل إدارة وتشغيل العمليات، صياغة المحتوى التسويقي الجاذب، تصميم الهويات
                        البصرية الاحترافية، وحتى التوريد من الصين بخبرة لوجستية عالية.
                        كل ذلك مدعوم باستشارات عملية وتدريب ريادي يمكّن عملاءنا من النمو بثبات في سوق متسارع التغير.
                    </p>

                    <p>
                        نحن لا نقدّم حلولاً مؤقتة، بل نبني شراكات طويلة الأمد تُثمر نتائج ملموسة وتُحدث فرقًا حقيقيًا في
                        أعمال عملائنا.
                        نجاحنا لا يُقاس بعدد المشاريع، بل بقصص النجاح التي نشارك فيها، وبالعلامات التجارية التي ساعدناها
                        على التميّز والبروز.
                    </p>

                    <p>
                        نؤمن أن لكل مشروع قصة تستحق أن تُروى، ولكل رائد أعمال حلم يستحق أن يُصنع. ونحن هنا لنكتب تلك
                        القصة معًا... بخبرة، واحتراف، وشغف.
                    </p>
                </div>

                <div class="about-image">
                    <img src="image\story.png" alt="قصتنا">
                </div>
            </div>
        </div>
    </section>

    <!-- قسم فريق العمل  -->
    <section class="team" id="team">
        <div class="container">
            <div class="section-title">
                <h2>فريقنا</h2>
                <p>نمتلك فريقاً متكاملاً من الخبراء المتخصصين في إنشاء وتشغيل وتسويق المتاجر الإلكترونية، من الفكرة حتى
                    النجاح</p>
            </div>
            <div class="team-grid">

                <!-- مديرة المشاريع + استشارات ريادية -->
                <div class="team-member fade-in">
                    <div class="member-img">
                        <img src="image\team1.jpg" alt="مديرة المشاريع">
                    </div>
                    <div class="member-info">
                        <h3>مسك الختام عمر</h3>
                        <div class="member-role">مديرة المشاريع والاستشارات</div>
                        <p>تشرف على تنفيذ المشاريع التجارية باحترافية، وتقدّم استشارات ريادية وتدريب عملي لأصحاب المتاجر
                            لتحقيق نمو مستدام.</p>
                    </div>
                </div>

                <!-- مطور متاجر سلة وزد -->
                <div class="team-member fade-in">
                    <div class="member-img">
                        <img src="image\team2.jpg" alt="مطور متاجر">
                    </div>
                    <div class="member-info">
                        <h3> عبدالله خليل</h3>
                        <div class="member-role">مطور متاجر إلكترونية</div>
                        <p>خبير في تطوير المتاجر الإلكترونية عبر "سلة" و"زد"، ويقديم حلول تقنية مخصصة تتماشى مع متطلبات
                            السوق السعودي.</p>
                    </div>
                </div>

                <!-- أخصائي التوريد من الصين -->
                <div class="team-member fade-in">
                    <div class="member-img">
                        <img src="image\team3.jpg" alt="">
                    </div>
                    <div class="member-info">
                        <h3>Novak wei zhang</h3>
                        <div class="member-role">أخصائي التوريد والاستيراد</div>
                        <p>يُشرف على عمليات الاستيراد من الصين، بدءًا من اختيار الموردين وحتى الشحن والتوصيل داخل
                            المملكة بجودة وتكلفة تنافسية.</p>
                    </div>
                </div>

                <!-- خبيرة التسويق -->
                <div class="team-member fade-in">
                    <div class="member-img">
                        <img src="images/team/marketing-expert.jpg" alt="">
                    </div>
                    <div class="member-info">
                        <h3> أأأأأأأأ</h3>
                        <div class="member-role">خبير التسويق الرقمي</div>
                        <p>يخطط وينفذ استراتيجيات تسويقية رقمية فعّالة لرفع الوعي بالعلامة التجارية وتحقيق نتائج
                            ملموسة في المبيعات.</p>
                    </div>
                </div>

                <!-- كاتب محتوى ومصمم هوية -->
                <div class="team-member fade-in">
                    <div class="member-img">
                        <img src="images/team/content-designer.jpg" alt="">
                    </div>
                    <div class="member-info">
                        <h3> أأأأأأأأ</h3>
                        <div class="member-role">كاتب محتوى ومصمم هوية</div>
                        <p>يبدع في صياغة محتوى تسويقي احترافي وتصميم هويات بصرية متكاملة تعبّر عن رسالة علامتك التجارية
                            بأسلوب جذّاب وموثوق.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- قسم الأعمال -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="section-title">
                <h2>أعمالنا</h2>
                <p>إليك بعض المشاريع الناجحة التي نفخر بها</p>
            </div>
            <div class="portfolio-grid">
                <div class="portfolio-item fade-in">
                    <div class="portfolio-img">متجر الأزياء الراقية</div>
                    <div class="portfolio-content">
                        <h3>متجر الأزياء الراقية</h3>
                        <p>تصميم وتطوير متجر إلكتروني متكامل لعلامة أزياء رائدة، مع حلول دفع إلكتروني آمنة وتجربة مستخدم
                            استثنائية.</p>
                    </div>
                </div>
                <div class="portfolio-item fade-in">
                    <div class="portfolio-img">متجر ميرامسك</div>
                    <div class="portfolio-content">
                        <h3>متجر ميرا مسك</h3>
                        <p>تصميم متجر إلكتروني متخصص في عرض وبيع إكسسوارات بديل الذهب الأصلي بجودة عالية وتصاميم عصرية،
                            مع تجربة تسوّق سهلة وآمنة.</p>
                    </div>
                </div>

                <div class="portfolio-item fade-in">
                    <div class="portfolio-img">متجر الأدوات المنزلية</div>
                    <div class="portfolio-content">
                        <h3>متجر الأدوات المنزلية</h3>
                        <p>تصميم متجر إلكتروني سهل الاستخدام لبيع الأدوات المنزلية، مع نظام طلبات وتوصيل متكامل.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- قسم العروض الخاصة  -->
    <section class="offers" id="offers">
        <div class="container">
            <div class="section-title">
                <h2>باقات العروض الريادية </h2>
                <p>باقات مصممة خصيصاً لتناسب احتياجاتك</p>
            </div>
            <div class="offers-grid">
                <div class="offer-card fade-in">
                    <div class="offer-badge">الأساسية</div>
                    <h3>بداية المشروع</h3>
                    <div class="offer-price">999 ريال</div>
                    <ul class="offer-features">
                        <li><i class="fas fa-check"></i> تصميم متجر احترافي</li>
                        <li><i class="fas fa-check"></i> 10 منتجات أساسية</li>
                        <li><i class="fas fa-check"></i> تدريب على الاستخدام</li>
                        <li><i class="fas fa-times"></i> تسويق إلكتروني</li>
                        <li><i class="fas fa-times"></i> دعم فني لمدة سنة</li>
                    </ul>
                    <a href="#contact" class="cta-button">اختر الباقة</a>
                </div>
                <div class="offer-card featured fade-in">
                    <div class="offer-badge">الأكثر طلباً</div>
                    <h3>المتكاملة</h3>
                    <div class="offer-price">1499 ريال</div>
                    <ul class="offer-features">
                        <li><i class="fas fa-check"></i> تصميم متجر متكامل</li>
                        <li><i class="fas fa-check"></i> عدد غير محدود من المنتجات</li>
                        <li><i class="fas fa-check"></i> تدريب متقدم</li>
                        <li><i class="fas fa-check"></i> خطة تسويق لمدة 3 أشهر</li>
                        <li><i class="fas fa-check"></i> دعم فني لمدة سنة</li>
                    </ul>
                    <a href="#contact" class="cta-button">اختر الباقة</a>
                </div>
                <div class="offer-card fade-in">
                    <div class="offer-badge">المتقدمة</div>
                    <h3>الريادية</h3>
                    <div class="offer-price">1999 ريال</div>
                    <ul class="offer-features">
                        <li><i class="fas fa-check"></i> تصميم متجر فاخر</li>
                        <li><i class="fas fa-check"></i> منتجات غير محدودة</li>
                        <li><i class="fas fa-check"></i> تدريب وإدارة فريق</li>
                        <li><i class="fas fa-check"></i> خطة تسويق لمدة 6 أشهر</li>
                        <li><i class="fas fa-check"></i> دعم فني لمدة سنتين</li>
                    </ul>
                    <a href="#contact" class="cta-button">اختر الباقة</a>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم الشهادات  -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2 style="color: wheat;">ماذا يقول عملاؤنا</h2>
                <p style="color: wheat;">ثقة عملائنا هي شهادتنا الحقيقية</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card fade-in">
                    <div class="testimonial-text">
                        "فريق طريق الريادة حول فكرتي إلى متجر إلكتروني احترافي تجاوز توقعاتي. الدعم المستمر والاحترافية
                        في العمل جعلوا التجربة رائعة."
                    </div>
                    <div class="client-info">
                        <div class="client-avatar">م</div>
                        <div class="client-details">
                            <h4>محمد العتيبي</h4>
                            <span>متجر إلكتروني للأزياء</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="testimonial-text">
                        "منذ إطلاق متجري مع طريق الريادة، زادت مبيعاتي بنسبة 200%. الاستراتيجية التسويقية كانت مذهلة
                        والدعم الفني سريع ومحترف."
                    </div>
                    <div class="client-info">
                        <div class="client-avatar">س</div>
                        <div class="client-details">
                            <h4>سلمى القحطاني</h4>
                            <span>متجر مستحضرات تجميل</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card fade-in">
                    <div class="testimonial-text">
                        "المهنية والالتزام بالمواعيد من أهم ما يميز فريق طريق الريادة. متجري الآن يعمل بشكل مثالي
                        والعملاء سعداء بتجربة التسوق."
                    </div>
                    <div class="client-info">
                        <div class="client-avatar">خ</div>
                        <div class="client-details">
                            <h4>خالد الحربي</h4>
                            <span>متجر أدوات منزلية</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم المدونة -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="section-title">
                <h2>مدونة طريق الريادة</h2>
                <p>أحدث النصائح والمقالات في عالم التجارة الإلكترونية</p>
            </div>
            <div class="blog-grid">

                <!-- المقالة الأولى -->
                <div class="blog-card fade-in">
                    <div class="blog-img">
                        <img src="image\blog1.jpg" alt="زيادة المبيعات">
                    </div>
                    <div class="blog-content">
                        <h3>5 استراتيجيات لزيادة مبيعات متجرك الإلكتروني</h3>
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i> 10 مايو 2025</span>
                            <span><i class="far fa-folder"></i> نصائح تسويقية</span>
                        </div>
                        <p>اكتشف أهم الاستراتيجيات الفعالة لزيادة مبيعات متجرك الإلكتروني وتحقيق نمو مستمر في أرباحك.
                        </p>
                        <a href="#" class="read-more" data-title="5 استراتيجيات لزيادة مبيعات متجرك الإلكتروني"
                            data-date="10 مايو 2025" data-category="نصائح تسويقية" data-image="image\blog1.jpg"
                            data-content="إليك 5 استراتيجيات فعالة لزيادة مبيعات متجرك الإلكتروني:
               1. تحسين وصف المنتج والصور.
               2. استخدام التسويق عبر البريد الإلكتروني.
               3. تقديم عروض حصرية.
               4. تحسين تجربة المستخدم وسرعة الموقع.
               5. إطلاق حملات إعلانية مدفوعة باحترافية.">اقرأ المزيد <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>

                <!-- المقالة الثانية -->
                <div class="blog-card fade-in">
                    <div class="blog-img">
                        <img src="image\blog2.webp" alt="اتجاهات 2025">
                    </div>
                    <div class="blog-content">
                        <h3>أهم اتجاهات التجارة الإلكترونية في 2025</h3>
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i> 25 أبريل 2025</span>
                            <span><i class="far fa-folder"></i> اتجاهات تقنية</span>
                        </div>
                        <p>تعرف على أحدث الاتجاهات والتقنيات التي ستشكل مستقبل التجارة الإلكترونية في العام الحالي.</p>
                        <a href="#" class="read-more" data-title="أهم اتجاهات التجارة الإلكترونية في 2025"
                            data-date="25 أبريل 2025" data-category="اتجاهات تقنية" data-image="image\blog2.webp"
                            data-content="من أبرز اتجاهات التجارة الإلكترونية في 2025:
               - اعتماد الذكاء الاصطناعي لتحسين تجربة التسوق.
               - استخدام الواقع المعزز AR لعرض المنتجات.
               - نمو التجارة عبر الشبكات الاجتماعية.
               - الدفع عبر المحافظ الرقمية والعملات المشفرة.
               - التركيز على الاستدامة والتغليف الصديق للبيئة.">اقرأ المزيد <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>

                <!-- المقالة الثالثة -->
                <div class="blog-card fade-in">
                    <div class="blog-img">
                        <img src="image\blog3.jpg" alt="اختيار المنصة">
                    </div>
                    <div class="blog-content">
                        <h3>كيف تختار المنصة المناسبة لمتجرك الإلكتروني؟</h3>
                        <div class="blog-meta">
                            <span><i class="far fa-calendar"></i> 15 أبريل 2025</span>
                            <span><i class="far fa-folder"></i> أدوات وتقنيات</span>
                        </div>
                        <p>دليل شامل لمساعدتك في اختيار منصة التجارة الإلكترونية المناسبة لاحتياجات عملك وميزانيتك.</p>
                        <a href="#" class="read-more" data-title="كيف تختار المنصة المناسبة لمتجرك الإلكتروني؟"
                            data-date="15 أبريل 2025" data-category="أدوات وتقنيات" data-image="image\blog3.jpg"
                            data-content="عند اختيار منصة التجارة الإلكترونية، يجب أن تسأل نفسك:
               - هل أحتاج إلى واجهة سهلة أم مرنة للبرمجة؟
               - كم عدد المنتجات التي سأعرضها؟
               - ما هي طرق الدفع التي أحتاجها؟
              منصات مثل سلة مناسبة للمبتدئين لأنها سهلة الاستخدام وتوفر كل الأدوات اللي تحتاجها، بينما WooCommerce تعطيك تحكمًا أكبر إذا كنت مرتاحًا تقنيًا وتحب التخصيص العميق.">اقرأ
                            المزيد <i class="fas fa-arrow-left"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- قسم اتصل بنا -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>اتصل بنا</h2>
                <p>نحن هنا لمساعدتك في تحقيق نجاح متجرك الإلكتروني</p>
            </div>
            <div class="contact-container">
                <div class="contact-form fade-in">

                    <form id="contactForm" action="https://formspree.io/f/mrbyjprz" method="POST">
                        <div class="form-group">
                            <label for="name">الاسم الكامل</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">البريد الإلكتروني</label>
                            <input type="email" id="email" name="_replyto" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="service">الخدمة المطلوبة</label>
                            <select id="service" name="service" required>
                                <option value="">اختر الخدمة</option>
                                <option value="store-creation">إنشاء متجر إلكتروني</option>
                                <option value="store-management">إدارة متجر إلكتروني</option>
                                <option value="marketing">التسويق الإلكتروني</option>
                                <option value="branding">تصميم الهوية التجارية</option>
                                <option value="consultation">الاستشارات والتدريب</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">الرسالة</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="cta-button">إرسال الرسالة</button>
                    </form>

                    <!-- شاشة الشكر المنبثقة مخفية افتراضياً -->
                    <div id="thankYouPopup" style="display:none; position:fixed; top:0; left:0; 
width:100%; height:100%; background:rgba(0,0,0,0.5); 
justify-content:center; align-items:center; z-index:9999;">

                        <div
                            style="background:#fff; padding:20px; border-radius:8px; max-width:400px; text-align:center;">
                            <h2>شكراً لك!</h2>
                            <p>تم استلام رسالتك بنجاح، سنتواصل معك قريبًا.</p>
                            <button id="closePopupBtn">إغلاق</button>
                        </div>
                    </div>

                    <!-- عنصر اللودينق مخفي افتراضياً -->
                    <div id="loading" style="display:none; position:fixed; top:0; left:0; 
width:100%; height:100%; background:rgba(255,255,255,0.7);
justify-content:center; align-items:center; z-index:9998;">
                        <div style="border: 8px solid #f3f3f3; border-top: 8px solid #3498db; 
    border-radius: 50%; width: 60px; height: 60px; animation: spin 1s linear infinite;"></div>
                    </div>


                </div>
                <div class="contact-info">
                    <div class="contact-item fade-in">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-details">
                            <h3>عنواننا</h3>
                            <p>جدة، المملكة العربية السعودية</p>
                            <p>حي الصفا، شارع الممراح</p>
                        </div>
                    </div>
                    <div class="contact-item fade-in">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-details">
                            <h3>هاتفنا</h3>
                            <p dir="ltr">+966 5355 22119</p>
                        </div>
                    </div>
                    <div class="contact-item fade-in">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-details">
                            <h3>بريدنا الإلكتروني</h3>
                            <p>Pioneerway2030@gmail.com</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="https://www.youtube.com/@PioneerWay2030" target="_blank" rel="noopener noreferrer"
                            aria-label="يوتيوب">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a href="https://www.instagram.com/pioneerway2030" target="_blank" rel="noopener noreferrer"
                            aria-label="إنستجرام">
                            <i class="fab fa-instagram"></i>
                        </a>

                        <a href="https://www.snapchat.com/add/pioneerway2023" target="_blank" rel="noopener noreferrer"
                            aria-label="سناب شات">
                            <i class="fab fa-snapchat"></i>
                        </a>

                        <a href="https://www.tiktok.com/@user9033286002566" target="_blank" rel="noopener noreferrer"
                            aria-label="تيك توك">
                            <i class="fab fa-tiktok"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم الأسئلة الشائعة  -->
    <section class="faq" id="faq">
        <div class="container">
            <div class="section-title">
                <h2>الأسئلة الشائعة</h2>
                <p>إجابات على أكثر الأسئلة شيوعاً</p>
            </div>
            <div class="faq-container">
                <div class="faq-item fade-in">
                    <button class="faq-question">
                        كم تستغرق مدة إنشاء المتجر الإلكتروني؟
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>تتراوح مدة إنشاء المتجر الإلكتروني بين 2 إلى 6 أسابيع حسب تعقيد المشروع والخدمات المطلوبة.
                            نحرص على التسليم في الوقت المتفق عليه مع الحفاظ على أعلى معايير الجودة.</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question">
                        هل تدعمون خدمات ما بعد الإطلاق؟
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>نعم، نقدم حزمة دعم شاملة تشمل الصيانة الدورية، التحديثات، النسخ الاحتياطي، والدعم الفني
                            المستمر لضمان استمرارية عمل متجرك بشكل مثالي.</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question">
                        ما هي منصات التجارة الإلكترونية التي تعملون عليها؟
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>نعمل على جميع المنصات الرائدة مثل Shopify , زد , سله . ننصحك بأفضل منصة
                            تناسب احتياجاتك وميزانيتك.</p>
                    </div>
                </div>
                <div class="faq-item fade-in">
                    <button class="faq-question">
                        هل يمكنني إدارة المتجر بنفسي بعد التسليم؟
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>بالتأكيد، نسلمك المتجر مع لوحة تحكم سهلة الاستخدام، بالإضافة إلى جلسات تدريبية لتمكينك من
                            إدارة متجرك باحترافية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- التذييل -->
        <?php include 'footer.php'; ?>


    <!-- النافذة المنبثقة -->
    <div id="blog-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn" id="modal-close">&times;</span>
            <img id="modal-image" src="" alt="صورة المقال" />
            <h2 id="modal-title"></h2>
            <div class="modal-meta">
                <span id="modal-date"></span> | <span id="modal-category"></span>
            </div>
            <p id="modal-content"></p>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>