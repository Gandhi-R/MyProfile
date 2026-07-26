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

    <main class="min-h-screen bg-[#142950] text-white"
        {{--
        <section id="home" class="min-h-screen overflow-hidden">
            <div class="mx-auto flex min-h-screen flex-col justify-center gap-12 px-6 py-10 lg:flex-row lg:items-center lg:gap-20 lg:px-12">
                <div class="lg:w-7/12">
                    <div class="inline-flex items-center rounded-full border-4 border-black bg-[#FFCE3E] px-5 py-2 text-xs font-black uppercase tracking-[.35em] text-black shadow-[6px_6px_0_0_rgba(0,0,0,1)]">
                        HELLOO!! I,M
                    </div>

                    <div class="mt-8 space-y-6">
                        <div class="inline-flex rounded-[28px] bg-white px-6 py-5 text-4xl font-black uppercase tracking-[.35em] text-black shadow-[8px_8px_0_0_rgba(0,0,0,1)] sm:text-5xl lg:text-6xl">
                            GANDHI RAHMAWAN
                        </div>

                        <div class="max-w-xl rounded-[28px] bg-[#FF1D49] px-6 py-5 text-base font-bold text-white shadow-[6px_6px_0_0_rgba(0,0,0,1)] sm:text-lg">
                            Cyber Security Enthusiast
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                        <a href="#project" class="inline-flex min-w-[200px] items-center justify-center rounded-full bg-[#4B8AFF] px-8 py-4 text-sm font-bold text-white shadow-[6px_6px_0_0_rgba(0,0,0,1)] transition hover:bg-[#3671de]">
                            View On My Work
                        </a>
                        <a href="#contact" class="inline-flex min-w-[200px] items-center justify-center rounded-full bg-[#2CEC4B] px-8 py-4 text-sm font-bold text-black shadow-[6px_6px_0_0_rgba(0,0,0,1)] transition hover:bg-[#20c53c]">
                            Chat On Whatsapp
                        </a>
                    </div>
                </div>

                <div class="relative lg:w-5/12">
                    <div class="relative mx-auto max-w-sm rounded-[32px] border-4 border-black bg-[#F7EDD6] p-4 shadow-[10px_10px_0_0_rgba(0,0,0,1)]">
                        <div class="overflow-hidden rounded-[26px] bg-[#0D1939] p-3">
                            <div class="h-[360px] w-full rounded-[22px] bg-[#0F1B42]">
                                <img src="https://via.placeholder.com/380x360.png?text=Gandhi" alt="Gandhi Rahmawan" class="h-full w-full object-cover" />
                            </div>
                        </div>
                        <div class="mt-4 rounded-[22px] bg-white px-5 py-4 text-center text-sm font-bold text-black">
                            @gandirmn._
                        </div>
                        <div class="absolute -right-4 top-6 h-14 w-14 rounded-full bg-[#0D1939] border-4 border-black"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="h-screen border-b-4 border-black bg-[#0F1B42]"></section>
        --}}
    </main>

</body>

</html>