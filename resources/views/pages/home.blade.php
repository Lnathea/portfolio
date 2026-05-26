@extends('layouts.app')
@section('title', 'Home - Afriza')
@section('content')
<!-- Hero Section -->
<section class="py-20 lg:py-32 overflow-hidden relative" data-animate>
    <div class="absolute inset-0 bg-[#1e1e1e] hero-dot-grid -z-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-12">
            <div class="text-center lg:text-left max-w-2xl">
                <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-[#d4d4d4] mb-6">
                    Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#007acc] to-[#007acc]">Muhammad Afriza Hidayat</span>
                </h1>
                <h2 class="text-2xl text-[#d4d4d4] font-medium mb-6 min-h-[2.5rem] font-mono" aria-label="Current role">
                    <span data-typing>Information Technology Student</span><span class="typing-cursor ml-1">|</span>
                </h2>
                <p class="text-xl text-[#9d9d9d] mb-10 leading-relaxed italic font-mono">
                    // "Mahasiswa IT Telkom University yang passionate di Web Development, AI, dan IoT"
                </p>
                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                    <a href="{{ route('projects') }}" class="px-8 py-3 bg-[#007acc] text-white rounded-full font-medium shadow-lg shadow-black/30 hover:bg-[#006bb3] hover:-translate-y-1 transition-all duration-300">View My Work</a>
                    <a href="{{ route('contact') }}" class="px-8 py-3 bg-transparent text-[#007acc] border border-[#007acc] rounded-full font-medium shadow-sm hover:bg-[#007acc] hover:text-white transition-all duration-300">Contact Me</a>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-10">
                    <div class="stat-card bg-[#2d2d2d]/80 border border-[#3e3e42] rounded-2xl p-4 backdrop-blur-sm" data-animate data-delay="0">
                        <div class="text-xl mb-2">💻</div>
                        <div class="text-3xl font-extrabold text-[#007acc]" data-stat-counter data-stat-target="5" data-stat-suffix="+">0+</div>
                        <p class="text-xs text-[#9d9d9d] mt-1">Projects Completed</p>
                    </div>
                    <div class="stat-card bg-[#2d2d2d]/80 border border-[#3e3e42] rounded-2xl p-4 backdrop-blur-sm" data-animate data-delay="90">
                        <div class="text-xl mb-2">🎓</div>
                        <div class="text-3xl font-extrabold text-[#007acc]" data-stat-counter data-stat-target="3.87" data-stat-decimals="2">0.00</div>
                        <p class="text-xs text-[#9d9d9d] mt-1">Current GPA</p>
                    </div>
                    <div class="stat-card bg-[#2d2d2d]/80 border border-[#3e3e42] rounded-2xl p-4 backdrop-blur-sm" data-animate data-delay="180">
                        <div class="text-xl mb-2">🏅</div>
                        <div class="text-3xl font-extrabold text-[#007acc]" data-stat-counter data-stat-target="3">0</div>
                        <p class="text-xs text-[#9d9d9d] mt-1">Certifications</p>
                    </div>
                    <div class="stat-card bg-[#2d2d2d]/80 border border-[#3e3e42] rounded-2xl p-4 backdrop-blur-sm" data-animate data-delay="270">
                        <div class="text-xl mb-2">⚡</div>
                        <div class="text-3xl font-extrabold text-[#007acc]" data-stat-counter data-stat-target="2">0</div>
                        <p class="text-xs text-[#9d9d9d] mt-1">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="relative lg:w-96 flex-shrink-0 mb-8 lg:mb-0">
                <div class="w-64 h-64 md:w-80 md:h-80 lg:w-96 lg:h-96 rounded-full overflow-hidden border-4 border-[#3e3e42] shadow-2xl relative z-10 mx-auto">
                    <img src="{{ asset('images/profile/profile-afriza.jpeg') }}" alt="Muhammad Afriza Hidayat" class="w-full h-full object-cover">
                </div>
                <!-- Decorative background blob -->
                <div class="absolute inset-0 bg-gradient-to-tr from-[#007acc] to-[#007acc] rounded-full blur-3xl opacity-30 -z-10 scale-110"></div>
            </div>
        </div>
    </div>
</section>

<!-- Summary & Education -->
<section class="py-16 bg-[#1e1e1e]" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-[#d4d4d4]">Explore the Portfolio</h2>
            <p class="mt-4 text-lg text-[#9d9d9d] max-w-2xl mx-auto">Find more detail about my background, career experience, achievements, and project work.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            <a href="{{ route('about') }}" class="block rounded-3xl border border-[#3e3e42] bg-[#252526] p-8 hover:border-[#007acc] hover:shadow-xl transition-all duration-300">
                <h3 class="text-2xl font-semibold text-[#d4d4d4] mb-3">About</h3>
                <p class="text-[#9d9d9d]">See my profile, education, technical skills, certifications, organizations, and language background.</p>
            </a>
            <a href="{{ route('experience') }}" class="block rounded-3xl border border-[#3e3e42] bg-[#252526] p-8 hover:border-[#007acc] hover:shadow-xl transition-all duration-300">
                <h3 class="text-2xl font-semibold text-[#d4d4d4] mb-3">Experience</h3>
                <p class="text-[#9d9d9d]">Explore my hands-on roles supporting labs, events, and technical operations.</p>
            </a>
            <a href="{{ route('awards') }}" class="block rounded-3xl border border-[#3e3e42] bg-[#252526] p-8 hover:border-[#007acc] hover:shadow-xl transition-all duration-300">
                <h3 class="text-2xl font-semibold text-[#d4d4d4] mb-3">Awards</h3>
                <p class="text-[#9d9d9d]">Review academic and competition achievements earned during high school and university.</p>
            </a>
            <a href="{{ route('projects') }}" class="block rounded-3xl border border-[#3e3e42] bg-[#252526] p-8 hover:border-[#007acc] hover:shadow-xl transition-all duration-300">
                <h3 class="text-2xl font-semibold text-[#d4d4d4] mb-3">Projects</h3>
                <p class="text-[#9d9d9d]">Browse portfolio projects that showcase my development, design, and AI work.</p>
            </a>
            <a href="{{ route('contact') }}" class="block rounded-3xl border border-[#3e3e42] bg-[#252526] p-8 hover:border-[#007acc] hover:shadow-xl transition-all duration-300">
                <h3 class="text-2xl font-semibold text-[#d4d4d4] mb-3">Contact</h3>
                <p class="text-[#9d9d9d]">Get in touch for collaborations, questions, or new opportunities.</p>
            </a>
        </div>
    </div>
</section>@endsection
