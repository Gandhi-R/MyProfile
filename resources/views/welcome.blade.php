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

    <!-- Memanggil Komponen Navbar -->
    <x-navbar />

    <!-- Konten Website -->

    <main>
        <!-- Setiap section kita kasih ID buat navigasi dari Navbar -->
        <section id="home" class="page-section section-home"></section>
        
        <section id="about" class="page-section section-about"></section>
        
        <section id="project" class="page-section section-project"></section>
        
        <section id="skills" class="page-section section-skills"></section>
        
        <section id="github" class="page-section section-github"></section>

        <section id="certificate" class="page-section section-certificate"></section>
        
        <section id="contact" class="page-section section-contact"></section>
    </main>

</body>

</html>