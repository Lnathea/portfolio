@extends('layouts.app')

@section('title', 'Projects - Afriza')

@section('content')
<section class="py-16 bg-[#1e1e1e] min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-[#d4d4d4]">My Projects</h2>
            <div class="mt-2 h-1 w-16 rounded-full bg-[#007acc] mx-auto"></div>
            <p class="mt-4 text-lg text-[#9d9d9d]">A collection of academic and personal work showcasing my skills</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project 1: RTKu -->
            <div class="project-card bg-[#2d2d2d] rounded-2xl border border-[#3e3e42] overflow-hidden hover:border-[#007acc] hover:shadow-xl hover:shadow-[#007acc]/10 transition-all duration-300 group flex flex-col">
                <div class="h-48 w-full overflow-hidden bg-[#252526] cursor-zoom-in lightbox-trigger"
                     data-src="{{ asset('images/projects/rtkuu1.jpeg') }}">
                    <img src="{{ asset('images/projects/rtkuu1.jpeg') }}"
                         alt="RTKu"
                         class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">RTKu</h3>
                        <span class="text-xs text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded border border-[#3e3e42]">Apr - Sept 2025</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">RT/RW Digitalization App</p>
                    <ul class="text-[#9d9d9d] text-sm mb-4 space-y-1 list-disc pl-4">
                        <li>UI/UX Designer menggunakan Figma & UCD</li>
                        <li>SUS Score: 73.25 (good usability)</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Figma</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">UCD Methodology</span>
                </div>
            </div>

            <!-- Project 2: Smart Fish Feeder -->
            <div class="project-card bg-[#2d2d2d] rounded-2xl border border-[#3e3e42] overflow-hidden hover:border-[#007acc] hover:shadow-xl hover:shadow-[#007acc]/10 transition-all duration-300 group flex flex-col">
                <div class="grid grid-cols-2 h-48">
                    <div class="overflow-hidden cursor-zoom-in lightbox-trigger" data-src="{{ asset('images/projects/fish-feeder1.jpeg') }}">
                        <img src="{{ asset('images/projects/fish-feeder1.jpeg') }}" alt="Fish Feeder 1"
                             class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                    <div class="overflow-hidden cursor-zoom-in lightbox-trigger border-l border-[#3e3e42]" data-src="{{ asset('images/projects/fish-feeder2.jpeg') }}">
                        <img src="{{ asset('images/projects/fish-feeder2.jpeg') }}" alt="Fish Feeder 2"
                             class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">Smart Fish Feeder</h3>
                        <span class="text-xs text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded border border-[#3e3e42]">Sept '25 - Jan '26</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">Water Quality Monitoring</p>
                    <ul class="text-[#9d9d9d] text-sm mb-4 space-y-1 list-disc pl-4">
                        <li>IoT system menggunakan ESP32 untuk otomasi pemberian pakan ikan</li>
                        <li>Sensor: temperature, pH, ultrasonic</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">ESP32</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Blynk</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">IoT</span>
                </div>
            </div>

            <!-- Project 3: Heart Disease -->
            <div class="project-card bg-[#2d2d2d] rounded-2xl border border-[#3e3e42] overflow-hidden hover:border-[#007acc] hover:shadow-xl hover:shadow-[#007acc]/10 transition-all duration-300 group flex flex-col">
                <div class="grid grid-cols-2 h-48">
                    <div class="overflow-hidden cursor-zoom-in lightbox-trigger" data-src="{{ asset('images/projects/heartdisease1.jpg') }}">
                        <img src="{{ asset('images/projects/heartdisease1.jpg') }}" alt="Heart Disease 1"
                             class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                    <div class="overflow-hidden cursor-zoom-in lightbox-trigger border-l border-[#3e3e42]" data-src="{{ asset('images/projects/heartdisease2.jpg') }}">
                        <img src="{{ asset('images/projects/heartdisease2.jpg') }}" alt="Heart Disease 2"
                             class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">Heart Disease Risk</h3>
                        <span class="text-xs text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded border border-[#3e3e42]">May - Jun 2025</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">Classification Model</p>
                    <ul class="text-[#9d9d9d] text-sm mb-4 space-y-1 list-disc pl-4">
                        <li>Machine learning model untuk klasifikasi risiko penyakit jantung</li>
                        <li>Supervised learning dengan data preprocessing</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Python</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Scikit-learn</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Pandas</span>
                </div>
            </div>

            <!-- Project 4: AI Health App -->
            <div class="project-card bg-[#2d2d2d] rounded-2xl border border-[#3e3e42] overflow-hidden hover:border-[#007acc] hover:shadow-xl hover:shadow-[#007acc]/10 transition-all duration-300 group flex flex-col">
                <div class="grid grid-cols-2 h-48">
                    <div class="overflow-hidden cursor-zoom-in lightbox-trigger" data-src="{{ asset('images/projects/HealthApp1.jpeg') }}">
                        <img src="{{ asset('images/projects/HealthApp1.jpeg') }}" alt="Health App 1"
                             class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                    <div class="overflow-hidden cursor-zoom-in lightbox-trigger border-l border-[#3e3e42]" data-src="{{ asset('images/projects/HealthApp2.jpeg') }}">
                        <img src="{{ asset('images/projects/HealthApp2.jpeg') }}" alt="Health App 2"
                             class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">AI Health App</h3>
                        <span class="text-xs text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded border border-[#3e3e42]">Oct '25 - Jan '26</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">QA Tester & System Integration</p>
                    <ul class="text-[#9d9d9d] text-sm mb-4 space-y-1 list-disc pl-4">
                        <li>Functional testing & debugging aplikasi kesehatan berbasis AI</li>
                        <li>Validasi akurasi output berbasis AI</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">QA Testing</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">System Integration</span>
                </div>
            </div>

            <!-- Project 5: Linux Simulation -->
            <div class="project-card bg-[#2d2d2d] rounded-2xl border border-[#3e3e42] overflow-hidden hover:border-[#007acc] hover:shadow-xl hover:shadow-[#007acc]/10 transition-all duration-300 group flex flex-col">
                <div class="h-48 bg-[#252526] w-full flex items-center justify-center">
                    <div class="flex flex-col items-center gap-3 text-[#9d9d9d]">
                        <span class="text-5xl">🖥️</span>
                        <span class="text-sm font-mono text-[#007acc]">$ chmod 644 project</span>
                    </div>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">Linux Simulation</h3>
                        <span class="text-xs text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded border border-[#3e3e42]">Jun 2025</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">File Permission & Access Control</p>
                    <ul class="text-[#9d9d9d] text-sm mb-4 space-y-1 list-disc pl-4">
                        <li>Simulasi file access control di Ubuntu 24.04 LTS</li>
                        <li>Implementasi DAC & principle of least privilege</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#9d9d9d] text-xs font-semibold rounded-md border border-[#3e3e42]">Linux</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Ubuntu</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#9d9d9d] text-xs font-semibold rounded-md border border-[#3e3e42]">chmod</span>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Lightbox --}}
<div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 backdrop-blur-sm p-4">
    <button id="lightbox-close"
            class="absolute top-4 right-4 h-10 w-10 rounded-full bg-[#252526] border border-[#3e3e42] text-white text-xl flex items-center justify-center hover:bg-[#007acc] transition-colors duration-200">
        ✕
    </button>
    <img id="lightbox-img" src="" alt="Preview"
         class="max-h-[90vh] max-w-[90vw] rounded-2xl border border-[#3e3e42] object-contain shadow-2xl" />
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const lb     = document.getElementById('lightbox');
    const lbImg  = document.getElementById('lightbox-img');
    const lbClose = document.getElementById('lightbox-close');

    document.querySelectorAll('.lightbox-trigger').forEach(el => {
        el.addEventListener('click', function () {
            lbImg.src = this.dataset.src;
            lb.classList.remove('hidden');
            lb.classList.add('flex');
        });
    });

    function closeLb() {
        lb.classList.add('hidden');
        lb.classList.remove('flex');
        lbImg.src = '';
    }

    lbClose.addEventListener('click', closeLb);
    lb.addEventListener('click', e => { if (e.target === lb) closeLb(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLb(); });
});
</script>

@endsection