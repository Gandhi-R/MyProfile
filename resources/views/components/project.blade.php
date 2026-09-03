
        <section id="project" class="page-section section-project">
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