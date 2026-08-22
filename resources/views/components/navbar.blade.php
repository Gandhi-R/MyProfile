<nav class="navbar">
    <div class="logo" role="button" tabindex="0" aria-label="Toggle logo active state">
        Gandhi.R
    </div>

    <ul class="nav-links">
        <li><a href="#home" class="active" data-lang-key="home">Home</a></li>
        <li><a href="#about" data-lang-key="about">About</a></li>
        <li><a href="#project" data-lang-key="project">Project</a></li>
        <li><a href="#skills" data-lang-key="skills">Skills</a></li>
        <li><a href="#github" data-lang-key="github">Github</a></li>
        <li><a href="#certificate" data-lang-key="certificate">Certificate</a></li>
        <li><a href="#contact" data-lang-key="contact">Contact</a></li>
    </ul>

    <button class="btn-lang" onclick="toggleLanguage(this)">
        <span class="btn-lang-text">EN</span>
        <span class="btn-lang-icon">🌐</span>
    </button>

    <script>
        function toggleLanguage(button) {
            const langText = button.querySelector('.btn-lang-text');
            const isEnglish = langText.textContent === 'EN';

            langText.textContent = isEnglish ? 'ID' : 'EN';

            const translations = {
                home: isEnglish ? 'Beranda' : 'Home',
                about: isEnglish ? 'Tentang' : 'About',
                project: isEnglish ? 'Proyek' : 'Project',
                skills: isEnglish ? 'Keterampilan' : 'Skills',
                github: isEnglish ? 'Github' : 'Github',
                certificate: isEnglish ? 'Sertifikat' : 'Certificate',
                contact: isEnglish ? 'Kontak' : 'Contact'
            };

            document.querySelectorAll('.nav-links a[data-lang-key]').forEach(link => {
                const key = link.getAttribute('data-lang-key');
                link.textContent = translations[key];
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            const logo = document.querySelector('.logo');
            if (logo) {
                logo.addEventListener('click', () => {
                    logo.classList.toggle('active');
                });

                logo.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        logo.classList.toggle('active');
                    }
                });
            }

            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', function () {
                    document.querySelectorAll('.nav-links a').forEach(item => item.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
</nav>