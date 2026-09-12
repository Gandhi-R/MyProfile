document.addEventListener('DOMContentLoaded', () => {
 

    const badgeHello = document.querySelector('.badge-hello');
    const leftLine   = document.querySelector('.left-line');
    const rightLine  = document.querySelector('.right-line');
 
    function positionHangingLines() {
        if (!badgeHello || !leftLine || !rightLine) return;
 
        const badgeWidth = badgeHello.offsetWidth;
        const lineOffset = badgeWidth * 0.15; // jarak dari tepi badge, bisa diubah-ubah
 
        leftLine.style.left   = `${lineOffset}px`;
        rightLine.style.right = `${lineOffset}px`;
    }
 
    positionHangingLines();
    window.addEventListener('resize', positionHangingLines);
 

    document.querySelectorAll('.home-buttons a[href^="#"]').forEach((link) => {
        link.addEventListener('click', (e) => {
            const targetEl = document.querySelector(link.getAttribute('href'));
            if (targetEl) {
                e.preventDefault();
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
 

    const animatedEls = [
        document.querySelector('.hello-wrapper'),
        document.querySelector('.title-wrapper'),
        document.querySelector('.badge-role'),
        document.querySelector('.home-buttons'),
    ].filter(Boolean);
 
    function playHomeIntro() {
        // reset dulu ke state awal (tersembunyi)
        animatedEls.forEach((el, i) => {
            el.style.transition = 'none';
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
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
 
    // jalankan sekali saat halaman pertama dibuka
    playHomeIntro();
 
    // replay animasi tiap kali link "Home" di navbar diklik
    const navHomeLink = document.querySelector('.nav-links a[href="#home"]');
    if (navHomeLink) {
        navHomeLink.addEventListener('click', () => {
            playHomeIntro();
        });
    }
 

    const homeTitle = document.querySelector('.home-title');
 
    if (homeTitle) {
        homeTitle.addEventListener('mousemove', (e) => {
            const rect = homeTitle.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
 
            const rotateX = ((y - centerY) / centerY) * -2;
            const rotateY = ((x - centerX) / centerX) * 2;
 
            homeTitle.style.transform =
                `rotate(-3deg) perspective(600px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
        });
 
        homeTitle.addEventListener('mouseleave', () => {
            homeTitle.style.transform = 'rotate(-3deg)';
        });
    }
 
});
