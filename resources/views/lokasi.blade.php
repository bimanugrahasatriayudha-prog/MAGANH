<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi & Kontak - Politeknik NSC Surabaya</title>
    <meta name="description" content="Temukan lokasi kampus Politeknik NSC Surabaya dan hubungi kami untuk informasi lebih lanjut. Alamat, telepon, email, dan peta lokasi kampus.">
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

        /* Map Section */
        .map-container {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            margin-bottom: 3rem;
        }

        .map-embed {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .map-embed iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .map-info {
            padding: 1.5rem;
            background: #F3F4F6;
            display: flex;
            align-items: start;
            gap: 1rem;
        }

        .map-icon {
            font-size: 24px;
            color: #2E7D32;
            margin-top: 2px;
        }

        .map-info-text p:first-child {
            font-size: 0.875rem;
            font-weight: 600;
            color: #6B7280;
            margin-bottom: 0.25rem;
        }

        .map-info-text p:last-child {
            color: #1A1A1A;
            font-weight: 500;
        }

        /* Nearby Places Grid */
        .nearby-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .nearby-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .nearby-card:hover {
            transform: translateY(-5px);
        }

        .nearby-icon {
            width: 48px;
            height: 48px;
            background: rgba(46, 125, 50, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 24px;
            color: #2E7D32;
        }

        .nearby-name {
            font-size: 0.875rem;
            font-weight: 600;
            color: #1A1A1A;
            margin-bottom: 0.25rem;
        }

        .nearby-distance {
            font-size: 0.75rem;
            color: #6B7280;
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: 2fr 3fr;
            gap: 3rem;
        }

        /* Contact Info */
        .contact-info-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .contact-item {
            display: flex;
            align-items: start;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            background: rgba(46, 125, 50, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #2E7D32;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-size: 0.875rem;
            font-weight: 600;
            color: #6B7280;
            margin-bottom: 0.25rem;
        }

        .contact-details p {
            color: #1A1A1A;
            font-weight: 500;
        }

        .social-links {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #2E7D32;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-size: 20px;
            transition: background 0.3s;
        }

        .social-link:hover {
            background: #1B5E20;
        }

        /* Contact Form */
        .contact-form {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #1A1A1A;
            margin-bottom: 0.5rem;
        }

        .form-input,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #E5E7EB;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-input:focus,
        .form-textarea:focus,
        .form-select:focus {
            outline: none;
            border-color: #2E7D32;
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-button {
            width: 100%;
            padding: 1rem;
            background: #2E7D32;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-button:hover {
            background: #1B5E20;
        }

        /* Transportation Grid */
        .transport-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .transport-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .transport-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .transport-icon {
            width: 64px;
            height: 64px;
            background: rgba(46, 125, 50, 0.1);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 32px;
            color: #2E7D32;
        }

        .transport-name {
            font-size: 1.125rem;
            font-weight: bold;
            color: #1A1A1A;
            margin-bottom: 0.5rem;
        }

        .transport-info {
            font-size: 0.875rem;
            color: #6B7280;
        }

        /* CTA Box */
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

            .contact-grid {
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
                <a href="ProgramStudi">Program Studi</a>
                <a href="lokasi" class="active">Lokasi</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <img src="https://images.unsplash.com/photo-1632580626212-488f2d8d8f82" alt="Aerial view of campus location">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <h2>Lokasi & Kontak</h2>
            <p class="hero-description">Kunjungi kampus kami atau hubungi untuk informasi lebih lanjut tentang Politeknik NSC Surabaya</p>
        </div>
    </section>

    <!-- Map Section -->
    <section class="bg-white">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <span class="section-badge">Peta Lokasi</span>
                <h2 class="section-title">Temukan Kami</h2>
                <p class="section-description">Kampus kami berlokasi strategis di pusat kota Surabaya dengan akses mudah dari berbagai area</p>
            </div>

            <div class="map-container">
                <div class="map-embed">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7564363732!2d112.73910287405899!3d-7.268534371417502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdfa1c465cb%3A0x5eb771d0f786b594!2sPoliteknik%20NSC%20Surabaya!5e0!3m2!1sid!2sid!4v1770170656392!5m2!1sid!2sid"
                        allowfullscreen
                        loading="lazy"
                        title="Peta Lokasi Politeknik NSC Surabaya">
                    </iframe>
                </div>
                <div class="map-info">
                    <div class="map-icon">📍</div>
                    <div class="map-info-text">
                        <p>Alamat Lengkap:</p>
                        <p>Jl. Basuki Rahmat No.85, Embong Kaliasin, Kec. Genteng, Kota Surabaya, Jawa Timur 60271
</p>
                    </div>
                </div>
            </div>

            <!-- Nearby Places -->
            <div class="nearby-grid">
                <div class="nearby-card">
                    <div class="nearby-icon">🏛️</div>
                    <p class="nearby-name">Monumen Kapal Selam</p>
                    <p class="nearby-distance">3.0 km</p>
                </div>
                <div class="nearby-card">
                    <div class="nearby-icon">🏬</div>
                    <p class="nearby-name">Tunjungan Plaza</p>
                    <p class="nearby-distance">1.5 km</p>
                </div>
                <div class="nearby-card">
                    <div class="nearby-icon">🏥</div>
                    <p class="nearby-name">RSUD Dr. Soetomo</p>
                    <p class="nearby-distance">4.0 km</p>
                </div>
                <div class="nearby-card">
                    <div class="nearby-icon">🚉</div>
                    <p class="nearby-name">Stasiun Gubeng</p>
                    <p class="nearby-distance">3.5 km</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-muted">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info -->
                <div>
                    <h2 class="section-title" style="margin-bottom: 2rem;">Hubungi Kami</h2>
                    
                    <div class="contact-info-card">
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div class="contact-details">
                                <h4>Alamat</h4>
                                <p>Jl. Basuki Rahmat No.85, Embong Kaliasin, <br> Genteng, Kota Surabaya, Jawa Timur 60271</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div class="contact-details">
                                <h4>Telepon</h4>
                                <p>+62 31 1234 5678<br>+62 812 3456 7890</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>info@politekniknsc.ac.id<br>admission@politekniknsc.ac.id</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">🕐</div>
                            <div class="contact-details">
                                <h4>Jam Operasional</h4>
                                <p>Senin - Jumat: 08:00 - 21:00<br>Sabtu: 08:00 - 14:00</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <h4 style="margin-bottom: 1rem; color: #1A1A1A; font-weight: 600;">Ikuti Kami</h4>
                        <div class="social-links">
                            <a href="#" class="social-link">f</a>
                            <a href="#" class="social-link">📷</a>
                            <a href="#" class="social-link">🐦</a>
                            <a href="#" class="social-link">💼</a>
                            <a href="#" class="social-link">▶️</a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h3 class="form-title">Kirim Pesan</h3>
                    <form>
                        <div class="form-group">
                            <label class="form-label" for="name">Nama Lengkap *</label>
                            <input type="text" id="name" class="form-input" placeholder="Masukkan nama lengkap Anda" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="email">Email *</label>
                            <input type="email" id="email" class="form-input" placeholder="nama@email.com" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="phone">Nomor Telepon *</label>
                            <input type="tel" id="phone" class="form-input" placeholder="08xx xxxx xxxx" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="subject">Subjek *</label>
                            <select id="subject" class="form-select" required>
                                <option value="">Pilih subjek pesan</option>
                                <option value="info">Informasi Umum</option>
                                <option value="admission">Pendaftaran Mahasiswa Baru</option>
                                <option value="program">Informasi Program Studi</option>
                                <option value="partnership">Kerjasama & Partnership</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Pesan *</label>
                            <textarea id="message" class="form-textarea" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>

                        <button type="submit" class="form-button">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Transportation Section -->
    <section class="bg-white">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <h2 class="section-title">Akses Transportasi</h2>
                <p class="section-description">Berbagai pilihan transportasi untuk mencapai kampus kami dengan mudah dan nyaman</p>
            </div>

            <div class="transport-grid">
                <div class="transport-card">
                    <div class="transport-icon">🚌</div>
                    <h3 class="transport-name">Bus Kota</h3>
                    <p class="transport-info">Jalur A, C, E</p>
                </div>

                <div class="transport-card">
                    <div class="transport-icon">🚕</div>
                    <h3 class="transport-name">Taksi Online</h3>
                    <p class="transport-info">Grab, Gojek</p>
                </div>

                <div class="transport-card">
                    <div class="transport-icon">🚗</div>
                    <h3 class="transport-name">Parkir Mobil</h3>
                    <p class="transport-info">200 slot tersedia</p>
                </div>

                <div class="transport-card">
                    <div class="transport-icon">🏍️</div>
                    <h3 class="transport-name">Parkir Motor</h3>
                    <p class="transport-info">500 slot tersedia</p>
                </div>
            </div>

            <!-- Campus Tour CTA -->
            <div class="cta-box">
                <div class="cta-icon">🏢</div>
                <h3 class="cta-title">Ingin Berkunjung ke Kampus?</h3>
                <p class="cta-description">Jadwalkan kunjungan kampus Anda dan lihat langsung fasilitas serta lingkungan belajar kami</p>
                <a href="#" class="cta-button">
                    <span>📅</span>
                    <span>Jadwalkan Campus Tour</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2026 Politeknik NSC Surabaya. All rights reserved.</p>
            <p>Jl. Basuki Rahmat No.85, Embong Kaliasin, Kec. Genteng, Kota Surabaya, Jawa Timur 60271</p>
        </div>
    </footer>
</body>
</html>