<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Homepage Sekolah' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
            overflow-x: hidden;
        }

        /* Navbar Modern Enhanced */
        .navbar-modern {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.08);
            padding: 15px 0;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1000;
        }

        .navbar-modern.scrolled {
            padding: 10px 0;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.12);
            background: rgba(255, 255, 255, 0.98);
        }

        .navbar-modern .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar-modern .logo-img {
            width: 50px;
            height: 50px;
            object-fit: contain;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar-modern .logo-container:hover .logo-img {
            transform: rotate(360deg) scale(1.1);
        }

        .navbar-modern .school-name {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1a1a1a;
            line-height: 1.2;
            transition: color 0.3s ease;
        }

        .navbar-modern .logo-container:hover .school-name {
            color: #2563eb;
        }

        .navbar-modern .school-name small {
            display: block;
            font-size: 0.75rem;
            font-weight: 400;
            color: #666;
        }

        .navbar-modern .nav-link {
            color: #333;
            font-weight: 500;
            padding: 8px 20px !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .navbar-modern .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(30, 64, 175, 0.1) 100%);
            transform: translateY(-100%);
            transition: transform 0.3s ease;
            z-index: -1;
        }

        .navbar-modern .nav-link:hover::before {
            transform: translateY(0);
        }

        .navbar-modern .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, #2563eb 0%, #1e40af 100%);
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 10px;
        }

        .navbar-modern .nav-link:hover::after,
        .navbar-modern .nav-link.active::after {
            width: 70%;
        }

        .navbar-modern .nav-link:hover {
            color: #2563eb;
            transform: translateY(-2px);
        }

        .btn-login-modern {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            padding: 12px 35px;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.2);
        }

        .btn-login-modern::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn-login-modern:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-login-modern:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 35px rgba(37, 99, 235, 0.4);
            color: white;
        }

        .btn-login-modern:active {
            transform: translateY(-1px) scale(1.02);
        }

        /* Hero Slider Enhanced */
        .hero-slider {
            height: 90vh;
            position: relative;
            margin-top: 0;
            width: 100%;
            overflow: hidden;
        }

        .heroSwiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        .slide-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.55);
            transition: transform 8s ease-out;
            transform: scale(1);
            will-change: transform;
        }

        .swiper-slide-active .slide-background {
            transform: scale(1.08);
            filter: brightness(0.6);
        }

        .slide-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 90%;
            max-width: 1000px;
            z-index: 10;
            padding: 20px;
            opacity: 0;
            animation: fadeIn 0.8s ease-out forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .swiper-slide-active .slide-content {
            animation: fadeIn 0.8s ease-out forwards;
            animation-delay: 0.3s;
        }

        .slide-content h1 {
            font-size: 3.8rem;
            font-weight: 800;
            margin-bottom: 25px;
            text-shadow: 3px 3px 15px rgba(0, 0, 0, 0.6);
            letter-spacing: -1px;
            line-height: 1.2;
        }

        .slide-content p {
            font-size: 1.4rem;
            margin-bottom: 35px;
            font-weight: 300;
            letter-spacing: 0.5px;
            line-height: 1.6;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease 0.3s both;
        }

        .slide-content .btn-explore {
            background: white;
            color: #2563eb;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .slide-content .btn-explore:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Swiper Custom Navigation */
        .swiper-button-next,
        .swiper-button-prev {
            background: rgba(255, 255, 255, 0.3);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            backdrop-filter: blur(10px);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
            color: white;
            font-weight: bold;
        }

        .swiper-pagination-bullet {
            background: white;
            opacity: 0.5;
            width: 12px;
            height: 12px;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            width: 30px;
            border-radius: 6px;
        }

        /* Content Area */
        main {
            background: #f8fafc;
            min-height: 100vh;
        }

        /* Footer Modern */
        footer {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-section {
            margin-bottom: 30px;
        }

        .footer-section h5 {
            font-weight: 700;
            margin-bottom: 20px;
            color: #60a5fa;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #60a5fa;
        }

        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: rgba(96, 165, 250, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: #60a5fa;
            transition: all 0.3s;
        }

        .footer-social a:hover {
            background: #60a5fa;
            color: white;
            transform: translateY(-3px);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 40px;
            text-align: center;
            color: #94a3b8;
        }

        /* Dark Mode Toggle - Simple & Clean */
        .theme-switch {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
        }

        .theme-switch-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
            border: none;
            font-size: 1.5rem;
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .theme-switch-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.4);
        }

        .theme-switch-btn:active {
            transform: translateY(-1px);
        }

        .theme-switch-btn i {
            transition: transform 0.3s ease;
        }

        .theme-switch-btn:hover i {
            transform: rotate(20deg) scale(1.1);
        }

        /* Dark Mode Styles */
        body.dark-mode {
            background: #0f172a;
            color: #e2e8f0;
        }

        body.dark-mode .navbar-modern {
            background: rgba(15, 23, 42, 0.95);
        }

        body.dark-mode .navbar-modern .school-name {
            color: #e2e8f0;
        }

        body.dark-mode .navbar-modern .school-name small {
            color: #94a3b8;
        }

        body.dark-mode .navbar-modern .nav-link {
            color: #cbd5e1;
        }

        body.dark-mode main {
            background: #1e293b;
        }

        @media (max-width: 768px) {
            .hero-slider {
                height: 70vh;
            }

            .slide-content h1 {
                font-size: 2rem;
            }

            .slide-content p {
                font-size: 1rem;
            }

            .navbar-modern .school-name {
                font-size: 0.9rem;
            }

            .navbar-modern .logo-img {
                width: 40px;
                height: 40px;
            }
        }

    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-modern sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <div class="logo-container">
                    <img src="https://sman28jkt.sch.id/wp-content/uploads/elementor/thumbs/LOGO-SMA-28-HD-rej9fvskijrcbaoteaf31u8kmsqcsqiw40nyvqc4dc.png" 
                         alt="Logo SMAN 28 Jakarta" 
                         class="logo-img">
                    <div class="school-name">
                        SMAN 28 JAKARTA
                        <small>Excellence in Education</small>
                    </div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/biodata">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sejarah">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Kontak</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="/login" class="btn btn-login-modern">
                            <i class="bi bi-box-arrow-in-right me-2"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO SLIDER --}}
    <div class="hero-slider">
        <div class="swiper heroSwiper">
            <div class="swiper-wrapper">
                {{-- Slide 1 - Ganti URL gambar di bawah dengan gambar sekolah Anda --}}
                <div class="swiper-slide">
                    <img src="https://sman28jkt.sch.id/wp-content/uploads/2025/05/sman28-1-1024x687.png" 
                         alt="School Building" 
                         class="slide-background">
                    <div class="slide-content">
                        <h1>Selamat Datang di SMAN 28 Jakarta</h1>
                        <p>Mewujudkan Generasi Unggul Berdasarkan IMTAK dan IPTEK</p>
                        <a href="#about" class="btn-explore">Jelajahi Lebih Lanjut</a>
                    </div>
                </div>

                {{-- Slide 2 - Ganti URL gambar --}}
                <div class="swiper-slide">
                    <img src="https://sman28jkt.sch.id/wp-content/uploads/2025/05/Gedung-768x513.jpg" 
                         alt="School Facilities" 
                         class="slide-background">
                    <div class="slide-content">
                        <h1>Taqwa • Cerdas • Santun • Prestasi</h1>
                        <p>Membentuk Karakter Siswa yang Berakhlak Mulia dan Berprestasi</p>
                        <a href="/sejarah" class="btn-explore">Pelajari Visi Misi</a>
                    </div>
                </div>

                {{-- Slide 3 - Ganti URL gambar --}}
                <div class="swiper-slide">
                    <img src="https://sman28jkt.sch.id/robotik/uploads/slider/1760086654_slider.png" 
                         alt="Robotics" 
                         class="slide-background">
                    <div class="slide-content">
                        <h1>Sekolah Plus Standar Nasional</h1>
                        <p>Terakreditasi A dengan Kurikulum Sekolah Penggerak</p>
                        <a href="/biodata" class="btn-explore">Info Lengkap</a>
                    </div>
                </div>
            </div>
            
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- KONTEN --}}
    <main id="about">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-section">
                    <h5>SMAN 28 Jakarta</h5>
                    <p style="color: #cbd5e1; line-height: 1.8;">
                        Sekolah Plus Standar Nasional yang berkomitmen mencetak generasi unggul berdasarkan IMTAK dan IPTEK.
                    </p>
                    <div class="footer-social mt-4">
                        <a href="https://www.instagram.com/sman28jkt/" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/p/SMAN-28-Jakarta-100063583988467/" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://sman28jkt.sch.id/" target="_blank">
                            <i class="bi bi-globe"></i>
                        </a>
                        <a href="https://id.linkedin.com/school/sma-negeri-28-jakarta/" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 footer-section">
                    <h5>Menu Cepat</h5>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/biodata">Biodata Sekolah</a></li>
                        <li><a href="/sejarah">Sejarah & Visi Misi</a></li>
                        <li><a href="/contact">Kontak Kami</a></li>
                    </ul>
                </div>

                <div class="col-lg-5 footer-section">
                    <h5>Kontak Informasi</h5>
                    <ul style="color: #cbd5e1;">
                        <li>
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            Jl. Raya Ragunan No.33, RT.5/RW.7, Jati Padang<br>
                            <span style="padding-left: 24px;">Ps. Minggu, Jakarta Selatan 12540</span>
                        </li>
                        <li class="mt-3">
                            <i class="bi bi-telephone-fill me-2"></i>
                            (021) 7806293
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill me-2"></i>
                            mail28jkt@gmail.com
                        </li>
                        <li>
                            <i class="bi bi-globe me-2"></i>
                            sman28jkt.sch.id
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="mb-0">© {{ date('Y') }} SMA Negeri 28 Jakarta. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    {{-- THEME TOGGLE --}}
    <div class="theme-switch">
        <button class="theme-switch-btn" id="themeToggle" title="Toggle Dark Mode">
            <i class="bi bi-moon-stars-fill"></i>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all sections and items
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll('.stat-item, .feature-item, .quick-link, .section-heading');
            animateElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                observer.observe(el);
            });
        });

        // Hero Slider with enhanced animations
        const heroSwiper = new Swiper('.heroSwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                waitForTransition: true,
            },
            speed: 800,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '" style="background: rgba(255,255,255,0.5); width: 12px; height: 12px; margin: 0 6px;"></span>';
                },
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                init: function () {
                    // Pastikan slide pertama langsung visible
                    this.slides.forEach((slide, index) => {
                        if (index === this.activeIndex) {
                            slide.style.opacity = '1';
                        }
                    });
                }
            }
        });

        // Navbar scroll effect
        const navbar = document.querySelector('.navbar-modern');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Active nav link
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.navbar-modern .nav-link');
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === currentPath || 
                (currentPath === '/' && link.getAttribute('href') === '/') ||
                (currentPath.includes(link.getAttribute('href')) && link.getAttribute('href') !== '/')) {
                link.classList.add('active');
            }
        });

        // Dark Mode Toggle
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        const icon = themeToggle.querySelector('i');

        // Check saved theme
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            body.classList.add('dark-mode');
            icon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
        }

        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                icon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
                localStorage.setItem('theme', 'dark');
            } else {
                icon.classList.replace('bi-sun-fill', 'bi-moon-stars-fill');
                localStorage.setItem('theme', 'light');
            }
        });
    </script>
</body>
</html>
