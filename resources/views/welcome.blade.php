<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gandhi Rahmawan | Portfolio</title>
    
    <!-- Panggil Tailwind CSS v4 -->
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 font-sans antialiased text-black">

    <!-- Memanggil Komponen Navbar -->
    <x-navbar />

    <!-- Konten Website (Nanti ditaruh di sini) -->
    <main>
        <!-- Dummy section biar halamannya bisa di-scroll dan ngetes navbar sticky-nya -->
        <section id="home" class="h-screen bg-blue-900 border-b-4 border-black"></section>
        <section id="about" class="h-screen bg-yellow-400 border-b-4 border-black"></section>
    </main>

</body>
</html>