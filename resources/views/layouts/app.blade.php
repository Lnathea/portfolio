<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Developer Portfolio')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900 antialiased font-sans flex flex-col min-h-screen">
    @include('partials.navbar')
    
    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Lightbox Overlay -->
    <div id="lightbox" class="fixed inset-0 z-[100] bg-black/90 hidden opacity-0 transition-opacity duration-300 flex items-center justify-center p-4">
        <button id="lightbox-close" class="absolute top-6 right-6 text-white hover:text-gray-300 transition-colors z-[101]">
            <svg class="w-10 h-10 drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <img id="lightbox-img" src="" alt="Fullscreen Image" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl transform scale-95 transition-transform duration-300">
    </div>

    <!-- Lightbox Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const closeBtn = document.getElementById('lightbox-close');
            
            // Terapkan lightbox ke seluruh gambar
            const images = document.querySelectorAll('img');
            
            images.forEach(img => {
                // Ubah kursor jadi indikator zoom
                img.style.cursor = 'zoom-in';
                
                img.addEventListener('click', (e) => {
                    e.preventDefault();
                    lightboxImg.src = img.src;
                    lightbox.classList.remove('hidden');
                    
                    // Trigger reflow untuk animasi
                    void lightbox.offsetWidth;
                    
                    lightbox.classList.remove('opacity-0');
                    lightboxImg.classList.remove('scale-95');
                    lightboxImg.classList.add('scale-100');
                    document.body.style.overflow = 'hidden'; // Kunci scroll halaman
                });
            });

            const closeLightbox = () => {
                lightbox.classList.add('opacity-0');
                lightboxImg.classList.remove('scale-100');
                lightboxImg.classList.add('scale-95');
                
                setTimeout(() => {
                    lightbox.classList.add('hidden');
                    lightboxImg.src = '';
                    document.body.style.overflow = ''; // Kembalikan scroll halaman
                }, 300); // Tunggu durasi transisi Tailwind (300ms)
            };

            closeBtn.addEventListener('click', closeLightbox);
            
            lightbox.addEventListener('click', (e) => {
                // Tutup jika area luar gambar yang diklik
                if (e.target === lightbox) {
                    closeLightbox();
                }
            });

            document.addEventListener('keydown', (e) => {
                // Tutup jika tombol ESC ditekan
                if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                    closeLightbox();
                }
            });
        });
    </script>
</body>
</html>
