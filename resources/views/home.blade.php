<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Creative Gradient Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <style>
        :root {
            --bg-gradient: linear-gradient(135deg, #667eea, #764ba2);
            --card-bg: rgba(255,255,255,0.15);
            --text-color: #ffffff;
            --glass: blur(15px);
        }

        body.dark {
            --bg-gradient: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            --card-bg: rgba(0,0,0,0.4);
            --text-color: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            background: var(--bg-gradient);
            color: var(--text-color);
            transition: 0.5s;
            overflow-x: hidden;
        }

        header {
            padding: 30px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 28px;
            letter-spacing: 1px;
        }

        .toggle {
            cursor: pointer;
            padding: 10px 20px;
            border-radius: 30px;
            border: 1px solid #fff;
            background: transparent;
            color: #fff;
        }

        .hero {
            text-align: center;
            padding: 80px 20px;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            max-width: 600px;
            margin: auto;
            opacity: 0.9;
            font-size: 18px;
        }

        .btn {
            margin-top: 40px;
            padding: 15px 40px;
            font-size: 16px;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            color: #000;
            transition: 0.4s;
        }

        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        section {
            padding: 80px 60px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--card-bg);
            backdrop-filter: var(--glass);
            border-radius: 20px;
            padding: 30px;
            transition: 0.5s;
            transform: translateY(40px);
            opacity: 0;
        }

        .card.show {
            transform: translateY(0);
            opacity: 1;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .card h3 {
            margin-bottom: 15px;
        }

        footer {
            text-align: center;
            padding: 30px;
            opacity: 0.7;
        }

        .toast {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: rgba(0,0,0,0.7);
            padding: 15px 25px;
            border-radius: 10px;
            opacity: 0;
            transform: translateY(20px);
            transition: 0.5s;
        }

        .toast.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

<header>
    <h1>CreativeWeb</h1>
    <button class="toggle" onclick="toggleMode()">🌙 Mode</button>
</header>

<div class="hero">
    <h2>Website Modern & Interaktif</h2>
    <p>Contoh website dengan desain gradasi, animasi halus, dan interaksi menggunakan HTML, CSS, dan JavaScript.</p>
    <button class="btn" onclick="showToast()">Coba Interaksi</button>
</div>

<section>
    <div class="cards">
        <div class="card">
            <h3>⚡ Fast</h3>
            <p>Ringan dan cepat tanpa framework berat.</p>
        </div>
        <div class="card">
            <h3>🎨 Modern UI</h3>
            <p>Gradasi warna dan efek glassmorphism.</p>
        </div>
        <div class="card">
            <h3>🧠 Interaktif</h3>
            <p>Animasi dan fitur berbasis JavaScript.</p>
        </div>
    </div>
</section>

<footer>
    © 2026 Creative Gradient Website
</footer>

<div class="toast" id="toast">
    🎉 Interaksi berhasil dijalankan!
</div>

<!-- JavaScript -->
<script>
    // Dark Mode
    function toggleMode() {
        document.body.classList.toggle("dark");
    }

    // Toast Notification
    function showToast() {
        const toast = document.getElementById("toast");
        toast.classList.add("show");
        setTimeout(() => toast.classList.remove("show"), 3000);
    }

    // Scroll Animation
    const cards = document.querySelectorAll(".card");
    window.addEventListener("scroll", () => {
        cards.forEach(card => {
            const rect = card.getBoundingClientRect().top;
            if (rect < window.innerHeight - 50) {
                card.classList.add("show");
            }
        });
    });
</script>

</body>
</html>
