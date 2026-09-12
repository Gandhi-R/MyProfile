document.addEventListener('DOMContentLoaded', () => {


    const animatedEls = [
        document.querySelector('.about-main-card'),
        document.querySelector('.about-skills'),
        document.querySelector('.about-title-banner'),
        document.querySelector('.about-photo-wrapper'),
        document.querySelector('.about-contacts'),
    ].filter(Boolean);

    function playAboutIntro() {
        // reset dulu ke state tersembunyi
        animatedEls.forEach((el) => {
            el.style.transition = 'none';
            el.style.opacity = '0';
            el.style.transform = 'translateY(40px)';
        });

        // dua rAF supaya browser sempat "commit" state awal sebelum transisi jalan
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                animatedEls.forEach((el, i) => {
                    el.style.transition = `opacity 0.6s ease ${i * 0.15}s, transform 0.6s ease ${i * 0.15}s`;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            });
        });
    }

    // Sembunyikan dulu dari awal, sebelum ke-observe
    animatedEls.forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(40px)';
    });

    // Jalankan otomatis saat section About discroll masuk ke layar
    const aboutSection = document.getElementById('about');
    if (aboutSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    playAboutIntro();
                }
            });
        }, { threshold: 0.25 }); // trigger saat 25% section kelihatan

        observer.observe(aboutSection);
    }

    // Replay animasi tiap kali link "About" di navbar diklik
    const navAboutLink = document.querySelector('.nav-links a[href="#about"]');
    if (navAboutLink) {
        navAboutLink.addEventListener('click', () => {
            // delay dikit biar smooth-scroll sempat jalan dulu sebelum animasi mulai
            setTimeout(playAboutIntro, 300);
        });
    }

});