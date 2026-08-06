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
                </div>s

            </div>
        </section>

        <section id="about" class="page-section section-about">
            <div class="about-container">

                <!-- BAGIAN KIRI: Kotak Deskripsi & 3 Badge Skill -->
                <div class="about-left">

                    <!-- Kotak Teks Utama -->
                    <div class="about-main-card">
                        <h3 class="about-greeting">
                            I'M <span class="text-green">GANDHI RAHMAWAN,</span><br>
                            <span class="highlight-blue">S1 INFORMATIC ENGINEERING STUDENT</span>
                        </h3>
                        <p class="about-desc">
                            As an IT student at Universitas Negeri Malang (FT UM), I am passionate about cybersecurity,
                            low-level programming, and secure development. I enjoy exploring system vulnerabilities,
                            from memory management to web application security. Currently, I am continuously learning
                            and expanding my skills in ethical hacking to build safer digital solutions.
                        </p>
                    </div>

                    <!-- 3 Badge Kategori -->
                    <div class="about-skills">
                        <div class="skill-box bg-light-green">UI/UX DESIGN</div>
                        <div class="skill-box bg-cyan">WEB DEVELOPMENT</div>
                        <div class="skill-box bg-red">CYBERSECURITY</div>
                    </div>

                </div>

                <!-- BAGIAN KANAN: Banner, Foto & Kontak -->
                <div class="about-right">

                    <!-- Judul Miring -->
                    <div class="about-title-banner">
                        ABOUT ME
                    </div>

                    <!-- Foto Polaroid (cuma 1) -->
                    <div class="about-photo-wrapper">
                        <div class="blue-backdrop"></div>
                        <div class="photo-frame">
                            <img src="{{ asset('images/profile/profile-2.jpeg') }}" alt="Gandhi About"
                                class="about-img">
                        </div>
                    </div>

                    <!-- 3 Kotak Kontak Kecil -->
                    <div class="about-contacts">
                        <div class="contact-card bg-white">
                            <img src="{{ asset('images/icons/icon-location.svg') }}" alt="Pin" class="contact-icon">
                            <span class="contact-text">Malang,<br>Indonesia</span>
                        </div>
                        <div class="contact-card bg-cyan">
                            <img src="{{ asset('images/icons/icon-email.svg') }}" alt="Mail" class="contact-icon">
                            <span class="contact-text">gandhirahmawan<br>@gmail.com</span>
                        </div>
                        <a href="#contact" class="contact-card bg-white btn-hire">
                            <img src="{{ asset('images/icons/icon-share.svg') }}" alt="Hire" class="contact-icon">
                            <span class="contact-text font-black">HIRE ME</span>
                        </a>
                    </div>

                </div>

            </div>

            </div>
        </section>

        <section id="project" class="page-section section-project"></section>

        <section id="skills" class="page-section section-skills"></section>

        <section id="github" class="page-section section-github"></section>

        <section id="certificate" class="page-section section-certificate"></section>

        <section id="contact" class="page-section section-contact"></section>

    </main>

</body>

</html>