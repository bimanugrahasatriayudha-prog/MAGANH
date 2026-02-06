<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi - Politeknik NSC Surabaya</title>
    <meta name="description" content="Jelajahi program studi D3 dan D4 di Politeknik NSC Surabaya. Teknik Informatika, Sistem Informasi, Manajemen Bisnis, Akuntansi, dan program unggulan lainnya.">
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

        /* Hero Section */
        .hero {
            position: relative;
            padding-top: 120px;
            padding-bottom: 80px;
            overflow: hidden;
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
            background: linear-gradient(to bottom, rgba(26, 26, 26, 0.7), #FAFBFC);
        }

        .hero-content {
            position: relative;
            z-index: 10;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }

        .hero h2 {
            font-size: 3.5rem;
            font-weight: bold;
            color: white;
            margin-bottom: 1.5rem;
        }

        .hero-description {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            max-width: 768px;
            margin: 0 auto;
        }

        /* Section Styles */
        section {
            padding: 5rem 0;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
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
            font-size: 2.5rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 1.5rem;
        }

        .section-description {
            font-size: 1.125rem;
            color: #6B7280;
            max-width: 768px;
            margin: 0 auto 3rem;
        }

        /* Program Cards */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 3rem;
        }

        .program-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .program-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .program-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .program-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .program-icon-badge {
            position: absolute;
            top: 1.5rem;
            left: 1.5rem;
            width: 64px;
            height: 64px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .program-level-badge {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            padding: 0.5rem 1rem;
            background: #2E7D32;
            color: white;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .program-content {
            padding: 2rem;
        }

        .program-header {
            margin-bottom: 1.5rem;
        }

        .program-name {
            font-size: 1.75rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 0.5rem;
        }

        .program-meta {
            display: flex;
            gap: 1rem;
            color: #6B7280;
            font-size: 0.875rem;
        }

        .program-meta span {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .program-description {
            color: #6B7280;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        .program-section {
            margin-bottom: 1.5rem;
        }

        .program-section-title {
            font-size: 1rem;
            font-weight: 700;
            color: #1A1A1A;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .program-section-title::before {
            content: '';
            width: 4px;
            height: 20px;
            background: #2E7D32;
            border-radius: 2px;
        }

        .program-list {
            list-style: none;
            display: grid;
            gap: 0.5rem;
        }

        .program-list li {
            display: flex;
            align-items: start;
            gap: 0.5rem;
            color: #6B7280;
            font-size: 0.875rem;
            padding-left: 0.5rem;
        }

        .program-list li::before {
            content: '•';
            color: #2E7D32;
            font-weight: bold;
            font-size: 1.2rem;
            line-height: 1.4;
        }

        .career-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .career-tag {
            padding: 0.375rem 0.75rem;
            background: rgba(46, 125, 50, 0.1);
            color: #2E7D32;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .program-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1.5rem;
            border-top: 1px solid #E5E7EB;
            margin-top: 1.5rem;
        }

        .tuition {
            font-size: 1.25rem;
            font-weight: bold;
            color: #2E7D32;
        }

        .apply-button {
            padding: 0.75rem 1.5rem;
            background: #2E7D32;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }

        .apply-button:hover {
            background: #1B5E20;
        }

        /* Footer */
        footer {
            background: #1A1A1A;
            color: white;
            padding: 3rem 0 1.5rem;
        }

        .footer-content {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }

        .footer-content p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.875rem;
            }

            .programs-grid {
                grid-template-columns: 1fr;
            }

            nav {
                display: none;
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
                <a href="beranda">Beranda</a>
                <a href="tentang">Tentang</a>
                <a href="#" class="active">Program Studi</a>
                <a href="lokasi">Lokasi</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" alt="Students studying together">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <h2>Program Studi</h2>
            <p class="hero-description">Pilih program studi yang sesuai dengan minat dan passion Anda untuk membangun karir profesional</p>
        </div>
    </section>

    <!-- Programs Section -->
    <section>
        <div class="container">
            <div style="text-align: center; margin-bottom: 4rem;">
                <span class="section-badge">8 Program Unggulan</span>
                <h2 class="section-title">Jelajahi Program Studi Kami</h2>
                <p class="section-description">Program D3 dan D4 dengan kurikulum industri, dosen berpengalaman, dan jaminan penempatan kerja</p>
            </div>

            <div class="programs-grid">
                <!-- Teknik Informatika -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1258ad740-1767716950529.png" alt="Developer working on code">
                        <div class="program-icon-badge">💻</div>
                        <div class="program-level-badge">D3 / D4</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Teknologi Komputer</h3>
                            <div class="program-meta">
                                <span>⏱️ 3-4 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Program D3 Teknologi Komputer di Politeknik NSC Surabaya menawarkan kurikulum komprehensif dalam pemrograman, jaringan komputer, keamanan informasi, dan pengembangan web, mempersiapkan lulusan terbaik untuk karir di industri teknologi informasi..</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>Sistem Operasi</li>
                                <li>Rekayasa Perangkat Lunak</li>
                                <li>Pemrograman Basis Data</li>
                                <li>Mobile Programming</li>
                                <li>Web Design and Developemtn</li>
                                <li>Circuit and Signal</li>
                                <li>Komunikasi Data</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Software Engineer</span>
                                <span class="career-tag">Full Stack Developer</span>
                                <span class="career-tag">Mobile Developer</span>
                                <span class="career-tag">DevOps Engineer</span>
                                <span class="career-tag">Data Scientist</span>
                                <span class="career-tag">IT Consultant</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 8.5 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Sistem Informasi -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1643cf368-1766844406391.png" alt="Business analytics dashboard">
                        <div class="program-icon-badge">📊</div>
                        <div class="program-level-badge">D3 / D4</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Sistem Informasi</h3>
                            <div class="program-meta">
                                <span>⏱️ 3-4 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Menggabungkan teknologi informasi dengan manajemen bisnis untuk menghasilkan lulusan yang mampu menganalisis, merancang, dan mengelola sistem informasi perusahaan secara efektif dan efisien.</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>Analisis dan Desain Sistem Informasi</li>
                                <li>Enterprise Resource Planning (ERP)</li>
                                <li>Business Intelligence & Data Analytics</li>
                                <li>IT Project Management (Agile, Scrum)</li>
                                <li>E-Commerce & Digital Marketing</li>
                                <li>IT Governance & Audit</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Business Analyst</span>
                                <span class="career-tag">System Analyst</span>
                                <span class="career-tag">IT Project Manager</span>
                                <span class="career-tag">ERP Consultant</span>
                                <span class="career-tag">Data Analyst</span>
                                <span class="career-tag">IT Auditor</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 8.0 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Manajemen Bisnis -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_173ec79fb-1768476581828.png" alt="Business meeting">
                        <div class="program-icon-badge">💼</div>
                        <div class="program-level-badge">D3 / D4</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Manajemen Bisnis</h3>
                            <div class="program-meta">
                                <span>⏱️ 3-4 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Program studi yang mempersiapkan mahasiswa menjadi profesional di bidang manajemen dengan pemahaman komprehensif tentang strategi bisnis, operasional, pemasaran, dan keuangan perusahaan.</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>Manajemen Strategis & Entrepreneurship</li>
                                <li>Manajemen Pemasaran & Digital Marketing</li>
                                <li>Manajemen Keuangan & Investasi</li>
                                <li>Manajemen Operasional & Supply Chain</li>
                                <li>Manajemen Sumber Daya Manusia</li>
                                <li>Business Plan & Feasibility Study</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Business Manager</span>
                                <span class="career-tag">Marketing Manager</span>
                                <span class="career-tag">Operations Manager</span>
                                <span class="career-tag">HR Manager</span>
                                <span class="career-tag">Entrepreneur</span>
                                <span class="career-tag">Management Trainee</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 7.5 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Akuntansi -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_15db54338-1764657811017.png" alt="Accountant working">
                        <div class="program-icon-badge">🧮</div>
                        <div class="program-level-badge">D3 / D4</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Akuntansi</h3>
                            <div class="program-meta">
                                <span>⏱️ 3-4 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Membekali mahasiswa dengan keahlian dalam pencatatan, pelaporan, dan analisis keuangan sesuai standar akuntansi nasional dan internasional, serta persiapan sertifikasi profesi akuntan.</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>Akuntansi Keuangan & Perpajakan</li>
                                <li>Akuntansi Manajemen & Biaya</li>
                                <li>Audit & Pemeriksaan Akuntan</li>
                                <li>Sistem Informasi Akuntansi (SAP, MYOB)</li>
                                <li>Akuntansi Sektor Publik & Pemerintahan</li>
                                <li>Analisis Laporan Keuangan</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Akuntan Publik</span>
                                <span class="career-tag">Tax Consultant</span>
                                <span class="career-tag">Financial Analyst</span>
                                <span class="career-tag">Internal Auditor</span>
                                <span class="career-tag">Accounting Manager</span>
                                <span class="career-tag">Finance Controller</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 7.5 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Teknik Komputer -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1bcf408ae-1769311016650.png" alt="Computer hardware">
                        <div class="program-icon-badge">🖥️</div>
                        <div class="program-level-badge">D3 / D4</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Teknik Komputer</h3>
                            <div class="program-meta">
                                <span>⏱️ 3-4 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Fokus pada hardware, jaringan komputer, dan sistem embedded. Mahasiswa akan mempelajari instalasi, konfigurasi, troubleshooting perangkat keras dan infrastruktur IT.</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>Arsitektur & Organisasi Komputer</li>
                                <li>Network Administration (CCNA, MTCNA)</li>
                                <li>System Administration (Linux, Windows Server)</li>
                                <li>IoT & Embedded Systems</li>
                                <li>Computer Security & Forensics</li>
                                <li>Server & Datacenter Management</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Network Engineer</span>
                                <span class="career-tag">System Administrator</span>
                                <span class="career-tag">IT Infrastructure</span>
                                <span class="career-tag">Security Analyst</span>
                                <span class="career-tag">IoT Engineer</span>
                                <span class="career-tag">Technical Support</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 8.5 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Manajemen Pemasaran -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_11f1d2f44-1764656055734.png" alt="Marketing team">
                        <div class="program-icon-badge">📢</div>
                        <div class="program-level-badge">D3 / D4</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Manajemen Pemasaran</h3>
                            <div class="program-meta">
                                <span>⏱️ 3-4 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Spesialisasi dalam strategi pemasaran modern termasuk digital marketing, branding, dan consumer behavior untuk menghasilkan marketing professional yang adaptif.</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>Digital Marketing & Social Media Strategy</li>
                                <li>Content Marketing & SEO/SEM</li>
                                <li>Brand Management & Consumer Behavior</li>
                                <li>Marketing Research & Analytics</li>
                                <li>E-Commerce & Marketplace Management</li>
                                <li>Advertising & Creative Campaign</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Digital Marketing Manager</span>
                                <span class="career-tag">Brand Manager</span>
                                <span class="career-tag">Social Media Specialist</span>
                                <span class="career-tag">SEO/SEM Specialist</span>
                                <span class="career-tag">Marketing Analyst</span>
                                <span class="career-tag">Content Strategist</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 7.5 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Administrasi Perkantoran -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1fe7c1bc3-1766946181572.png" alt="Office administrator">
                        <div class="program-icon-badge">📋</div>
                        <div class="program-level-badge">D3</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Administrasi Perkantoran</h3>
                            <div class="program-meta">
                                <span>⏱️ 3 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Mempersiapkan tenaga administrasi profesional yang terampil dalam manajemen perkantoran, kesekretariatan, dan pelayanan administrasi modern.</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>Manajemen Perkantoran Modern</li>
                                <li>Kesekretariatan & Office Management</li>
                                <li>Korespondensi Bisnis (Indonesia & Inggris)</li>
                                <li>Administrasi Keuangan & Perpajakan</li>
                                <li>Office Automation & Digital Tools</li>
                                <li>Public Relations & Protocol</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Executive Secretary</span>
                                <span class="career-tag">Office Manager</span>
                                <span class="career-tag">Admin Coordinator</span>
                                <span class="career-tag">Personal Assistant</span>
                                <span class="career-tag">Document Controller</span>
                                <span class="career-tag">Front Office Manager</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 6.5 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                <!-- Bisnis Digital -->
                <div class="program-card">
                    <div class="program-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_18523168d-1767396082746.png" alt="Digital business analytics">
                        <div class="program-icon-badge">📱</div>
                        <div class="program-level-badge">D4</div>
                    </div>
                    <div class="program-content">
                        <div class="program-header">
                            <h3 class="program-name">Bisnis Digital</h3>
                            <div class="program-meta">
                                <span>⏱️ 4 Tahun</span>
                            </div>
                        </div>
                        <p class="program-description">Program terbaru yang mengintegrasikan teknologi digital dengan bisnis untuk menciptakan entrepreneur digital dan digital business specialist.</p>
                        
                        <div class="program-section">
                            <h4 class="program-section-title">Kurikulum</h4>
                            <ul class="program-list">
                                <li>E-Business & Startup Development</li>
                                <li>Digital Transformation Strategy</li>
                                <li>Fintech & Payment Gateway</li>
                                <li>Data-Driven Business Decision</li>
                                <li>Digital Product Management</li>
                                <li>Growth Hacking & Digital Analytics</li>
                            </ul>
                        </div>

                        <div class="program-section">
                            <h4 class="program-section-title">Prospek Karir</h4>
                            <div class="career-tags">
                                <span class="career-tag">Digital Business Consultant</span>
                                <span class="career-tag">E-Commerce Manager</span>
                                <span class="career-tag">Startup Founder</span>
                                <span class="career-tag">Digital Product Manager</span>
                                <span class="career-tag">Growth Hacker</span>
                                <span class="career-tag">Digital Transformation</span>
                            </div>
                        </div>

                        <div class="program-footer">
                            <div class="tuition">Rp 9.0 Jt/Semester</div>
                            <a href="#" class="apply-button">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2026 Politeknik NSC Surabaya. All rights reserved.</p>
            <p>Jl. Basuki Rahmat No.85, Surabaya 60271</p>
        </div>
    </footer>
</body>
</html>    
