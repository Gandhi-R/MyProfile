document.addEventListener('DOMContentLoaded', () => {


    const titleWrapper = document.querySelector('.skills-title-wrapper');
    const skillCards = Array.from(document.querySelectorAll('.skill-card'));
    const animatedEls = [titleWrapper, ...skillCards].filter(Boolean);

    function playSkillsIntro() {
        animatedEls.forEach((el) => {
            el.style.transition = 'none';
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px) scale(0.95)';
        });

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                animatedEls.forEach((el, i) => {
                    // banner masuk duluan, baru card-card nyusul lebih cepat (stagger kecil)
                    const delay = el === titleWrapper ? 0 : 0.15 + i * 0.06;
                    el.style.transition = `opacity 0.5s ease ${delay}s, transform 0.5s ease ${delay}s`;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0) scale(1)';
                });
            });
        });
    }

    // Sembunyikan dulu dari awal
    animatedEls.forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px) scale(0.95)';
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