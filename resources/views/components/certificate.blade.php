
            <section id="certificate" class="page-section section-certificates">
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
                                <h3 class="cert-name">SISTEM MANAJEMEN DATABASE TERINTEGRASI UNTUK
                                    KASIR WARUNG KIKIL ABANG
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