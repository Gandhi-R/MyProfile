<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gandhi Rahmawan | Portfolio</title>

    @vite(['resources/css/app.css'])
</head>

<body class="bg-neo-white font-sans antialiased">

    <x-navbar />

    <main>
        <x-home />
        <x-about />
        <x-project />
        <x-skills />
        @props([
            'stats' => [
                'contributions' => ['weeks' => [], 'total' => 0],
                'repos' => ['total_stars' => 0, 'total_repos' => 0],
                'user' => ['followers' => 0],
            ]
        ])
        <x-github :stats="$stats" />
        <x-certificate />
        <x-contact />
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('pdfModal');
            const modalFrame = document.getElementById('pdfModalFrame');
            const closeBtn = document.getElementById('pdfModalClose');
            const detailButtons = document.querySelectorAll('.cert-detail-btn');

            detailButtons.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const pdfUrl = btn.getAttribute('data-pdf');
                    modalFrame.setAttribute('src', pdfUrl);
                    modal.classList.add('active');
                });
            });

            closeBtn.addEventListener('click', function () {
                closeModal();
            });

            modal.addEventListener('click', function (e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            function closeModal() {
                modal.classList.remove('active');
                modalFrame.setAttribute('src', '');
            }
        });
    </script>
</body>

</html>