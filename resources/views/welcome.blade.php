<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gandhi Rahmawan | Portfolio</title>

    <!-- Panggil Tailwind CSS v4 -->
    @vite(['resources/css/app.css'])
</head>

<body class="bg-neo-white font-sans antialiased ">

    <x-navbar />

    <!-- Konten Website -->

    <main>
        <!-- Setiap section kita kasih ID buat navigasi dari Navbar -->
        <section id="home" class="page-section section-home">
            <div class="home-container">

                <!-- BAGIAN KIRI (Teks & Tombol) -->
                <div class="home-content">

                    <!-- 1. Badge "HELLOO" & Garis Gantung -->
                    <div class="hello-wrapper">
                        <div class="hanging-line left-line"></div>
                        <div class="hanging-line right-line"></div>
                        <div class="badge-hello">HELLOO!! I,M</div>
                    </div>

                    <!-- 2. Judul Nama & Kotak Dekorasi di Belakangnya -->
                    <div class="title-wrapper">
                        <div class="deco-box green-box"></div>
                        <div class="deco-box blue-box"></div>
                        <h1 class="home-title">GANDHI RAHMAWAN</h1>
                    </div>

                    <!-- 3. Badge Role -->
                    <div class="badge-role">Cyber Security Enthusiast</div>

                    <!-- 4. Tombol -->
                    <div class="home-buttons">
                        <a href="#project" class="btn-work">VIEW ON MY WORK</a>
                        <a href="#contact" class="btn-wa">
                            <img src="{{ asset('images/icons/logo-whatsapp.svg') }}" alt="WA" class="icon-btn">
                            CHAT ON WHATSAPP
                        </a>
                    </div>
                </div>

                <!-- BAGIAN KANAN (Foto Profile Polaroid) -->
                <div class="home-image-wrapper">
                    <div class="profile-card">
                        <!-- Stiker Bintang (Pakai SVG langsung biar tajam) -->
                        <div class="star-sticker">
                            <img src="{{ asset('images/icons/icon-star.png') }}" alt="Star">
                        </div>

                        <img src="{{ asset('images/profile/profile-1.png') }}" alt="Gandhi Rahmawan"
                            class="profile-img">
                        <p class="profile-username">@gandirmn._</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="about" class="page-section section-about"></section>

        <section id="project" class="page-section section-project"></section>

        <section id="skills" class="page-section section-skills"></section>

        <section id="github" class="page-section section-github"></section>

        <section id="certificate" class="page-section section-certificate"></section>

        <section id="contact" class="page-section section-contact"></section>

    </main>

</body>

</html>