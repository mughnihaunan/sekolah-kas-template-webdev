<x-layouts.homepage title="Beranda Sekolah">

    <style>
        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .home-section {
            padding: 80px 0;
        }

        .intro-text {
            font-size: 1.3rem;
            line-height: 2.2;
            color: #334155;
            margin-bottom: 30px;
            text-align: center;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0;
            animation: fadeInUp 0.8s ease-out forwards;
            animation-delay: 0.2s;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 35px;
            margin: 60px 0;
        }

        .stat-item {
            text-align: center;
            padding: 40px 30px;
            border-left: 4px solid #2563eb;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(30, 64, 175, 0.02) 100%);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(30, 64, 175, 0.05) 100%);
            transform: translateY(100%);
            transition: transform 0.4s ease;
        }

        .stat-item:hover::before {
            transform: translateY(0);
        }

        .stat-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(37, 99, 235, 0.15);
            border-left-width: 6px;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: #2563eb;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease;
        }

        .stat-item:hover .stat-number {
            transform: scale(1.1);
        }

        .stat-label {
            font-size: 1.1rem;
            color: #64748b;
            font-weight: 600;
            position: relative;
            z-index: 1;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 45px;
            margin: 60px 0;
        }

        .feature-item {
            text-align: left;
            padding: 35px;
            border-radius: 16px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: #ffffff;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .feature-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(30, 64, 175, 0.02) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .feature-item:hover::before {
            opacity: 1;
        }

        .feature-item:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 50px rgba(37, 99, 235, 0.12);
            border-color: rgba(37, 99, 235, 0.2);
        }

        .feature-icon {
            font-size: 3rem;
            color: #2563eb;
            margin-bottom: 20px;
            display: inline-block;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
        }

        .feature-item:hover .feature-icon {
            transform: scale(1.15) rotate(5deg);
            animation: float 2s ease-in-out infinite;
        }

        .feature-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
            transition: color 0.3s ease;
        }

        .feature-item:hover .feature-title {
            color: #2563eb;
        }

        .feature-desc {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #475569;
            position: relative;
            z-index: 1;
        }

        .section-heading {
            font-size: 2.8rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            padding-bottom: 20px;
            width: 100%;
        }

        .section-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #2563eb 0%, #1e40af 100%);
            border-radius: 10px;
        }

        .section-subheading {
            font-size: 1.2rem;
            color: #64748b;
            text-align: center;
            margin-bottom: 50px;
            font-weight: 400;
            line-height: 1.8;
        }

        .quick-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .quick-link {
            display: flex;
            align-items: center;
            padding: 25px;
            border-left: 4px solid #2563eb;
            background: rgba(37, 99, 235, 0.03);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .quick-link:hover {
            border-left-width: 8px;
            background: rgba(37, 99, 235, 0.08);
        }

        .quick-link-icon {
            font-size: 2.5rem;
            color: #2563eb;
            margin-right: 20px;
        }

        .quick-link-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .quick-link-desc {
            font-size: 0.9rem;
            color: #64748b;
            margin: 0;
        }

        .motto-section {
            text-align: center;
            padding: 40px;
            margin: 50px 0;
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            color: white;
        }

        .motto-text {
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 3px;
        }

        body.dark-mode .section-heading,
        body.dark-mode .quick-link-title {
            color: #e2e8f0;
        }

        body.dark-mode .intro-text,
        body.dark-mode .section-subheading,
        body.dark-mode .stat-label,
        body.dark-mode .quick-link-desc {
            color: #94a3b8;
        }

        body.dark-mode .stat-item,
        body.dark-mode .quick-link {
            background: rgba(96, 165, 250, 0.1);
            border-left-color: #60a5fa;
        }

        body.dark-mode .stat-number,
        body.dark-mode .feature-icon,
        body.dark-mode .quick-link-icon {
            color: #60a5fa;
        }
    </style>

    <div class="container home-section">
        
        <h1 class="section-heading">Selamat Datang di SMA Negeri 28 Jakarta</h1>
        <p class="intro-text">
            Sekolah Plus Standar Nasional yang telah berdiri sejak 1970, berkomitmen mencetak 
            generasi unggul berdasarkan IMTAK dan IPTEK dengan mengusung motto 
            <strong>TAQWA, CERDAS, SANTUN, PRESTASI</strong>.
        </p>

        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">55+</div>
                <div class="stat-label">Tahun Pengalaman</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">100+</div>
                <div class="stat-label">Guru Profesional</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">A</div>
                <div class="stat-label">Akreditasi</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">Siswa Aktif</div>
            </div>
        </div>

        <h2 class="section-heading mt-5">Keunggulan Kami</h2>
        <p class="section-subheading">Fasilitas dan program unggulan untuk masa depan gemilang</p>

        <div class="feature-grid">
            <div class="feature-item">
                <i class="bi bi-people-fill feature-icon"></i>
                <h3 class="feature-title">Guru Berpengalaman</h3>
                <p class="feature-desc">
                    Tenaga pengajar profesional dan berdedikasi yang tidak hanya mengajarkan ilmu, 
                    tetapi juga membentuk karakter unggul.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-award-fill feature-icon"></i>
                <h3 class="feature-title">Terakreditasi A</h3>
                <p class="feature-desc">
                    Kualitas pendidikan terjamin dengan akreditasi A yang memberikan peluang 
                    lebih luas untuk masa depan.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-trophy-fill feature-icon"></i>
                <h3 class="feature-title">Prestasi Gemilang</h3>
                <p class="feature-desc">
                    Raihan prestasi akademik dan non-akademik di tingkat nasional 
                    maupun internasional.
                </p>
            </div>

            <div class="feature-item">
                <i class="bi bi-book-fill feature-icon"></i>
                <h3 class="feature-title">Kurikulum Penggerak</h3>
                <p class="feature-desc">
                    Menerapkan Kurikulum Sekolah Penggerak yang inovatif dan berbasis 
                    teknologi untuk pembelajaran efektif.
                </p>
            </div>
        </div>

        <div class="motto-section">
            <div class="motto-text">TAQWA • CERDAS • SANTUN • PRESTASI</div>
        </div>

        <h2 class="section-heading">Jelajahi Lebih Lanjut</h2>
        
        <div class="quick-links">
            <a href="/biodata" class="quick-link">
                <i class="bi bi-info-circle-fill quick-link-icon"></i>
                <div>
                    <div class="quick-link-title">Biodata Sekolah</div>
                    <p class="quick-link-desc">Informasi lengkap profil dan data sekolah</p>
                </div>
            </a>

            <a href="/sejarah" class="quick-link">
                <i class="bi bi-clock-history quick-link-icon"></i>
                <div>
                    <div class="quick-link-title">Sejarah & Visi Misi</div>
                    <p class="quick-link-desc">Perjalanan panjang SMAN 28 Jakarta</p>
                </div>
            </a>

            <a href="/contact" class="quick-link">
                <i class="bi bi-telephone-fill quick-link-icon"></i>
                <div>
                    <div class="quick-link-title">Hubungi Kami</div>
                    <p class="quick-link-desc">Informasi kontak dan lokasi sekolah</p>
                </div>
            </a>
        </div>

    </div>

</x-layouts.homepage>
