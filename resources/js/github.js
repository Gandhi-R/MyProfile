document.addEventListener('DOMContentLoaded', () => {

    const titleWrapper = document.querySelector('.github-title-wrapper');
    const graphBox = document.querySelector('.github-graph-box');
    const statCards = Array.from(document.querySelectorAll('.stat-card'));
    const animatedEls = [titleWrapper, graphBox, ...statCards].filter(Boolean);

    function playGithubIntro() {
        animatedEls.forEach((el) => {
            el.style.transition = 'none';
            el.style.opacity = '0';
            el.style.transform = 'translateY(35px)';
        });

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                animatedEls.forEach((el, i) => {
                    el.style.transition = `opacity 0.55s ease ${i * 0.1}s, transform 0.55s ease ${i * 0.1}s`;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            });
        });

        // jalankan count-up setiap kali animasi diputar
        animateStatNumbers();
    }

    animatedEls.forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(35px)';
    });



    function animateStatNumbers() {
        document.querySelectorAll('.stat-number').forEach((el) => {
            const target = parseInt(el.textContent.replace(/[^0-9]/g, ''), 10) || 0;
            const duration = 1200; // ms
            const startTime = performance.now();

            function tick(now) {
                const progress = Math.min((now - startTime) / duration, 1);
                // easing biar melambat di akhir
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.round(eased * target);

                if (progress < 1) {
                    requestAnimationFrame(tick);
                } else {
                    el.textContent = target;
                }
            }

            requestAnimationFrame(tick);
        });
    }



    const githubSection = document.getElementById('github');
    if (githubSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    playGithubIntro();
                }
            });
        }, { threshold: 0.2 });

        observer.observe(githubSection);
    }

    const navGithubLink = document.querySelector('.nav-links a[href="#github"]');
    if (navGithubLink) {
        navGithubLink.addEventListener('click', () => {
            setTimeout(playGithubIntro, 300);
        });
    }

});