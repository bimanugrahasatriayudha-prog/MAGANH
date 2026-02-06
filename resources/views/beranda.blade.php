<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Politeknik NSC Surabaya</title>
    <meta name="description" content="Politeknik NSC Surabaya - Pendidikan vokasi berkualitas dengan kurikulum industri, fasilitas modern, dan jaminan penempatan kerja untuk masa depan cemerlang Anda.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1A1A1A;
            background-color: #FAFBFC;
        }

        /* Header Styles */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .header-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-icon {
            width: 48px;
            height: 48px;
            background: #2E7D32;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .logo-text h1 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1A1A1A;
        }

        .logo-text p {
            font-size: 0.75rem;
            color: #6B7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        nav {
            display: flex;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: #1A1A1A;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover,
        nav a.active {
            color: #2E7D32;
        }

        .cta-button {
            padding: 0.625rem 1.5rem;
            background: #2E7D32;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #1B5E20;
        }

        /* Hero Section */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding-top: 80px;
        }

        .hero-background {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(26, 26, 26, 0.6), rgba(26, 26, 26, 0.4), #FAFBFC);
        }

        .hero-content {
            position: relative;
            z-index: 20;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 9999px;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background: #66BB6A;
            border-radius: 50%;
        }

        .hero h2 {
            font-size: 3.5rem;
            font-weight: bold;
            color: white;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero h2 .accent {
            color: #66BB6A;
        }

        .hero-description {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 3rem;
            max-width: 768px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .search-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 1.5rem;
            max-width: 896px;
            margin: 0 auto 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .search-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }

        .search-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem;
            background: white;
            border-radius: 12px;
        }

        .search-icon {
            font-size: 24px;
            color: #2E7D32;
        }

        .search-text p:first-child {
            font-size: 0.75rem;
            color: #6B7280;
            font-weight: 500;
        }

        .search-text p:last-child {
            font-size: 0.875rem;
            font-weight: 600;
            color: #1A1A1A;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary {
            padding: 1rem 2rem;
            background: #2E7D32;
            color: white;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: background 0.3s;
        }

        .btn-primary:hover {
            background: #1B5E20;
        }

        .btn-secondary {
            padding: 1rem 2rem;
            background: white;
            color: #1A1A1A;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: background 0.3s;
        }

        .btn-secondary:hover {
            background: #F5F5F5;
        }

        /* Section Styles */
        section {
            padding: 5rem 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: rgba(46, 125, 50, 0.1);
            color: #2E7D32;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .section-title {
            font-size: 3rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 1.5rem;
        }

        .section-description {
            font-size: 1.125rem;
            color: #6B7280;
            max-width: 672px;
            margin: 0 auto;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
        }

        /* Programs Section */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .program-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .program-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .program-image {
            position: relative;
            height: 192px;
            overflow: hidden;
        }

        .program-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .program-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(26, 26, 26, 0.8), transparent);
        }

        .program-badge {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            right: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .program-icon {
            width: 40px;
            height: 40px;
            background: #2E7D32;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .program-meta p {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .program-content {
            padding: 1.5rem;
        }

        .program-content h3 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 0.75rem;
        }

        .program-content p {
            font-size: 0.875rem;
            color: #6B7280;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .program-button {
            width: 100%;
            padding: 0.5rem 1rem;
            background: rgba(46, 125, 50, 0.1);
            color: #2E7D32;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            font-weight: 500;
            display: block;
            transition: all 0.3s;
        }

        .program-button:hover {
            background: #2E7D32;
            color: white;
        }

        /* Why Choose Us Section */
        .bg-muted {
            background: #F5F5F5;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 64px;
            height: 64px;
            background: rgba(46, 125, 50, 0.1);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 32px;
            color: #2E7D32;
        }

        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: #6B7280;
            line-height: 1.6;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-value {
            font-size: 3rem;
            font-weight: bold;
            color: #2E7D32;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.875rem;
            color: #6B7280;
            font-weight: 500;
        }

        /* News Section */
        .news-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 3rem;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
        }

        .news-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .news-image {
            position: relative;
            height: 192px;
            overflow: hidden;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-category {
            position: absolute;
            top: 1rem;
            left: 1rem;
            padding: 0.25rem 0.75rem;
            background: #2E7D32;
            color: white;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-date {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            color: #6B7280;
            margin-bottom: 0.75rem;
        }

        .news-content h3 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 0.75rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-excerpt {
            color: #6B7280;
            line-height: 1.6;
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-link {
            color: #2E7D32;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: color 0.3s;
        }

        .news-link:hover {
            color: #1B5E20;
        }

        /* Testimonials Section */
        .testimonial-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            max-width: 1024px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 3fr;
            gap: 0;
        }

        .testimonial-image {
            position: relative;
            min-height: 400px;
        }

        .testimonial-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-content {
            padding: 3rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .quote-icon {
            font-size: 48px;
            color: rgba(46, 125, 50, 0.2);
            margin-bottom: 1.5rem;
        }

        .testimonial-quote {
            font-size: 1.5rem;
            font-weight: 500;
            color: #1A1A1A;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .testimonial-author {
            margin-bottom: 2rem;
        }

        .testimonial-name {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 0.25rem;
        }

        .testimonial-program {
            font-size: 0.875rem;
            color: #6B7280;
            margin-bottom: 0.25rem;
        }

        .testimonial-position {
            font-size: 0.875rem;
            color: #2E7D32;
            font-weight: 500;
        }

        /* Footer */
        footer {
            background: #1B5E20;
            color: white;
            padding: 3rem 2rem;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .footer-logo {
            width: 48px;
            height: 48px;
            background: #2E7D32;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }

        .footer-brand-text h3 {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .footer-brand-text p {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.8);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .footer-description {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 0.75rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            transition: background 0.3s;
        }

        .social-link:hover {
            background: #2E7D32;
        }

        .footer-section h4 {
            font-size: 0.875rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 1rem;
            color: #66BB6A;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.875rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .contact-icon {
            color: #66BB6A;
            font-size: 20px;
            margin-top: 0.125rem;
        }

        .contact-text {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-copyright {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .footer-legal {
            display: flex;
            gap: 1.5rem;
        }

        .footer-legal a {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-legal a:hover {
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav {
                display: none;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .search-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-card {
                grid-template-columns: 1fr;
            }

            .testimonial-image {
                min-height: 300px;
            }

            .testimonial-content {
                padding: 2rem;
            }

            .testimonial-quote {
                font-size: 1.125rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <a href="#" class="logo">
    <div class="logo-icon">
        <img src="https://yt3.googleusercontent.com/DRseHHOtu76abuCJtyxIU08bvAIzC72HYWdgPPuhv-xQjO7C1XAmeheAvL-h4nxVROQwgXSt=s900-c-k-c0x00ffffff-no-rj" alt="Logo Politeknik NSC" style="width:100%; height:100%; object-fit:cover; border-radius:8px;">
    </div>
    <div class="logo-text">
        <h1>POLITEKNIK NSC</h1>
        <p>Surabaya</p>
    </div>
</a>
            <nav>
                <a href="#" class="active">Beranda</a>
                <a href="tentang">Tentang</a>
                <a href="ProgramStudi">Program Studi</a>
                <a href="lokasi">Lokasi</a>
            </nav>
            <a href="#" class="cta-button">Daftar Sekarang</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_17a0eabe0-1764679554645.png" alt="Modern campus building exterior with students walking on pathways, bright sunny day">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-badge">
                <span class="pulse-dot"></span>
                <span>Pendaftaran Mahasiswa Baru 2026 Dibuka</span>
            </div>
            <h2>
                Wujudkan Karir Impian<br>
                <span class="accent">di Politeknik NSC</span>
            </h2>
            <p class="hero-description">
                Pendidikan vokasi berkualitas dengan kurikulum industri, fasilitas modern, dan jaminan penempatan kerja untuk masa depan cemerlang Anda.
            </p>
            <div class="search-card">
                <div class="search-grid">
                    <div class="search-item">
                        <span class="search-icon">🎓</span>
                        <div class="search-text">
                            <p>Program Studi</p>
                            <p>Pilih Program</p>
                        </div>
                    </div>
                    <div class="search-item">
                        <span class="search-icon">📅</span>
                        <div class="search-text">
                            <p>Jenjang</p>
                            <p>D3 / D4</p>
                        </div>
                    </div>
                    <div class="search-item" style="background: #2E7D32; color: white; cursor: pointer;">
                        <span style="color: white;">🔍</span>
                        <div class="search-text" style="color: white;">
                            <p style="color: rgba(255,255,255,0.9);">Cari</p>
                            <p>Program</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-buttons">
                <a href="#" class="btn-primary">
                    <span>📄</span>
                    <span>Daftar Sekarang</span>
                </a>
                <a href="#" class="btn-secondary">
                    <span>▶️</span>
                    <span>Lihat Virtual Tour</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section>
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Program Studi Unggulan</span>
                <h2 class="section-title">Pilih Program Sesuai Minat Anda</h2>
                <p class="section-description">
                    Kami menawarkan berbagai program studi dengan kurikulum yang dirancang sesuai kebutuhan industri terkini
                </p>
            </div>
            <div class="programs-grid">
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://images.unsplash.com/photo-1665211097563-163d6be45d67" alt="Student typing code on laptop screen with colorful programming syntax">
                        <div class="program-overlay"></div>
                        <div class="program-badge">
                            <div class="program-icon">💻</div>
                            <div class="program-meta">
                                <p>D3 / D4</p>
                                <p>3-4 Tahun</p>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Teknologi Komputer</h3>
                        <p>Menjadi ahli dalam pengembangan software, web, dan mobile application</p>
                        <a href="#" class="program-button">Lihat Detail →</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1fc55b798-1767533845086.png" alt="Business dashboard with charts and data analytics on computer monitor">
                        <div class="program-overlay"></div>
                        <div class="program-badge">
                            <div class="program-icon">📊</div>
                            <div class="program-meta">
                                <p>D3 / D4</p>
                                <p>3-4 Tahun</p>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Sistem Informasi</h3>
                        <p>Mengelola dan menganalisis sistem informasi untuk kebutuhan bisnis</p>
                        <a href="#" class="program-button">Lihat Detail →</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d277bb8f-1767097201638.png" alt="Business meeting with professionals discussing strategy around conference table">
                        <div class="program-overlay"></div>
                        <div class="program-badge">
                            <div class="program-icon">💼</div>
                            <div class="program-meta">
                                <p>D3 / D4</p>
                                <p>3-4 Tahun</p>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Manajemen Bisnis</h3>
                        <p>Memahami strategi bisnis dan manajemen perusahaan modern</p>
                        <a href="#" class="program-button">Lihat Detail →</a>
                    </div>
                </div>
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_19af6d157-1768724854779.png" alt="Accountant working with financial documents and calculator on desk">
                        <div class="program-overlay"></div>
                        <div class="program-badge">
                            <div class="program-icon">🧮</div>
                            <div class="program-meta">
                                <p>D3 / D4</p>
                                <p>3-4 Tahun</p>
                            </div>
                        </div>
                    </div>
                    <div class="program-content">
                        <h3>Akuntansi</h3>
                        <p>Menguasai pencatatan keuangan dan pelaporan akuntansi profesional</p>
                        <a href="#" class="program-button">Lihat Detail →</a>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="ProgramStudi" class="btn-primary">Lihat Semua Program →</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="bg-muted">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Keunggulan Kami</span>
                <h2 class="section-title">Mengapa Memilih Politeknik NSC?</h2>
                <p class="section-description">
                    Komitmen kami adalah menghasilkan lulusan yang kompeten, profesional, dan siap bersaing di dunia industri
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">📖</div>
                    <h3>Kurikulum Industri</h3>
                    <p>Materi pembelajaran disesuaikan dengan kebutuhan industri terkini dan dikembangkan bersama praktisi profesional</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🏢</div>
                    <h3>Fasilitas Modern</h3>
                    <p>Laboratorium lengkap dengan peralatan terkini untuk mendukung praktik pembelajaran yang optimal</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3>Dosen Berpengalaman</h3>
                    <p>Tenaga pengajar profesional dengan pengalaman industri dan akademis yang mumpuni</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">💼</div>
                    <h3>Program Magang</h3>
                    <p>Kesempatan magang di perusahaan terkemuka untuk pengalaman kerja nyata selama masa studi</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3>Sertifikasi Profesi</h3>
                    <p>Peluang mendapatkan sertifikasi profesi internasional yang diakui industri global</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3>Jaminan Penempatan</h3>
                    <p>Program career development dan job placement untuk memastikan lulusan terserap di dunia kerja</p>
                </div>
            </div>
            <div class="stats-grid">
                <div>
                    <div class="stat-value">2,500+</div>
                    <div class="stat-label">Mahasiswa Aktif</div>
                </div>
                <div>
                    <div class="stat-value">5,000+</div>
                    <div class="stat-label">Alumni Sukses</div>
                </div>
                <div>
                    <div class="stat-value">150+</div>
                    <div class="stat-label">Mitra Industri</div>
                </div>
                <div>
                    <div class="stat-value">95%</div>
                    <div class="stat-label">Tingkat Penempatan</div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section>
        <div class="container">
            <div class="news-header">
                <div>
                    <span class="section-badge">Berita Terkini</span>
                    <h2 class="section-title">Informasi & Berita</h2>
                    <p class="section-description" style="text-align: left; margin: 0;">
                        Update terbaru seputar kegiatan, prestasi, dan pengumuman penting dari Politeknik NSC
                    </p>
                </div>
                <a href="#" class="btn-primary">Lihat Semua Berita →</a>
            </div>
            <div class="news-grid">
                <article class="news-card">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1724455872716-df439709d7c2" alt="Group of diverse students smiling and holding admission documents on campus">
                        <span class="news-category">Pendaftaran</span>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <span>📅</span>
                            <span>28 Januari 2026</span>
                        </div>
                        <h3>Pendaftaran Mahasiswa Baru Gelombang 2 Dibuka</h3>
                        <p class="news-excerpt">
                            Politeknik NSC membuka pendaftaran gelombang 2 untuk tahun akademik 2026/2027 dengan berbagai program beasiswa menarik.
                        </p>
                        <a href="#" class="news-link">Baca Selengkapnya →</a>
                    </div>
                </article>
                <article class="news-card">
                    <div class="news-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1a4fbfb9d-1768366393172.png" alt="Business handshake between company executives during partnership signing ceremony">
                        <span class="news-category">Kerjasama</span>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <span>📅</span>
                            <span>25 Januari 2026</span>
                        </div>
                        <h3>Kerjasama dengan 10 Perusahaan Teknologi Terkemuka</h3>
                        <p class="news-excerpt">
                            NSC menandatangani MoU dengan perusahaan teknologi untuk program magang dan rekrutmen lulusan.
                        </p>
                        <a href="#" class="news-link">Baca Selengkapnya →</a>
                    </div>
                </article>
                <article class="news-card">
                    <div class="news-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1a711d3a5-1767089430852.png" alt="Students holding trophy and certificate celebrating competition victory">
                        <span class="news-category">Prestasi</span>
                    </div>
                    <div class="news-content">
                        <div class="news-date">
                            <span>📅</span>
                            <span>20 Januari 2026</span>
                        </div>
                        <h3>Mahasiswa NSC Juara Kompetisi Nasional IT</h3>
                        <p class="news-excerpt">
                            Tim mahasiswa Teknologi Komputer berhasil meraih juara 1 pada kompetisi programming tingkat nasional.
                        </p>
                        <a href="#" class="news-link">Baca Selengkapnya →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-muted">
        <div class="container">
            <div class="section-header">
                <span class="section-badge">Testimoni Alumni</span>
                <h2 class="section-title">Kisah Sukses Lulusan Kami</h2>
                <p class="section-description">
                    Dengarkan pengalaman para alumni yang telah sukses berkarir di berbagai perusahaan terkemuka
                </p>
            </div>
            <div class="testimonial-card">
                <div class="testimonial-image">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d695592f-1763292764192.png" alt="Young professional man in business casual attire smiling confidently">
                </div>
                <div class="testimonial-content">
                    <div class="quote-icon">💬</div>
                    <blockquote class="testimonial-quote">
                        "Politeknik NSC memberikan pembelajaran praktis yang sangat membantu saya dalam karir. Kurikulumnya relevan dengan kebutuhan industri dan dosennya sangat supportif."
                    </blockquote>
                    <div class="testimonial-author">
                        <p class="testimonial-name">Budi Santoso</p>
                        <p class="testimonial-program">Teknologi Komputer - Lulusan 2024</p>
                        <p class="testimonial-position">Software Engineer di PT. Tokopedia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-grid">
                <div>
                    <div class="footer-brand">
                        <div class="footer-logo">
    <img src="https://yt3.googleusercontent.com/DRseHHOtu76abuCJtyxIU08bvAIzC72HYWdgPPuhv-xQjO7C1XAmeheAvL-h4nxVROQwgXSt=s900-c-k-c0x00ffffff-no-rj" alt="Logo Politeknik NSC" style="width:100%; height:100%; object-fit:cover; border-radius:8px;">
    </div>

                            <h3>POLITEKNIK NSC</h3>
                            <p>Surabaya</p>
                        </div>
                    </div>
                    <p class="footer-description">
                        Membangun generasi profesional yang kompeten dan siap bersaing di dunia industri melalui pendidikan vokasi berkualitas.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">𝑓</a>
                        <a href="#" class="social-link" aria-label="Instagram">📷</a>
                        <a href="#" class="social-link" aria-label="Twitter">𝕏</a>
                        <a href="#" class="social-link" aria-label="YouTube">▶</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Program Studi</h4>
                    <ul class="footer-links">
                        <li><a href="#">Teknologi Komputer</a></li>
                        <li><a href="#">Sistem Informasi</a></li>
                        <li><a href="#">Manajemen Bisnis</a></li>
                        <li><a href="#">Akuntansi</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Navigasi Cepat</h4>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Program Studi</a></li>
                        <li><a href="#">Lokasi Kampus</a></li>
                        <li><a href="#">Beranda</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Kontak Kami</h4>
                    <div class="contact-item">
                        <span class="contact-icon">📞</span>
                        <span class="contact-text">+62 31 1234 5678</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">✉️</span>
                        <span class="contact-text">info@politekniknsc.ac.id</span>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">📍</span>
                        <span class="contact-text">Jl. Basuki Rahmat No.85, Surabaya</span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="footer-copyright">© 2026 Politeknik NSC Surabaya. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
