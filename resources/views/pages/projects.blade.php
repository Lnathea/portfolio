@extends('layouts.app')

@section('title', 'Projects - Afriza')

@section('content')
<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900">My Projects</h2>
            <p class="mt-4 text-lg text-gray-600">A collection of academic and personal work showcasing my skills</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project 1 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
                <div class="h-48 bg-gray-100 w-full flex items-center justify-center text-gray-400">
                    <span class="text-sm">No Image Available</span>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-gray-900">RTKu</h3>
                        <span class="text-xs font-medium text-gray-600 bg-gray-100 px-2 py-1 rounded">Apr - Sept 2025</span>
                    </div>
                    <p class="text-indigo-600 font-medium mb-3 text-sm">RT/RW Digitalization App</p>
                    <ul class="text-gray-600 text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>UI/UX Designer menggunakan Figma & UCD</li>
                        <li>SUS Score: 73.25 (good usability)</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50 flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-pink-50 text-pink-600 text-xs font-semibold rounded-md border border-pink-100">Figma</span>
                    <span class="px-2 py-1 bg-purple-50 text-purple-600 text-xs font-semibold rounded-md border border-purple-100">UCD Methodology</span>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
                <div class="h-48 grid grid-cols-2 w-full overflow-hidden">
                    <img src="{{ asset('images/projects/fish-feeder1.jpeg') }}" alt="Smart Fish Feeder 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 border-r border-gray-100">
                    <img src="{{ asset('images/projects/fish-feeder2.jpeg') }}" alt="Smart Fish Feeder 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Smart Fish Feeder</h3>
                        <span class="text-xs font-medium text-gray-600 bg-gray-100 px-2 py-1 rounded">Sept '25 - Jan '26</span>
                    </div>
                    <p class="text-indigo-600 font-medium mb-3 text-sm">Water Quality Monitoring</p>
                    <ul class="text-gray-600 text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>IoT system menggunakan ESP32 untuk otomasi pemberian pakan ikan</li>
                        <li>Sensor: temperature, pH, ultrasonic</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50 flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-md border border-blue-100">ESP32</span>
                    <span class="px-2 py-1 bg-green-50 text-green-600 text-xs font-semibold rounded-md border border-green-100">Blynk</span>
                    <span class="px-2 py-1 bg-teal-50 text-teal-600 text-xs font-semibold rounded-md border border-teal-100">IoT</span>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
                <div class="h-48 bg-gray-100 w-full flex items-center justify-center text-gray-400">
                    <span class="text-sm">No Image Available</span>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-gray-900 leading-tight">Heart Disease Risk</h3>
                        <span class="text-xs font-medium text-gray-600 bg-gray-100 px-2 py-1 rounded flex-shrink-0 ml-2">May - Jun 2025</span>
                    </div>
                    <p class="text-indigo-600 font-medium mb-3 text-sm">Classification Model</p>
                    <ul class="text-gray-600 text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>Machine learning model untuk klasifikasi risiko penyakit jantung</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50 flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-yellow-50 text-yellow-600 text-xs font-semibold rounded-md border border-yellow-100">Python</span>
                    <span class="px-2 py-1 bg-orange-50 text-orange-600 text-xs font-semibold rounded-md border border-orange-100">Scikit-learn</span>
                    <span class="px-2 py-1 bg-indigo-50 text-indigo-600 text-xs font-semibold rounded-md border border-indigo-100">Pandas</span>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
                <div class="h-48 grid grid-cols-2 w-full overflow-hidden">
                    <img src="{{ asset('images/projects/HealthApp1.jpeg') }}" alt="AI Health App 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 border-r border-gray-100">
                    <img src="{{ asset('images/projects/HealthApp2.jpeg') }}" alt="AI Health App 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-gray-900">AI Health App</h3>
                        <span class="text-xs font-medium text-gray-600 bg-gray-100 px-2 py-1 rounded">Oct '25 - Jan '26</span>
                    </div>
                    <p class="text-indigo-600 font-medium mb-3 text-sm">QA Tester</p>
                    <ul class="text-gray-600 text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>Functional testing & debugging aplikasi kesehatan berbasis AI</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50 flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-red-50 text-red-600 text-xs font-semibold rounded-md border border-red-100">QA Testing</span>
                    <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs font-semibold rounded-md border border-sky-100">System Integration</span>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col">
                <div class="h-48 bg-gray-100 w-full flex items-center justify-center text-gray-400">
                    <span class="text-sm">No Image Available</span>
                </div>
                <div class="p-6 flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-xl font-bold text-gray-900">Linux Simulation</h3>
                        <span class="text-xs font-medium text-gray-600 bg-gray-100 px-2 py-1 rounded">Jun 2025</span>
                    </div>
                    <p class="text-indigo-600 font-medium mb-3 text-sm">File Access Control</p>
                    <ul class="text-gray-600 text-sm mb-6 space-y-1 list-disc pl-4">
                        <li>Simulasi file access control di Ubuntu 24.04 LTS</li>
                    </ul>
                </div>
                <div class="px-6 py-4 border-t border-gray-50 bg-gray-50 flex flex-wrap gap-2">
                    <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-md border border-gray-200">Linux</span>
                    <span class="px-2 py-1 bg-orange-50 text-orange-600 text-xs font-semibold rounded-md border border-orange-100">Ubuntu</span>
                    <span class="px-2 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-md border border-slate-200">chmod</span>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
