<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gandhi Rahmawan | Portfolio</title>

    @vite(['resources/css/app.css'])
</head>

<body class="bg-neo-white font-sans antialiased ">

    <x-navbar />


    <main>
        <section id="home" class="page-section section-home">
            <div class="home-container">

                <div class="home-content">

                    <!-- 1. HELLOO and Garis Gantung -->
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

        <<section id="project" class="page-section section-project">
            <div class="project-container">

                <!-- Bagian Atas: Title Banner & Tombol Navigasi -->
                <div class="project-header">
                    <div class="project-title-box">
                        <h2 class="project-title-text">MY PROJECT</h2>
                    </div>
                    <div class="project-nav-buttons">
                        <button class="nav-btn">&lt;</button>
                        <button class="nav-btn">&gt;</button>
                    </div>
                </div>

                <!-- Grid 3 Kotak Card -->
                <div class="project-grid">

                    <!-- Card 1 -->
                    <div class="project-card">
                        <!-- Ganti nama file ini sesuai gambar screenshot project-mu di public/images/projects -->
                        <img src="{{ asset('images/projects/arena_alocator.png') }}" alt="Project 1"
                            class="project-img">
                        <div class="project-content">
                            <h3 class="project-name">Arena Allocator</h3>
                            <p class="project-desc">Sebuah custom memory management system yang dibangun menggunakan
                                teknik low-level modular programming di bahasa C. Project ini fokus pada alokasi memori
                                manual yang efisien, mencakup implementasi struktur data dasar seperti linked lists,
                                stacks, queues, hingga dynamic arrays (array_list).</p>
                            <div class="project-tech">
                                <!-- Pastikan icon SVG-nya udah ada di folder icons -->
                                <img src="{{ asset('images/icons/icon-c.svg') }}" alt="C" class="tech-icon">
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="project-card">
                        <img src="{{ asset('images/projects/ivrd.png') }}" alt="Project 2" class="project-img">
                        <div class="project-content">
                            <h3 class="project-name">IVRD E-Commerce</h3>
                            <p class="project-desc">A dedicated e-commerce platform untuk berjualan game mods, spesifik
                                untuk rute kereta api virtual. Dibuat khusus untuk Indonesian Virtual Railway Division
                                (IVRD) agar proses transaksi dan download produk jadi lebih seamless.
                            </p>
                            <div class="project-tech">
                                <img src="{{ asset('images/icons/icon-laravel.svg') }}" alt="Laravel" class="tech-icon">
                                <img src="{{ asset('images/icons/icon-php.svg') }}" alt="php" class="tech-icon">
                                <img src="{{ asset('images/icons/icon-mysql.svg') }}" alt="MySQL" class="tech-icon">
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="project-card">
                        <img src="{{ asset('images/projects/project-3.png') }}" alt="Project 3" class="project-img">
                        <div class="project-content">
                            <h3 class="project-name">Restaurant ERD System</h3>
                            <p class="project-desc">Entity Relationship Diagram and database architecture proposal for a
                                restaurant management system.</p>
                            <div class="project-tech">
                                <img src="{{ asset('images/icons/icon-mysql.svg') }}" alt="MySQL" class="tech-icon">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </section>

            <section id="skills" class="page-section section-skills">
                <div class="skills-container">

                    <!-- Banner Judul Gantung -->
                    <div class="skills-title-wrapper">
                        <div class="skills-line left-line"></div>
                        <div class="skills-line right-line"></div>
                        <div class="skills-banner">SKILLS</div>
                    </div>

                    <!-- Grid Kotak Skill -->
                    <div class="skills-grid">

                        <!-- Skill 1: React -->
                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-react.svg') }}" alt="React" class="skill-icon">
                            <span class="skill-name">REACT</span>
                        </div>

                        <!-- Skill 2: C / C++ (Logo C yang di figma tulisannya Django wkwk) -->
                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-c.svg') }}" alt="C" class="skill-icon">
                            <span class="skill-name">C / C++</span>
                        </div>

                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-kali.svg') }}" alt="C" class="skill-icon">
                            <span class="skill-name">KALILINUX</span>
                        </div>

                        <!-- Skill 3: Python -->
                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-python.svg') }}" alt="Python" class="skill-icon">
                            <span class="skill-name">PYTHON</span>
                        </div>

                        <!-- Skill 4: PHP -->
                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-php.svg') }}" alt="PHP" class="skill-icon">
                            <span class="skill-name">PHP</span>
                        </div>

                        <!-- Skill 5: GitHub -->
                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-github.svg') }}" alt="GitHub" class="skill-icon">
                            <span class="skill-name">GITHUB</span>
                        </div>

                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-laravel.svg') }}" alt="Laravel" class="skill-icon">
                            <span class="skill-name">LARAVEL</span>
                        </div>

                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-hack.svg') }}" alt="HackTheBox" class="skill-icon">
                            <span class="skill-name">HACKTHEBOX</span>
                        </div>

                        <div class="skill-card">
                            <img src="{{ asset('images/icons/icon-nmap.svg') }}" alt="Nmap" class="skill-icon">
                            <span class="skill-name">NMAP</span>
                        </div>

                    </div>

                </div>
            </section>

            <section id="github" class="page-section section-github">
                <div class="github-container">

                    <!-- Banner Judul Gantung -->
                    <div class="github-title-wrapper">
                        <div class="github-line left-line"></div>
                        <div class="github-line right-line"></div>
                        <div class="github-banner">GITHUB STATISTICS</div>
                    </div>

                    <!-- GitHub Contribution Graph -->
                    <div class="github-graph-box">
                        <div class="github-graph-wrapper">

                            <!-- Baris label bulan -->
                            <div class="graph-months">
                                <div class="graph-day-labels-spacer"></div>
                                @php $lastMonth = null; @endphp
                                @foreach ($stats['contributions']['weeks'] as $week)
                                    @php
                                        $firstDay = $week['contributionDays'][0]['date'] ?? null;
                                        $monthLabel = '';
                                        if ($firstDay) {
                                            $month = \Carbon\Carbon::parse($firstDay)->format('M');
                                            if ($month !== $lastMonth) {
                                                $monthLabel = $month;
                                                $lastMonth = $month;
                                            }
                                        }
                                    @endphp
                                    <div class="graph-month-col">{{ $monthLabel }}</div>
                                @endforeach
                            </div>

                            <!-- Baris label hari + kotak-kotak -->
                            <div class="graph-body">
                                <div class="graph-day-labels">
                                    <span>Mon</span>
                                    <span>Wed</span>
                                    <span>Fri</span>
                                </div>

                                <div class="github-graph-grid">
                                    @foreach ($stats['contributions']['weeks'] as $week)
                                        <div class="graph-col">
                                            @foreach ($week['contributionDays'] as $day)
                                                @php
                                                    $count = $day['contributionCount'];
                                                    $level = match (true) {
                                                        $count === 0 => 0,
                                                        $count <= 2 => 1,
                                                        $count <= 5 => 2,
                                                        $count <= 9 => 3,
                                                        default => 4,
                                                    };
                                                @endphp
                                                <div class="graph-cell level-{{ $level }}"
                                                    title="{{ $day['date'] }}: {{ $count }} contributions">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- 4 Stat Cards -->
                    <div class="github-stats-grid">

                        <!-- Stars Card -->
                        <div class="stat-card bg-gold">
                            <div class="stat-header">
                                <span class="stat-title">STARS</span>
                                <img src="{{ asset('images/icons/icon-bintang.svg') }}" alt="Star" class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['repos']['total_stars'] }}</h3>
                            <p class="stat-desc">RECEIVED ON PROJECTS</p>
                        </div>

                        <!-- Repositories Card -->
                        <div class="stat-card bg-purple">
                            <div class="stat-header">
                                <span class="stat-title">REPOSITORIES</span>
                                <img src="{{ asset('images/icons/icon-repositories.svg') }}" alt="Repo"
                                    class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['repos']['total_repos'] }}</h3>
                            <p class="stat-desc">PUBLIC REPOSITORIES</p>
                        </div>

                        <!-- Followers Card -->
                        <div class="stat-card bg-white">
                            <div class="stat-header">
                                <span class="stat-title">FOLLOWERS</span>
                                <img src="{{ asset('images/icons/icon-person.svg') }}" alt="Users" class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['user']['followers'] }}</h3>
                            <p class="stat-desc">GITHUB FOLLOWERS</p>
                        </div>

                        <!-- Contributions Card -->
                        <div class="stat-card bg-green">
                            <div class="stat-header">
                                <span class="stat-title">CONTRIBUTIONS</span>
                                <img src="{{ asset('images/icons/icon-contributies.svg') }}" alt="Commit"
                                    class="stat-icon">
                            </div>
                            <h3 class="stat-number">{{ $stats['contributions']['total'] }}</h3>
                            <p class="stat-desc">LAST YEAR</p>
                        </div>

                    </div>

                </div>
            </section>

            <section id="certificates" class="page-section section-certificates">
                <div class="cert-container">

                    <div class="cert-header">
                        <div class="cert-title-box">
                            <h2 class="cert-title">MY CERTIFICATES</h2>
                        </div>
                    </div>

                    <div class="cert-grid">


                        <div class="cert-card">
                            <img src="{{ asset('images/certificates/sertif-database.jpg') }}"
                                alt="Cyber Security Certificate" class="cert-img">
                            <div class="cert-content">
                                <h3 class="cert-name">DSISTEM MANAJEMEN DATABASE TERINTEGRASI UNTUK
                                    KASIR WARUNG KIKILABANG
                                </h3>
                                <button type="button" class="cert-issuer cert-detail-btn"
                                    data-pdf="{{ asset('images/certificates/sertif-database.pdf') }}">
                                    Detail
                                </button>
                            </div>
                        </div>

                        <div class="cert-card">
                            <img src="{{ asset('images/certificates/sertif-web.jpg') }}" alt="Web Dev Certificate"
                                class="cert-img">
                            <div class="cert-content">
                                <h3 class="cert-name">Aplikasi Katalog Online Mod Game Berbasis Web By Indonesian
                                    Virtual Rail Division</h3>
                                <button type="button" class="cert-issuer cert-detail-btn"
                                    data-pdf="{{ asset('images/certificates/sertif-website.pdf') }}">
                                    Detail
                                </button>
                            </div>
                        </div>


                    </div>


                    <div id="pdfModal" class="pdf-modal">
                        <div class="pdf-modal-content">
                            <button type="button" class="pdf-modal-close" id="pdfModalClose">&times;</button>
                            <iframe id="pdfModalFrame" class="pdf-modal-frame" src=""></iframe>
                        </div>
                    </div>

                </div>
            </section>

            <section id="contact" class="page-section section-contact">
                <div class="contact-container">

                    <!-- Bagian Kiri: Teks & Info Direct Contact -->
                    <div class="contact-info-wrapper">
                        <h2 class="contact-heading">LET'S GET IN TOUCH!</h2>
                        <p class="contact-sub">
                            Punya ide project seru atau mau ngajak kolaborasi? <i>Don't hesitate to reach out!</i> Aku
                            selalu <i>open</i> untuk diskusi hal-hal baru, apalagi soal Web Dev dan Cyber Security.
                        </p>

                        <div class="contact-details">
                            <div class="contact-item bg-white">
                                <img src="{{ asset('images/icons/icon-email.svg') }}" alt="Email"
                                    class="contact-icon-large">
                                <span class="contact-text-large">gandhirahmawan@gmail.com</span>
                            </div>
                            <div class="contact-item bg-white">
                                <img src="{{ asset('images/icons/icon-location.svg') }}" alt="Location"
                                    class="contact-icon-large">
                                <span class="contact-text-large">Malang, Indonesia</span>
                            </div>
                            <!-- Tambahan WhatsApp -->
                            <div class="contact-item bg-white">
                                <img src="{{ asset('images/icons/icon-call.svg') }}" alt="WhatsApp"
                                    class="contact-icon-large">
                                <span class="contact-text-large">+62 813-6695-0138</span>
                            </div>

                            <a href="https://linkedin.com/in/gandhi-rahmawan" target="_blank"
                                class="contact-item bg-white" style="text-decoration: none;">
                                <img src="{{ asset('images/icons/icon-linkedin.svg') }}" alt="LinkedIn"
                                    class="contact-icon-large">
                                <span class="contact-text-large">Gandhi Rahmawan</span>
                            </a>
                        </div>
                    </div>

                    <!-- Bagian Kanan: Formulir Contact -->
                    <div class="contact-form-wrapper">
                        <form action="#" class="neo-form">
                            <div class="form-group">
                                <label for="name">NAME</label>
                                <input type="text" id="name" placeholder="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL</label>
                                <input type="email" id="email" placeholder="john@example.com" required>
                            </div>
                            <div class="form-group">
                                <label for="message">MESSAGE</label>
                                <textarea id="message" rows="5" placeholder="Let's build something awesome..."
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn-submit">SEND MESSAGE</button>
                        </form>
                    </div>

                </div>
            </section>

    </main>

</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('pdfModal');
        const modalFrame = document.getElementById('pdfModalFrame');
        const closeBtn = document.getElementById('pdfModalClose');
        const detailButtons = document.querySelectorAll('.cert-detail-btn');

        // Buka modal pas tombol "Detail" diklik
        detailButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const pdfUrl = btn.getAttribute('data-pdf');
                modalFrame.setAttribute('src', pdfUrl);
                modal.classList.add('active');
            });
        });

        // Tutup modal pas tombol "X" diklik
        closeBtn.addEventListener('click', function () {
            closeModal();
        });

        // Tutup modal pas klik di area gelap luar kotak PDF
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                closeModal();
            }
        });

        function closeModal() {
            modal.classList.remove('active');
            modalFrame.setAttribute('src', '');
        }
    });
</script>