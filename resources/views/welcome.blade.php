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
            <section id="home" class="page-section section-home">
            <div class="home-container">
                
                <!-- Bagian Kiri (Teks & Tombol) -->
                <div class="home-content">
                    <div class="badge-hello">HELLO!! I, M</div>
                    
                    <h1 class="home-title">GANDHI RAHMAWAN</h1>
                    
                    <div class="badge-role">Cyber Security Enthusiast</div>
                    
                    <div class="home-buttons">
                        <a href="#project" class="btn-work">VIEW ON MY WORK</a>
                        <a href="#contact" class="btn-wa">
                            <img src="{{ asset('images/icons/logo-whatsapp.svg') }}" alt="WA" class="icon-btn">
                            CHAT ON WHATSAPP
                        </a>
                    </div>
                </div>

                <!-- Bagian Kanan (Foto Profile) -->
                <div class="home-image-wrapper">
                    <div class="profile-card">
                        <img src="{{ asset('images/profile/profile-1.png') }}" alt="Gandhi Rahmawan" class="profile-img">
                        <p class="profile-username">@gandirmn._</p>
                    </div>
                </div>

            </div>
        </section>
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