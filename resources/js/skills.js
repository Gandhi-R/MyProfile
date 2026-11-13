document.addEventListener('DOMContentLoaded', () => {


    const titleBanner = document.querySelector('.skills-banner');
    const skillCards = Array.from(document.querySelectorAll('.skill-card'));
    const animatedEls = [titleBanner, ...skillCards].filter(Boolean);

    function playSkillsIntro() {
        animatedEls.forEach((el) => {
            el.style.transition = 'none';
            el.style.opacity = '0';
            el.style.transform = el === titleBanner
                ? 'translateY(-220px) rotate(2deg)'
                : 'translateY(30px) scale(0.95)';
        });

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                animatedEls.forEach((el, i) => {
                    const isTitle = el === titleBanner;
                    const delay = isTitle ? 0 : 0.15 + i * 0.06;
                    const duration = isTitle ? 0.9 : 0.5;
                    const easing = isTitle ? 'cubic-bezier(0.22, 1, 0.36, 1)' : 'ease';
                    el.style.transition = `opacity ${duration}s ${easing} ${delay}s, transform ${duration}s ${easing} ${delay}s`;
                    el.style.opacity = '1';
                    el.style.transform = isTitle
                        ? 'translateY(0) rotate(2deg)'
                        : 'translateY(0) scale(1)';
                });
            });
        });
    }

    // Sembunyikan dulu dari awal
    animatedEls.forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = el === titleBanner
            ? 'translateY(-220px) rotate(2deg)'
            : 'translateY(30px) scale(0.95)';
    });

    const skillsSection = document.getElementById('skills');
    if (skillsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    playSkillsIntro();
                }
            });
        }, { threshold: 0.2 });

        observer.observe(skillsSection);
    }

    const navSkillsLink = document.querySelector('.nav-links a[href="#skills"]');
    if (navSkillsLink) {
        navSkillsLink.addEventListener('click', () => {
            setTimeout(playSkillsIntro, 300);
        });
    }

});