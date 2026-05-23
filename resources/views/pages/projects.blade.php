@extends('layouts.app')

@section('title', 'Projects - Afriza')

@section('content')
<section class="py-16 bg-[#1e1e1e] min-h-screen" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-animate>
            <h2 class="text-4xl font-bold text-[#d4d4d4]">My Projects</h2>
            <p class="mt-4 text-lg text-[#9d9d9d]">A collection of academic and personal work showcasing my skills</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project 1 -->
            <div id="project-rtku" class="project-card relative bg-[#2d2d2d] rounded-2xl shadow-sm border border-[#3e3e42] overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col" data-animate data-delay="0">
                <div class="h-48 bg-[#252526] w-full flex items-center justify-center text-[#9d9d9d]">
                    <span class="text-sm">No Image Available</span>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">RTKu</h3>
                        <span class="text-xs font-medium text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded">Apr - Sept 2025</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">RT/RW Digitalization App</p>
                    <ul class="text-[#9d9d9d] text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>UI/UX Designer menggunakan Figma & UCD</li>
                        <li>SUS Score: 73.25 (good usability)</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] bg-[#2d2d2d] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Figma</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">UCD Methodology</span>
                </div>
                <div class="project-overlay absolute inset-0 bg-black/75 z-10 flex items-end justify-center p-6">
                    <div class="flex gap-3">
                        <a href="#project-rtku" class="px-4 py-2 bg-[#007acc] text-white rounded-lg text-sm font-semibold hover:bg-[#006bb3] transition-colors">View Details</a>
                        <a href="https://github.com/Lnathea" target="_blank" class="px-4 py-2 bg-transparent border border-[#007acc] text-[#007acc] rounded-lg text-sm font-semibold hover:bg-[#007acc] hover:text-white transition-colors">GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div id="project-smart-fish-feeder" class="project-card relative bg-[#2d2d2d] rounded-2xl shadow-sm border border-[#3e3e42] overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col" data-animate data-delay="90">
                <div class="h-48 grid grid-cols-2 w-full overflow-hidden">
                    <img src="{{ asset('images/projects/fish-feeder1.jpeg') }}" alt="Smart Fish Feeder 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 border-r border-[#3e3e42]">
                    <img src="{{ asset('images/projects/fish-feeder2.jpeg') }}" alt="Smart Fish Feeder 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">Smart Fish Feeder</h3>
                        <span class="text-xs font-medium text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded">Sept '25 - Jan '26</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">Water Quality Monitoring</p>
                    <ul class="text-[#9d9d9d] text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>IoT system menggunakan ESP32 untuk otomasi pemberian pakan ikan</li>
                        <li>Sensor: temperature, pH, ultrasonic</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] bg-[#2d2d2d] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">ESP32</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Blynk</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">IoT</span>
                </div>
                <div class="project-overlay absolute inset-0 bg-black/75 z-10 flex items-end justify-center p-6">
                    <div class="flex gap-3">
                        <a href="#project-smart-fish-feeder" class="px-4 py-2 bg-[#007acc] text-white rounded-lg text-sm font-semibold hover:bg-[#006bb3] transition-colors">View Details</a>
                        <a href="https://github.com/Lnathea" target="_blank" class="px-4 py-2 bg-transparent border border-[#007acc] text-[#007acc] rounded-lg text-sm font-semibold hover:bg-[#007acc] hover:text-white transition-colors">GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div id="project-heart-disease-risk" class="project-card relative bg-[#2d2d2d] rounded-2xl shadow-sm border border-[#3e3e42] overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col" data-animate data-delay="180">
                <div class="h-48 bg-[#252526] w-full flex items-center justify-center text-[#9d9d9d]">
                    <span class="text-sm">No Image Available</span>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-[#d4d4d4] leading-tight">Heart Disease Risk</h3>
                        <span class="text-xs font-medium text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded flex-shrink-0 ml-2">May - Jun 2025</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">Classification Model</p>
                    <ul class="text-[#9d9d9d] text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>Machine learning model untuk klasifikasi risiko penyakit jantung</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] bg-[#2d2d2d] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Python</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Scikit-learn</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Pandas</span>
                </div>
                <div class="project-overlay absolute inset-0 bg-black/75 z-10 flex items-end justify-center p-6">
                    <div class="flex gap-3">
                        <a href="#project-heart-disease-risk" class="px-4 py-2 bg-[#007acc] text-white rounded-lg text-sm font-semibold hover:bg-[#006bb3] transition-colors">View Details</a>
                        <a href="https://github.com/Lnathea" target="_blank" class="px-4 py-2 bg-transparent border border-[#007acc] text-[#007acc] rounded-lg text-sm font-semibold hover:bg-[#007acc] hover:text-white transition-colors">GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div id="project-ai-health-app" class="project-card relative bg-[#2d2d2d] rounded-2xl shadow-sm border border-[#3e3e42] overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col" data-animate data-delay="270">
                <div class="h-48 grid grid-cols-2 w-full overflow-hidden">
                    <img src="{{ asset('images/projects/HealthApp1.jpeg') }}" alt="AI Health App 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 border-r border-[#3e3e42]">
                    <img src="{{ asset('images/projects/HealthApp2.jpeg') }}" alt="AI Health App 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">AI Health App</h3>
                        <span class="text-xs font-medium text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded">Oct '25 - Jan '26</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">QA Tester</p>
                    <ul class="text-[#9d9d9d] text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>Functional testing & debugging aplikasi kesehatan berbasis AI</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] bg-[#2d2d2d] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">QA Testing</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">System Integration</span>
                </div>
                <div class="project-overlay absolute inset-0 bg-black/75 z-10 flex items-end justify-center p-6">
                    <div class="flex gap-3">
                        <a href="#project-ai-health-app" class="px-4 py-2 bg-[#007acc] text-white rounded-lg text-sm font-semibold hover:bg-[#006bb3] transition-colors">View Details</a>
                        <a href="https://github.com/Lnathea" target="_blank" class="px-4 py-2 bg-transparent border border-[#007acc] text-[#007acc] rounded-lg text-sm font-semibold hover:bg-[#007acc] hover:text-white transition-colors">GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div id="project-linux-simulation" class="project-card relative bg-[#2d2d2d] rounded-2xl shadow-sm border border-[#3e3e42] overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col" data-animate data-delay="360">
                <div class="h-48 bg-[#252526] w-full flex items-center justify-center text-[#9d9d9d]">
                    <span class="text-sm">No Image Available</span>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-[#d4d4d4]">Linux Simulation</h3>
                        <span class="text-xs font-medium text-[#9d9d9d] bg-[#252526] px-2 py-1 rounded">Jun 2025</span>
                    </div>
                    <p class="text-[#007acc] font-medium mb-3 text-sm">File Access Control</p>
                    <ul class="text-[#9d9d9d] text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>Simulasi file access control di Ubuntu 24.04 LTS</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-[#3e3e42] bg-[#2d2d2d] flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-[#252526] text-[#d4d4d4] text-xs font-semibold rounded-md border border-[#3e3e42]">Linux</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#007acc] text-xs font-semibold rounded-md border border-[#3e3e42]">Ubuntu</span>
                    <span class="px-2 py-1 bg-[#252526] text-[#d4d4d4] text-xs font-semibold rounded-md border border-[#3e3e42]">chmod</span>
                </div>
                <div class="project-overlay absolute inset-0 bg-black/75 z-10 flex items-end justify-center p-6">
                    <div class="flex gap-3">
                        <a href="#project-linux-simulation" class="px-4 py-2 bg-[#007acc] text-white rounded-lg text-sm font-semibold hover:bg-[#006bb3] transition-colors">View Details</a>
                        <a href="https://github.com/Lnathea" target="_blank" class="px-4 py-2 bg-transparent border border-[#007acc] text-[#007acc] rounded-lg text-sm font-semibold hover:bg-[#007acc] hover:text-white transition-colors">GitHub</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
