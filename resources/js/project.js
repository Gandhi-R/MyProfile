document.addEventListener('DOMContentLoaded', () => {


    const projectGrid = document.querySelector('.project-grid');
    const navButtons = document.querySelectorAll('.project-nav-buttons .nav-btn');

    if (projectGrid) {
        // Ubah grid jadi flex scroll horizontal + snap
        projectGrid.style.display = 'flex';
        projectGrid.style.flexWrap = 'nowrap';
        projectGrid.style.overflowX = 'auto';
        projectGrid.style.scrollBehavior = 'smooth';
        projectGrid.style.scrollSnapType = 'x mandatory';
        projectGrid.style.paddingBottom = '0.5rem';

        document.querySelectorAll('.project-card').forEach((card) => {
            card.style.flex = '0 0 320px';
            card.style.scrollSnapAlign = 'start';
        });

        function scrollByCard(direction) {
            const card = projectGrid.querySelector('.project-card');
            if (!card) return;
            const gap = parseFloat(getComputedStyle(projectGrid).gap) || 0;
            const scrollAmount = (card.offsetWidth + gap) * direction;
            projectGrid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }

        if (navButtons.length === 2) {
            const [prevBtn, nextBtn] = navButtons;
            prevBtn.addEventListener('click', () => scrollByCard(-1));
            nextBtn.addEventListener('click', () => scrollByCard(1));
        }
    }



    const headerEl = document.querySelector('.project-header');
    const cardEls = Array.from(document.querySelectorAll('.project-card'));
    const animatedEls = [headerEl, ...cardEls].filter(Boolean);

    function playProjectIntro() {
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

    // Sembunyikan dulu dari awal
    animatedEls.forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(40px)';
    });

    const projectSection = document.getElementById('project');
    if (projectSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    playProjectIntro();
                }
            });
        }, { threshold: 0.2 });

        observer.observe(projectSection);
    }

    const navProjectLink = document.querySelector('.nav-links a[href="#project"]');
    if (navProjectLink) {
        navProjectLink.addEventListener('click', () => {
            setTimeout(playProjectIntro, 300);
        });
    }

});