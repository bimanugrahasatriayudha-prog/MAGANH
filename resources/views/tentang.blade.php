<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Politeknik NSC Surabaya</title>
    <meta name="description" content="Politeknik NSC Surabaya - 25+ tahun pengalaman dalam pendidikan vokasi berkualitas. Akreditasi A, fasilitas modern, dan komitmen menghasilkan lulusan profesional.">
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

        .bg-white {
            background-color: white;
        }

        .bg-muted {
            background-color: #F3F4F6;
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

        /* Vision Mission Grid */
        .vision-mission-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .vm-card {
            background: white;
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .vm-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .vm-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .vm-icon {
            width: 64px;
            height: 64px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
        }

        .vm-icon.vision {
            background: rgba(46, 125, 50, 0.1);
            color: #2E7D32;
        }

        .vm-icon.mission {
            background: rgba(102, 187, 106, 0.1);
            color: #66BB6A;
        }

        .vm-title {
            font-size: 2rem;
            font-weight: bold;
            color: #1A1A1A;
        }

        .vm-content {
            color: #6B7280;
            line-height: 1.8;
        }

        .vm-content li {
            display: flex;
            align-items: start;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .check-icon {
            color: #2E7D32;
            font-size: 20px;
            margin-top: 2px;
        }

        /* History Section */
        .history-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .history-image {
            position: relative;
            height: 500px;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .history-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .history-badge {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            right: 2rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 1.5rem;
        }

        .history-badge .number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2E7D32;
            margin-bottom: 0.5rem;
        }

        .history-badge .text {
            font-size: 0.875rem;
            color: #1A1A1A;
            font-weight: 500;
        }

        .history-content p {
            color: #6B7280;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .history-content strong {
            color: #1A1A1A;
        }

        /* Facilities Grid */
        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .facility-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .facility-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .facility-image {
            position: relative;
            height: 224px;
            overflow: hidden;
        }

        .facility-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .facility-card:hover .facility-image img {
            transform: scale(1.1);
        }

        .facility-icon-badge {
            position: absolute;
            bottom: 1rem;
            left: 1rem;
            width: 48px;
            height: 48px;
            background: #2E7D32;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
        }

        .facility-content {
            padding: 1.5rem;
        }

        .facility-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 0.75rem;
        }

        .facility-description {
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.6;
        }

        /* Leadership Grid */
        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .leader-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .leader-card:hover {
            transform: translateY(-5px);
        }

        .leader-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2E7D32, #66BB6A);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 48px;
            margin: 0 auto 1.5rem;
        }

        .leader-name {
            font-size: 1.25rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 0.5rem;
        }

        .leader-position {
            color: #2E7D32;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .leader-bio {
            color: #6B7280;
            font-size: 0.875rem;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-box {
            background: #2E7D32;
            border-radius: 24px;
            padding: 3rem;
            text-align: center;
            margin-top: 4rem;
        }

        .cta-icon {
            font-size: 64px;
            color: white;
            margin-bottom: 1.5rem;
        }

        .cta-title {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            margin-bottom: 1rem;
        }

        .cta-description {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.125rem;
            max-width: 768px;
            margin: 0 auto 2rem;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: white;
            color: #2E7D32;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }

        .cta-button:hover {
            background: #F3F4F6;
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

            .vision-mission-grid,
            .history-grid {
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
                <a href="tentang" class="active">Tentang</a>
                <a href="ProgramStudi">Program Studi</a>
                <a href="lokasi">Lokasi</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_19bf7aa13-1764782659695.png" alt="Modern campus aerial view">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <h2>Tentang Politeknik NSC</h2>
            <p class="hero-description">Membangun generasi profesional melalui pendidikan vokasi berkualitas sejak 2001</p>
        </div>
    </section>

    <!-- Vision Mission Section -->
    <section class="bg-white">
        <div class="container">
            <div class="vision-mission-grid">
                <!-- Vision -->
                <div class="vm-card">
                    <div class="vm-header">
                        <div class="vm-icon vision">👁️</div>
                        <h3 class="vm-title">Visi</h3>
                    </div>
                    <div class="vm-content">
                        <p>Menjadi politeknik terkemuka yang menghasilkan lulusan profesional, kompeten, dan berdaya saing global di bidang teknologi informasi dan bisnis pada tahun 2030.</p>
                    </div>
                </div>

                <!-- Mission -->
                <div class="vm-card">
                    <div class="vm-header">
                        <div class="vm-icon mission">🚀</div>
                        <h3 class="vm-title">Misi</h3>
                    </div>
                    <div class="vm-content">
                        <ul style="list-style: none;">
                            <li>
                                <span class="check-icon">✓</span>
                                <span>Menyelenggarakan pendidikan vokasi berkualitas tinggi yang berorientasi pada kebutuhan industri</span>
                            </li>
                            <li>
                                <span class="check-icon">✓</span>
                                <span>Mengembangkan kurikulum yang adaptif terhadap perkembangan teknologi dan tuntutan pasar kerja</span>
                            </li>
                            <li>
                                <span class="check-icon">✓</span>
                                <span>Membangun kemitraan strategis dengan industri untuk program magang dan penempatan kerja</span>
                            </li>
                            <li>
                                <span class="check-icon">✓</span>
                                <span>Meningkatkan kompetensi dosen melalui pelatihan dan sertifikasi profesional berkelanjutan</span>
                            </li>
                            <li>
                                <span class="check-icon">✓</span>
                                <span>Menyediakan fasilitas pembelajaran modern yang mendukung proses belajar mengajar efektif</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="bg-muted">
        <div class="container">
            <div class="history-grid">
                <div class="history-image">
                    <img src="https://images.unsplash.com/photo-1592114691988-9a9d58c4c59c" alt="Historic campus building">
                    <div class="history-badge">
                        <div class="number">25+</div>
                        <div class="text">Tahun Berpengalaman dalam Pendidikan Vokasi</div>
                    </div>
                </div>
                <div class="history-content">
                    <span class="section-badge">Sejarah Kami</span>
                    <h2 class="section-title">Perjalanan Politeknik NSC</h2>
                    <p><strong>Politeknik NSC Surabaya</strong> didirikan pada tahun 2001 dengan visi menjadi institusi pendidikan vokasi terdepan di Indonesia Timur. Berawal dari kampus kecil dengan 3 program studi dan 150 mahasiswa, kini NSC telah berkembang menjadi politeknik terkemuka dengan 8 program studi dan lebih dari 2.500 mahasiswa aktif.</p>
                    <p>Sejak awal berdirinya, NSC berkomitmen untuk menghasilkan lulusan yang tidak hanya kompeten secara akademis, tetapi juga siap kerja dengan keterampilan praktis yang dibutuhkan industri. Kurikulum kami dirancang bersama praktisi industri untuk memastikan relevansi dengan kebutuhan pasar kerja.</p>
                    <p>Dalam perjalanannya, NSC telah meraih berbagai pencapaian signifikan termasuk akreditasi A untuk seluruh program studi, kemitraan dengan lebih dari 150 perusahaan terkemuka, dan tingkat penempatan kerja lulusan mencapai 95% dalam 6 bulan setelah kelulusan.</p>
                    <p>Fasilitas kampus terus dikembangkan untuk mendukung proses pembelajaran yang optimal, termasuk laboratorium modern, perpustakaan digital, pusat bahasa, dan ruang co-working untuk mahasiswa. NSC juga aktif dalam penelitian terapan dan pengabdian masyarakat sebagai wujud Tri Dharma Perguruan Tinggi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="bg-muted">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <span class="section-badge">Fasilitas Kampus</span>
                <h2 class="section-title">Fasilitas Kelas Dunia</h2>
                <p class="section-description">Kami menyediakan fasilitas modern dan lengkap untuk mendukung proses pembelajaran yang optimal</p>
            </div>

            <div class="facilities-grid">
                <div class="facility-card">
                    <div class="facility-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1d439990b-1768108454956.png" alt="Computer laboratory">
                        <div class="facility-icon-badge">💻</div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Laboratorium Komputer</h3>
                        <p class="facility-description">5 lab dengan 200+ unit komputer terbaru untuk praktikum programming, networking, dan multimedia</p>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-image">
                        <img src="https://images.unsplash.com/photo-1706246612316-989af8e54658" alt="Digital library">
                        <div class="facility-icon-badge">📚</div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Perpustakaan Digital</h3>
                        <p class="facility-description">Koleksi 50,000+ buku dan jurnal digital dengan akses 24/7 untuk mendukung pembelajaran</p>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_168864a57-1767705133511.png" alt="Industrial workshop">
                        <div class="facility-icon-badge">🔧</div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Workshop Industri</h3>
                        <p class="facility-description">Ruang praktik dengan peralatan standar industri untuk simulasi lingkungan kerja nyata</p>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-image">
                        <img src="https://images.unsplash.com/photo-1721899129343-016e361a6ec4" alt="Co-working space">
                        <div class="facility-icon-badge">🏢</div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Co-Working Space</h3>
                        <p class="facility-description">Area kolaborasi modern untuk project-based learning dan startup incubator</p>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_195751c28-1764693915196.png" alt="Sports facility">
                        <div class="facility-icon-badge">🏆</div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Fasilitas Olahraga</h3>
                        <p class="facility-description">Lapangan basket, futsal, dan fitness center untuk menjaga kesehatan mahasiswa</p>
                    </div>
                </div>

                <div class="facility-card">
                    <div class="facility-image">
                        <img src="https://img.rocket.new/generatedImages/rocket_gen_img_14eb2fc16-1767105534947.png" alt="Cafeteria">
                        <div class="facility-icon-badge">🍽️</div>
                    </div>
                    <div class="facility-content">
                        <h3 class="facility-title">Kantin & Cafeteria</h3>
                        <p class="facility-description">Area makan nyaman dengan berbagai pilihan menu sehat dan terjangkau</p>
                    </div>
                </div>
            </div>

            <div class="cta-box">
                <div class="cta-icon">🎥</div>
                <h3 class="cta-title">Virtual Campus Tour</h3>
                <p class="cta-description">Jelajahi kampus kami secara virtual dan lihat langsung fasilitas yang kami sediakan</p>
                <a href="#" class="cta-button">
                    <span>▶</span>
                    <span>Mulai Tour Virtual</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Leadership Section -->
    <section class="bg-white">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <span class="section-badge">Tim Kepemimpinan</span>
                <h2 class="section-title">Pimpinan Politeknik NSC</h2>
                <p class="section-description">Dipimpin oleh profesional berpengalaman yang berkomitmen pada keunggulan pendidikan</p>
            </div>

            <div class="leadership-grid">
                <div class="leader-card">
                    <div class="leader-avatar">👨‍💼</div>
                    <h3 class="leader-name">Dr. Budi Santoso, M.T.</h3>
                    <p class="leader-position">Direktur</p>
                    <p class="leader-bio">25+ tahun pengalaman di bidang pendidikan vokasi. Lulusan S3 Manajemen Pendidikan ITB dengan fokus penelitian pada pengembangan kurikulum berbasis industri.</p>
                </div>

                <div class="leader-card">
                    <div class="leader-avatar">👨‍🏫</div>
                    <h3 class="leader-name">Ir. Siti Nurhaliza, M.Kom.</h3>
                    <p class="leader-position">Wakil Direktur Akademik</p>
                    <p class="leader-bio">Spesialis dalam pengembangan kurikulum teknologi informasi. Berpengalaman 15 tahun sebagai praktisi IT di perusahaan multinasional sebelum bergabung dengan NSC.</p>
                </div>

                <div class="leader-card">
                    <div class="leader-avatar">👩‍💼</div>
                    <h3 class="leader-name">Drs. Ahmad Fauzi, M.M.</h3>
                    <p class="leader-position">Wakil Direktur Kemahasiswaan</p>
                    <p class="leader-bio">Ahli dalam pengembangan soft skills dan character building mahasiswa. Aktif dalam berbagai organisasi pendidikan nasional dan internasional.</p>
                </div>

                <div class="leader-card">
                    <div class="leader-avatar">👩‍🔬</div>
                    <h3 class="leader-name">Dr. Rina Wijaya, S.E., M.Ak.</h3>
                    <p class="leader-position">Ketua Program Studi Akuntansi</p>
                    <p class="leader-bio">Akuntan profesional bersertifikat dengan pengalaman audit di Big Four. Fokus pada pengembangan kompetensi akuntansi sesuai standar internasional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2026 Politeknik NSC Surabaya. All rights reserved.</p>
            <p>
Jl. Basuki Rahmat No.85, Embong Kaliasin, Genteng, Kota SBY, Jawa Timur 60271, Indonesia</p>
        </div>
    </footer>
</body>
</html>