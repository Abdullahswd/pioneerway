        // كود جافا سكريبت للتنقل السلس والتأثيرات
        document.querySelectorAll('nav a, .hero-buttons button, .footer-col a').forEach(anchor => {
            if (anchor.getAttribute('href') && anchor.getAttribute('href').startsWith('#')) {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            }
        });

        // إضافة تأثير التمرير للترويسة
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            }

            // تأثير الظهور للعناصر
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        });

        // تفعيل تأثير الظهور عند التحميل
        window.dispatchEvent(new Event('scroll'));

        // جعل الهيدر يتغير عند التمرير
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        //  الاحصائيات
        document.addEventListener("DOMContentLoaded", function () {
            const statItems = document.querySelectorAll(".stat-item");

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const numberEl = entry.target.querySelector(".stat-number");
                        const target = parseInt(numberEl?.getAttribute("data-target"));
                        if (numberEl && !numberEl.classList.contains("counted")) {
                            animateCount(numberEl, target);
                            numberEl.classList.add("counted");
                        }
                        entry.target.classList.add("visible");
                    }
                });
            }, {
                threshold: 0.5
            });

            statItems.forEach(item => {
                observer.observe(item);
            });

            function animateCount(element, target) {
                let count = 0;
                const duration = 4000;
                const step = Math.ceil(target / (duration / 16));

                function updateCount() {
                    count += step;
                    if (count >= target) {
                        element.textContent = target + (target >= 100 ? "+" : "%");
                    } else {
                        element.textContent = count;
                        requestAnimationFrame(updateCount);
                    }
                }

                requestAnimationFrame(updateCount);
            }
        });

        // التحكم في القائمة الجانبية للموبايل
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const closeMenu = document.getElementById('close-menu');
        const overlay = document.getElementById('overlay');

        menuBtn.addEventListener('click', function () {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeMenu.addEventListener('click', function () {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        overlay.addEventListener('click', function () {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // إغلاق القائمة عند النقر على رابط
        const mobileLinks = document.querySelectorAll('.mobile-menu a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function () {
                mobileMenu.classList.remove('active');
                overlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        });

        // كود JavaScript للأسئلة الشائعة
        document.querySelectorAll('.faq-question').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;
                const isActive = answer.classList.contains('active');

                // إغلاق جميع الإجابات
                document.querySelectorAll('.faq-answer').forEach(ans => {
                    ans.classList.remove('active');
                });

                // إعادة ضبط جميع الأسهم
                document.querySelectorAll('.faq-question i').forEach(icon => {
                    icon.style.transform = 'rotate(0deg)';
                });

                if (!isActive) {
                    answer.classList.add('active');
                    button.querySelector('i').style.transform = 'rotate(180deg)';
                }
            });
        });

        // إضافة تأثير الظهور للعناصر الجديدة
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // إضافة تأثيرات للقوائم المنسدلة
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownGroups = document.querySelectorAll('.dropdown-group');

            dropdownGroups.forEach(group => {
                const button = group.querySelector('button');
                const menu = group.querySelector('.dropdown-menu');

                // عند الضغط على الزر (للهواتف)
                button.addEventListener('click', function (e) {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        menu.classList.toggle('active');
                    }
                });

                // إظهار القائمة عند المرور (للكومبيوتر)
                group.addEventListener('mouseenter', function () {
                    if (window.innerWidth > 768) {
                        menu.style.opacity = '1';
                        menu.style.visibility = 'visible';
                        menu.style.transform = 'translateY(0)';
                    }
                });

                group.addEventListener('mouseleave', function () {
                    if (window.innerWidth > 768) {
                        menu.style.opacity = '0';
                        menu.style.visibility = 'hidden';
                        menu.style.transform = 'translateY(10px)';
                    }
                });
            });
        });

        // تأثيرات تفاعلية إضافية
        document.addEventListener('DOMContentLoaded', function () {
            const heroSection = document.querySelector('.hero-section');
            const scrollIndicator = document.querySelector('.scroll-indicator');

            // تأثير التمرير السلس
            scrollIndicator.addEventListener('click', function () {
                window.scrollTo({
                    top: window.innerHeight,
                    behavior: 'smooth'
                });
            });

            // تأثير البارالاكس للخلفية
            window.addEventListener('scroll', function () {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.5;
                heroSection.style.transform = `translateY(${rate}px)`;
            });
        });

        AOS.init({
            duration: 1000,
            once: true
        });


        // التحكم في مودل الخدمات
        function openModal(id) {
            document.getElementById(id + '-modal').style.display = 'block';
        }

        function closeModal(id) {
            document.getElementById(id + '-modal').style.display = 'none';
        }

        // إغلاق عند الضغط خارج المودال
        window.onclick = function (event) {
            const modals = document.querySelectorAll('.modal');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        };

         // فتح النافذة عند النقر على "اقرأ المزيد"
  document.querySelectorAll('.read-more').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      // استخرج البيانات من data attributes
      const title = this.dataset.title;
      const date = this.dataset.date;
      const category = this.dataset.category;
      const image = this.dataset.image;
      const content = this.dataset.content;

      // ضع البيانات في المودال
      document.getElementById('modal-title').innerText = title;
      document.getElementById('modal-date').innerText = date;
      document.getElementById('modal-category').innerText = category;
      document.getElementById('modal-image').src = image;
      document.getElementById('modal-content').innerText = content;

      // أظهر النافذة
      document.getElementById('blog-modal').style.display = 'block';
    });
  });

  // زر الإغلاق (X)
  document.getElementById('modal-close').addEventListener('click', function () {
    document.getElementById('blog-modal').style.display = 'none';
  });

  // الإغلاق عند النقر خارج المحتوى
  window.addEventListener('click', function (event) {
    const modal = document.getElementById('blog-modal');
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });


//   form
 const form = document.getElementById('contactForm');
  const popup = document.getElementById('thankYouPopup');
  const loading = document.getElementById('loading');
  const closeBtn = document.getElementById('closePopupBtn');

  form.addEventListener('submit', function(event) {
    event.preventDefault();

    // إظهار اللودينق
    loading.style.display = 'flex';

    fetch(form.action, {
      method: form.method,
      body: new FormData(form),
      headers: { 'Accept': 'application/json' }
    }).then(response => {
      // إخفاء اللودينق بعد الإرسال
      loading.style.display = 'none';

      if (response.ok) {
        // إظهار شاشة الشكر
        popup.style.display = 'flex';
        form.reset();
      } else {
        alert('حدث خطأ، حاول مرة أخرى.');
      }
    }).catch(() => {
      loading.style.display = 'none';
      alert('حدث خطأ في الاتصال، حاول مرة أخرى.');
    });
  });

  closeBtn.addEventListener('click', function() {
    // فقط إخفاء شاشة الشكر بدون ظهور اللودينق
    popup.style.display = 'none';
  });

  // عند تحميل الصفحة، تأكد أن شاشة الشكر واللودينق مخفيين
  window.addEventListener('load', () => {
    popup.style.display = 'none';
    loading.style.display = 'none';
  });   