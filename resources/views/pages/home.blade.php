@extends('layouts.app')
@section('title', 'Home - Afriza')
@section('content')
<!-- Hero Section -->
<section class="py-20 lg:py-32 overflow-hidden relative">
    <div class="absolute inset-0 bg-gradient-to-b from-indigo-50 to-white -z-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-6">
                Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Muhammad Afriza Hidayat</span>
            </h1>
            <h2 class="text-2xl text-gray-700 font-medium mb-6">
                Information Technology Student & Developer
            </h2>
            <p class="text-xl text-gray-600 mb-10 leading-relaxed italic">
                "Mahasiswa IT Telkom University yang passionate di Web Development, AI, dan IoT"
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('projects') }}" class="px-8 py-3 bg-indigo-600 text-white rounded-full font-medium shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-300">View My Work</a>
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-gray-900 border border-gray-200 rounded-full font-medium shadow-sm hover:border-gray-300 hover:bg-gray-50 transition-all duration-300">Contact Me</a>
            </div>
        </div>
    </div>
</section>

<!-- Summary & Education -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    About Me
                </h3>
                <p class="text-gray-600 text-lg leading-relaxed mb-6">
                    Mahasiswa semester 6 Teknologi Informasi di Telkom University dengan minat di pengembangan teknologi dan problem-solving. Berpengalaman di berbagai proyek akademik, mampu bekerja mandiri maupun tim.
                </p>
                <div class="flex items-center text-gray-600 mb-2 font-medium">
                    <svg class="w-5 h-5 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Bekasi, Indonesia
                </div>
                <div class="flex items-center text-gray-600 font-medium">
                    <svg class="w-5 h-5 mr-3 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    mhmdafrizahdyt06@gmail.com
                </div>
            </div>
            
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                    Education & Experience
                </h3>
                
                <div class="space-y-6">
                    <!-- Education -->
                    <div class="relative pl-6 border-l-2 border-indigo-200">
                        <div class="absolute w-3 h-3 bg-indigo-600 rounded-full -left-[7px] top-1.5"></div>
                        <h4 class="text-lg font-bold text-gray-900">Bachelor of Information Technology</h4>
                        <p class="text-indigo-600 font-medium">Telkom University</p>
                        <p class="text-gray-500 text-sm">2023 - 2027</p>
                    </div>
                    
                    <!-- Experience 1 -->
                    <div class="relative pl-6 border-l-2 border-indigo-200">
                        <div class="absolute w-3 h-3 bg-indigo-600 rounded-full -left-[7px] top-1.5"></div>
                        <h4 class="text-lg font-bold text-gray-900">Operating Systems Lab Assistant</h4>
                        <p class="text-indigo-600 font-medium">Telkom University Jakarta</p>
                        <p class="text-gray-500 text-sm">Feb 2026 - Present</p>
                    </div>
                    
                    <!-- Experience 2 -->
                    <div class="relative pl-6 border-l-2 border-indigo-200">
                        <div class="absolute w-3 h-3 bg-indigo-600 rounded-full -left-[7px] top-1.5"></div>
                        <h4 class="text-lg font-bold text-gray-900">Logistics Officer</h4>
                        <p class="text-indigo-600 font-medium">SMA Negeri 2 Tambun Selatan</p>
                        <p class="text-gray-500 text-sm">Des 2022 - Jan 2023</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Skills & Certifications -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- Skills -->
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-8">Technical Skills</h3>
                <div class="space-y-6">
                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Programming</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Go</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Python</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">C/C++</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Java</span>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Web Development & DB</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">HTML/CSS</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Laravel</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Flutter</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">MySQL</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">SQL</span>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Data, AI & Tools</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Pandas</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Numpy</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Scikit-learn</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Git & GitHub</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">VS Code</span>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-3">Networking</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">Cisco Packet Tracer</span>
                            <span class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 shadow-sm">TCP/IP</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Certifications -->
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-8 flex items-center">
                    <svg class="w-8 h-8 mr-3 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                    Certifications
                </h3>
                
                <div class="space-y-4">
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center hover:shadow-md transition-shadow">
                        <div class="bg-indigo-50 p-3 rounded-lg mr-4 text-indigo-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Python Fundamental for Data Science</h4>
                    </div>
                    
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center hover:shadow-md transition-shadow">
                        <div class="bg-blue-50 p-3 rounded-lg mr-4 text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Google Cloud Cybersecurity Certificate</h4>
                    </div>
                    
                    <div class="bg-white p-5 rounded-xl border border-gray-100 shadow-sm flex items-center hover:shadow-md transition-shadow">
                        <div class="bg-sky-50 p-3 rounded-lg mr-4 text-sky-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900">Azure AI Fundamentals (AI-900)</h4>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
