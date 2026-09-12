document.addEventListener('DOMContentLoaded', () => {

    const certHeader = document.querySelector('.cert-header');
    const certCards = Array.from(document.querySelectorAll('.cert-card'));
    const animatedEls = [certHeader, ...certCards].filter(Boolean);

    function playCertificateIntro() {
        animatedEls.forEach((el) => {
            el.style.transition = 'none';
            el.style.opacity = '0';
            el.style.transform = 'translateY(40px)';
        });

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                animatedEls.forEach((el, i) => {
                    el.style.transition = `opacity 0.6s ease ${i * 0.12}s, transform 0.6s ease ${i * 0.12}s`;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            });
        });
    }

    animatedEls.forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(40px)';
    });

    const certificateSection = document.getElementById('certificate');
    if (certificateSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    playCertificateIntro();
                }
            });
        }, { threshold: 0.2 });

        observer.observe(certificateSection);
    }

    const navCertificateLink = document.querySelector('.nav-links a[href="#certificate"]');
    if (navCertificateLink) {
        navCertificateLink.addEventListener('click', () => {
            setTimeout(playCertificateIntro, 300);
        });
    }

});