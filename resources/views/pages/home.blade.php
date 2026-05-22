@extends('layouts.app')
@section('title', 'Home - Afriza')
@section('content')
<!-- Hero Section -->
<section class="py-20 lg:py-32 overflow-hidden relative">
    <div class="absolute inset-0 bg-gradient-to-b from-indigo-50 to-white -z-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-12">
            <div class="text-center lg:text-left max-w-2xl">
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-6">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Muhammad Afriza Hidayat</span>
                </h1>
                <h2 class="text-2xl text-gray-700 font-medium mb-6">
                    Information Technology Student & Developer
                </h2>
                <p class="text-xl text-gray-600 mb-10 leading-relaxed italic">
                    "Mahasiswa IT Telkom University yang passionate di Web Development, AI, dan IoT"
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="{{ route('projects') }}" class="px-8 py-3 bg-indigo-600 text-white rounded-full font-medium shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-300">View My Work</a>
                    <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-gray-900 border border-gray-200 rounded-full font-medium shadow-sm hover:border-gray-300 hover:bg-gray-50 transition-all duration-300">Contact Me</a>
                </div>
            </div>
            <div class="relative lg:w-96 flex-shrink-0 mb-8 lg:mb-0">
                <div class="w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 rounded-full overflow-hidden border-4 border-white shadow-2xl relative z-10 mx-auto">
                    <img src="{{ asset('images/profile/profile-afriza.jpeg') }}" alt="Muhammad Afriza Hidayat" class="w-full h-full object-cover">
                </div>
                <!-- Decorative background blob -->
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-400 to-indigo-500 rounded-full blur-3xl opacity-30 -z-10 scale-110"></div>
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
                <div class="text-gray-600 text-lg leading-relaxed mb-6 space-y-4">
                    <p>Hello! I'm Muhammad Afriza Hidayat, a 6th semester Information Technology student at Telkom University Jakarta. I have a deep interest in technology development, artificial intelligence, and IoT systems.</p>
                    <p>Throughout my studies, I have actively worked on various academic projects ranging from UI/UX Design, Machine Learning, IoT Systems, to QA Testing. I am also trusted as an Operating Systems Lab Assistant at Telkom University Jakarta, where I help students understand operating system concepts and Linux environments.</p>
                    <p>Beyond academics, I am actively involved in the Information Technology Student Association (HMIT) and Google Developer Groups on Campus at Telkom University Jakarta, which has strengthened my collaboration and leadership skills.</p>
                    <p>I am proficient in various technologies such as Laravel, Python, Go, and have experience in Data &amp; AI using Pandas, Numpy, and Scikit-learn. I have also completed several professional certifications in Data Science, Cloud Security, and AI.</p>
                    <p>I am an adaptive, detail-oriented individual who is always eager to continuously learn new things in the world of technology.</p>
                </div>
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
                
                <div class="space-y-8">
                    <!-- Education -->
                    <div class="relative pl-6 border-l-2 border-indigo-200">
                        <div class="absolute w-3 h-3 bg-indigo-600 rounded-full -left-[7px] top-1.5"></div>
                        <div class="flex items-center gap-4 mb-2">
                            <img src="{{ asset('images/education/logo-telkom.png') }}" alt="Telkom University" class="w-12 h-12 object-contain bg-gray-50 rounded-lg p-1 border border-gray-100">
                            <div>
                                <h4 class="text-lg font-bold text-gray-900">Bachelor of Information Technology</h4>
                                <p class="text-indigo-600 font-medium">Telkom University</p>
                            </div>
                        </div>
                        <p class="text-gray-500 text-sm">Sep 2023 – Sep 2027</p>
                        <div class="mt-2 inline-flex items-center px-3 py-1 bg-indigo-50 border border-indigo-100 rounded-full">
                            <svg class="w-4 h-4 mr-1.5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span class="text-sm font-semibold text-indigo-700">Current GPA: 3.87 / 4.00</span>
                        </div>
                    </div>
                    
                    <!-- Experience 1 -->
                    <div class="relative pl-6 border-l-2 border-indigo-200">
                        <div class="absolute w-3 h-3 bg-indigo-600 rounded-full -left-[7px] top-1.5"></div>
                        <h4 class="text-lg font-bold text-gray-900">Operating Systems Lab Assistant</h4>
                        <p class="text-indigo-600 font-medium mb-1">Telkom University Jakarta</p>
                        <p class="text-gray-500 text-sm mb-2">Feb 2026 – Present</p>
                        <p class="text-gray-600 text-sm leading-relaxed mb-3">Assisted students in network and systems practicum, including hands-on configuration of network devices and operating systems. Ensured proper lab procedures, assessed student performance, and bridged the gap between theoretical concepts and real-world IT applications.</p>
                        <div class="grid grid-cols-2 gap-3 mt-2">
                            <img src="{{ asset('images/experience/asprak-1.jpeg') }}" alt="Lab Assistant 1" class="w-full h-32 md:h-40 object-cover rounded-lg border border-gray-200 shadow-sm hover:scale-[1.02] transition-transform">
                            <img src="{{ asset('images/experience/asprak-2.jpeg') }}" alt="Lab Assistant 2" class="w-full h-32 md:h-40 object-cover rounded-lg border border-gray-200 shadow-sm hover:scale-[1.02] transition-transform">
                        </div>
                    </div>
                    
                    <!-- Experience 2 -->
                    <div class="relative pl-6 border-l-2 border-indigo-200">
                        <div class="absolute w-3 h-3 bg-indigo-600 rounded-full -left-[7px] top-1.5"></div>
                        <h4 class="text-lg font-bold text-gray-900">Logistics Officer</h4>
                        <p class="text-indigo-600 font-medium mb-1">SMA Negeri 2 Tambun Selatan</p>
                        <p class="text-gray-500 text-sm mb-1">Des 2022 – Jan 2023</p>
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Event: Colouring Environment #6</p>
                        <ol class="text-gray-600 text-sm leading-relaxed mb-3 list-decimal pl-4 space-y-1">
                            <li>Compiled a list of logistical needs (sound system, stage, lighting, chairs, tents, generators, cables, etc.)</li>
                            <li>Determined the number and type of equipment needed with the production team.</li>
                            <li>Provided and coordinated technical equipment such as mics, speakers, mixers, cables, and other attachments.</li>
                            <li>Worked with vendors or equipment renters.</li>
                            <li>Organized the loading and unloading process of equipment.</li>
                            <li>Supervised the installation of the stage, sound system, and lighting.</li>
                            <li>Provided emergency or additional logistics if any were lacking.</li>
                            <li>Kept equipment safe during the concert.</li>
                            <li>Organized the dismantling of all equipment after the event.</li>
                            <li>Returned rented or third-party equipment.</li>
                        </ol>
                        <div class="grid grid-cols-2 gap-3 mt-2">
                            <img src="{{ asset('images/experience/lo-1.jpeg') }}" alt="Logistics 1" class="w-full h-32 md:h-40 object-cover rounded-lg border border-gray-200 shadow-sm hover:scale-[1.02] transition-transform">
                            <img src="{{ asset('images/experience/lo-2.jpeg') }}" alt="Logistics 2" class="w-full h-32 md:h-40 object-cover rounded-lg border border-gray-200 shadow-sm hover:scale-[1.02] transition-transform">
                        </div>
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
                    <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex items-center gap-5">
                        <img src="{{ asset('images/certifications/Certi-Python.jpg') }}" alt="Python Certification" class="w-24 h-auto rounded shadow-sm border border-gray-200">
                        <h4 class="font-bold text-gray-900 leading-tight">Python Fundamental for Data Science</h4>
                    </div>
                    
                    <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex items-center gap-5">
                        <img src="{{ asset('images/certifications/Certi-GCC.jpg') }}" alt="Google Cloud Cybersecurity" class="w-24 h-auto rounded shadow-sm border border-gray-200">
                        <h4 class="font-bold text-gray-900 leading-tight">Google Cloud Cybersecurity Certificate</h4>
                    </div>
                    
                    <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow flex items-center gap-5">
                        <img src="{{ asset('images/certifications/Certi-AI900.jpg') }}" alt="Azure AI-900" class="w-24 h-auto rounded shadow-sm border border-gray-200">
                        <h4 class="font-bold text-gray-900 leading-tight">Azure AI Fundamentals (AI-900)</h4>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
@endsection
