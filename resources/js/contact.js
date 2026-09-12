document.addEventListener('DOMContentLoaded', () => {


    const infoEls = [
        document.querySelector('.contact-heading'),
        document.querySelector('.contact-sub'),
        ...document.querySelectorAll('.contact-item'),
    ].filter(Boolean);

    const formWrapper = document.querySelector('.contact-form-wrapper');
    const animatedEls = [...infoEls, formWrapper].filter(Boolean);

    function playContactIntro() {
        animatedEls.forEach((el) => {
            el.style.transition = 'none';
            el.style.opacity = '0';
            el.style.transform = 'translateY(35px)';
        });

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                animatedEls.forEach((el, i) => {
                    el.style.transition = `opacity 0.55s ease ${i * 0.08}s, transform 0.55s ease ${i * 0.08}s`;
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                });
            });
        });
    }

    animatedEls.forEach((el) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(35px)';
    });

    const contactSection = document.getElementById('contact');
    if (contactSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    playContactIntro();
                }
            });
        }, { threshold: 0.2 });

        observer.observe(contactSection);
    }

    const navContactLink = document.querySelector('.nav-links a[href="#contact"]');
    if (navContactLink) {
        navContactLink.addEventListener('click', () => {
            setTimeout(playContactIntro, 300);
        });
    }



    const form = document.querySelector('.neo-form');
    const WHATSAPP_NUMBER = '6281366950138'; 

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !message) {
                return; // biarin browser tampilkan validasi "required" bawaan
            }

            const text = `Halo Gandhi, perkenalkan saya ${name} (${email}).\n\n${message}`;
            const waUrl = `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(text)}`;

            window.open(waUrl, '_blank');
            form.reset();
        });
    }

});