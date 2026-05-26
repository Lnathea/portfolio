@extends('layouts.app')

@section('title', 'About - Afriza')

@section('content')

{{-- ═══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ --}}
<section class="relative min-h-screen flex items-center bg-[#1e1e1e] overflow-hidden">
    {{-- dot-grid background --}}
    <div class="pointer-events-none absolute inset-0"
         style="background-image:radial-gradient(circle,rgba(0,122,204,.18) 1px,transparent 1px);background-size:28px 28px;"></div>
    {{-- glow blobs --}}
    <div class="pointer-events-none absolute -top-40 -left-40 h-96 w-96 rounded-full bg-[#007acc] opacity-10 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-40 -right-40 h-96 w-96 rounded-full bg-[#007acc] opacity-10 blur-3xl"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            {{-- LEFT: text --}}
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 rounded-full border border-[#3e3e42] bg-[#252526] px-4 py-2 text-xs font-mono text-[#007acc] tracking-widest uppercase">
                    <span class="h-2 w-2 rounded-full bg-[#007acc] animate-pulse"></span>
                    Portfolio / About
                </div>

                <div>
                    <h1 class="text-5xl md:text-6xl font-extrabold text-[#d4d4d4] leading-tight">
                        Muhammad<br>
                        <span class="text-[#007acc]">Afriza</span> Hidayat
                    </h1>
                    <div class="mt-4 h-[2px] w-20 bg-[#007acc] rounded-full"></div>
                </div>

                <p class="text-lg text-[#9d9d9d] leading-relaxed max-w-lg">
                    6th-semester IT student at <span class="text-[#d4d4d4] font-semibold">Telkom University Jakarta</span>.
                    Passionate about web development, AI, and IoT — turning complex ideas into clean, functional products.
                </p>

                {{-- typing role --}}
                <div class="font-mono text-base text-[#007acc]">
                    <span>// </span><span id="typing-role"></span><span class="animate-pulse">█</span>
                </div>

                {{-- info chips --}}
                <div class="flex flex-wrap gap-3 text-sm text-[#9d9d9d]">
                    <span class="flex items-center gap-2 rounded-xl border border-[#3e3e42] bg-[#252526] px-4 py-2">
                        📍 Bekasi, Indonesia
                    </span>
                    <span class="flex items-center gap-2 rounded-xl border border-[#3e3e42] bg-[#252526] px-4 py-2">
                        🎓 GPA 3.87
                    </span>
                    <span class="flex items-center gap-2 rounded-xl border border-[#3e3e42] bg-[#252526] px-4 py-2">
                        💼 Open to Internship
                    </span>
                </div>

                {{-- CTA --}}
                <div class="flex flex-wrap gap-4">
                    <a href="{{ asset('files/Muhammad_Afriza_Hidayat-CV.pdf') }}" download
                       class="inline-flex items-center gap-2 rounded-xl bg-[#007acc] px-6 py-3 text-sm font-semibold text-white hover:bg-[#006bb3] transition-colors duration-300 shadow-lg shadow-[#007acc]/20">
                        ↓ Download CV
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 rounded-xl border border-[#007acc] px-6 py-3 text-sm font-semibold text-[#007acc] hover:bg-[#007acc] hover:text-white transition-all duration-300">
                        Contact Me →
                    </a>
                </div>

                {{-- socials --}}
                <div class="flex gap-3">
                    <a href="https://github.com/Lnathea" target="_blank"
                       class="rounded-xl border border-[#3e3e42] bg-[#252526] px-4 py-2 text-sm text-[#9d9d9d] hover:border-[#007acc] hover:text-[#007acc] transition-colors duration-300">
                        GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/afriza" target="_blank"
                       class="rounded-xl border border-[#3e3e42] bg-[#252526] px-4 py-2 text-sm text-[#9d9d9d] hover:border-[#007acc] hover:text-[#007acc] transition-colors duration-300">
                        LinkedIn
                    </a>
                    <a href="mailto:mhmdafrizahdyt06@gmail.com"
                       class="rounded-xl border border-[#3e3e42] bg-[#252526] px-4 py-2 text-sm text-[#9d9d9d] hover:border-[#007acc] hover:text-[#007acc] transition-colors duration-300">
                        Email
                    </a>
                </div>
            </div>

            {{-- RIGHT: photo card --}}
            <div class="flex justify-center lg:justify-end" data-animate>
                <div class="relative">
                    {{-- decorative corner --}}
                    <div class="absolute -top-4 -right-4 h-32 w-32 rounded-3xl border-2 border-[#007acc] opacity-30"></div>
                    <div class="absolute -bottom-4 -left-4 h-32 w-32 rounded-3xl border-2 border-[#007acc] opacity-30"></div>

                    <div class="relative overflow-hidden rounded-3xl border-2 border-[#3e3e42] shadow-2xl shadow-black/40 w-72 md:w-80 cursor-zoom-in group lightbox-trigger"
                         data-src="{{ asset('images/profile/profile-afriza.jpeg') }}"
                         data-title="Muhammad Afriza Hidayat">
                        <img src="{{ asset('images/profile/profile-afriza.jpeg') }}"
                             alt="Muhammad Afriza Hidayat"
                             class="w-full object-cover object-top hover:scale-105 transition-transform duration-500" style="height:420px;" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all duration-300 flex items-end justify-center pb-4">
                            <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-white text-xs font-semibold bg-black/60 px-3 py-1.5 rounded-full">🔍 Fullscreen</span>
                        </div>
                        {{-- overlay badge --}}
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                            <p class="font-mono text-xs text-[#007acc] tracking-widest uppercase">IT Student & Developer</p>
                            <p class="mt-1 text-sm text-[#d4d4d4]">Telkom University Jakarta</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     ABOUT ME (text + stats)
═══════════════════════════════════════════ --}}
<section class="py-20 bg-[#252526]" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div class="space-y-6">
                <div>
                    <h2 class="text-4xl font-bold text-[#d4d4d4]">About Me</h2>
                    <div class="mt-2 h-1 w-16 rounded-full bg-[#007acc]"></div>
                </div>
                <p class="text-[#9d9d9d] leading-relaxed">
                    Hello! I'm <span class="text-[#d4d4d4] font-semibold">Muhammad Afriza Hidayat</span>, a 6th semester
                    Information Technology student at Telkom University Jakarta. I have a deep interest in technology
                    development, artificial intelligence, and IoT systems.
                </p>
                <p class="text-[#9d9d9d] leading-relaxed">
                    Throughout my studies, I have actively worked on various academic projects ranging from UI/UX Design,
                    Machine Learning, IoT Systems, to QA Testing. I am also trusted as an Operating Systems Lab Assistant,
                    where I help students understand OS concepts and Linux environments.
                </p>
                <p class="text-[#9d9d9d] leading-relaxed">
                    I am an adaptive, detail-oriented individual who is always eager to continuously learn new things in
                    the world of technology.
                </p>
            </div>

            {{-- stats grid --}}
            <div class="grid grid-cols-2 gap-4">
                @foreach ([
                    ['num' => '5+',   'label' => 'Projects Completed', 'icon' => '🚀'],
                    ['num' => '3.87', 'label' => 'Current GPA',        'icon' => '🎓'],
                    ['num' => '3',    'label' => 'Certifications',      'icon' => '📜'],
                    ['num' => '2+',   'label' => 'Years Experience',    'icon' => '💡'],
                ] as $stat)
                    <div class="rounded-2xl border border-[#3e3e42] bg-[#1e1e1e] p-6 hover:border-[#007acc] transition-colors duration-300 group">
                        <div class="text-2xl mb-2">{{ $stat['icon'] }}</div>
                        <div class="text-3xl font-extrabold text-[#007acc] group-hover:scale-110 transition-transform duration-300 origin-left">
                            {{ $stat['num'] }}
                        </div>
                        <p class="mt-1 text-sm text-[#9d9d9d]">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     SKILLS
═══════════════════════════════════════════ --}}
<section class="py-20 bg-[#1e1e1e]" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-4xl font-bold text-[#d4d4d4]">Skills</h2>
            <div class="mt-2 h-1 w-16 rounded-full bg-[#007acc]"></div>
            <p class="mt-3 text-[#9d9d9d]">Technologies and tools I work with</p>
        </div>

        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            @php
                $skillGroups = [
                    ['title' => 'Programming Languages', 'icon' => '⌨️', 'color' => '#007acc', 'badges' => ['Go', 'Python', 'C/C++', 'Java']],
                    ['title' => 'Web Development',       'icon' => '🌐', 'color' => '#0a9f8f', 'badges' => ['HTML', 'CSS', 'Laravel', 'Flutter']],
                    ['title' => 'Database',              'icon' => '🗄️', 'color' => '#22c55e', 'badges' => ['MySQL', 'SQL']],
                    ['title' => 'Data & AI',             'icon' => '🤖', 'color' => '#8b5cf6', 'badges' => ['Pandas', 'Numpy', 'Scikit-learn']],
                    ['title' => 'Tools',                 'icon' => '🔧', 'color' => '#d97706', 'badges' => ['Git', 'GitHub', 'VS Code', 'Google Colab']],
                    ['title' => 'Networking',            'icon' => '🔗', 'color' => '#ef4444', 'badges' => ['Cisco Packet Tracer', 'TCP/IP']],
                ];
            @endphp

            @foreach ($skillGroups as $group)
                <div class="rounded-2xl border border-[#3e3e42] bg-[#252526] p-6 hover:border-[#007acc] transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-xl">{{ $group['icon'] }}</span>
                        <h3 class="font-semibold text-[#d4d4d4]">{{ $group['title'] }}</h3>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($group['badges'] as $skill)
                            <span class="rounded-lg px-3 py-1 text-xs font-semibold text-white"
                                  style="background-color:{{ $group['color'] }}22;color:{{ $group['color'] }};border:1px solid {{ $group['color'] }}44;">
                                {{ $skill }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     EDUCATION (timeline)
═══════════════════════════════════════════ --}}
<section class="py-20 bg-[#252526]" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-4xl font-bold text-[#d4d4d4]">Education</h2>
            <div class="mt-2 h-1 w-16 rounded-full bg-[#007acc]"></div>
        </div>

        <div class="relative">
            {{-- vertical line --}}
            <div class="absolute left-6 top-0 bottom-0 w-px bg-[#3e3e42]"></div>

            <div class="space-y-8 pl-16">

                {{-- Telkom --}}
                <div class="relative" data-animate>
                    <div class="absolute -left-10 top-6 h-4 w-4 rounded-full bg-[#007acc] border-2 border-[#252526] shadow-lg shadow-[#007acc]/40"></div>
                    <div class="rounded-2xl border border-[#3e3e42] bg-[#1e1e1e] p-6 hover:border-[#007acc] transition-all duration-300">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('images/education/logo-telkom.png') }}"
                                     alt="Telkom University"
                                     class="h-14 w-14 rounded-xl border border-[#3e3e42] bg-[#252526] p-1 object-contain" />
                                <div>
                                    <h3 class="text-xl font-bold text-[#d4d4d4]">Telkom University Jakarta</h3>
                                    <p class="text-sm text-[#9d9d9d]">Bachelor of Information Technology</p>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="rounded-lg border border-[#3e3e42] bg-[#252526] px-3 py-1 text-xs text-[#9d9d9d]">2023 – 2027</span>
                                <span class="rounded-lg border border-[#007acc] bg-[#007acc]/10 px-3 py-1 text-xs text-[#007acc] font-semibold">GPA 3.87</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-[#9d9d9d] leading-relaxed">
                            Focused on web systems, AI, IoT, and UI/UX. Active in HMIT and Google Developer Groups on Campus.
                        </p>
                    </div>
                </div>

                {{-- SMA --}}
                <div class="relative" data-animate>
                    <div class="absolute -left-10 top-6 h-4 w-4 rounded-full bg-[#3e3e42] border-2 border-[#252526]"></div>
                    <div class="rounded-2xl border border-[#3e3e42] bg-[#1e1e1e] p-6 hover:border-[#007acc] transition-all duration-300">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-[#d4d4d4]">SMA Negeri 2 Tambun Selatan</h3>
                                <p class="text-sm text-[#9d9d9d]">Mathematics and Natural Sciences</p>
                            </div>
                            <span class="rounded-lg border border-[#3e3e42] bg-[#252526] px-3 py-1 text-xs text-[#9d9d9d] self-start">2020 – 2023</span>
                        </div>
                        <div class="mt-4 flex items-start gap-3">
                            <span class="mt-1 text-lg">🤖</span>
                            <div>
                                <p class="text-sm font-semibold text-[#d4d4d4]">Robotics Club</p>
                                <p class="text-sm text-[#9d9d9d] leading-relaxed mt-1">
                                    Gained hands-on experience designing, building, and programming robots. Developed foundational
                                    skills in electronics, mechanical systems, and programming through team-based competitions and projects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     CERTIFICATIONS
═══════════════════════════════════════════ --}}
<section class="py-20 bg-[#1e1e1e]" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-4xl font-bold text-[#d4d4d4]">Certifications</h2>
            <div class="mt-2 h-1 w-16 rounded-full bg-[#007acc]"></div>
            <p class="mt-3 text-[#9d9d9d]">Click image to view full certificate</p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            @foreach ([
                ['title' => 'Python Fundamental for Data Science',   'issuer' => 'Dicoding',              'image' => 'images/certifications/Certi-Python.jpg', 'icon' => '🐍'],
                ['title' => 'Google Cloud Cybersecurity Certificate', 'issuer' => 'Google Cloud',          'image' => 'images/certifications/Certi-GCC.jpg',    'icon' => '☁️'],
                ['title' => 'Azure AI Fundamentals (AI-900)',         'issuer' => 'Microsoft Azure',       'image' => 'images/certifications/Certi-AI900.jpg',  'icon' => '🤖'],
            ] as $cert)
                <div class="group overflow-hidden rounded-2xl border border-[#3e3e42] bg-[#252526] hover:border-[#007acc] transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-[#007acc]/10">
                    <div class="relative overflow-hidden cursor-zoom-in lightbox-trigger"
                         data-src="{{ asset($cert['image']) }}"
                         data-title="{{ $cert['title'] }}">
                        <img src="{{ asset($cert['image']) }}"
                             alt="{{ $cert['title'] }}"
                             class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-all duration-300 flex items-center justify-center">
                            <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-white text-sm font-semibold bg-black/60 px-4 py-2 rounded-full">
                                🔍 View Full
                            </span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-start gap-3">
                            <span class="text-xl mt-0.5">{{ $cert['icon'] }}</span>
                            <div>
                                <h3 class="font-semibold text-[#d4d4d4] leading-snug">{{ $cert['title'] }}</h3>
                                <p class="mt-1 text-xs text-[#007acc]">{{ $cert['issuer'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     ORGANIZATIONS
═══════════════════════════════════════════ --}}
<section class="py-20 bg-[#252526]" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-4xl font-bold text-[#d4d4d4]">Organizations</h2>
            <div class="mt-2 h-1 w-16 rounded-full bg-[#007acc]"></div>
        </div>

        <div class="grid gap-6 md:grid-cols-2">
            @foreach ([
                ['name' => 'Himpunan Mahasiswa Teknologi Informasi (HMIT)', 'role' => 'Active Member', 'place' => 'Telkom University Jakarta', 'icon' => '🏛️', 'desc' => 'Student organization focused on IT education, seminars, and community events for Information Technology students.'],
                ['name' => 'Google Developer Groups on Campus',              'role' => 'Active Member', 'place' => 'Telkom University Jakarta', 'icon' => '🌐', 'desc' => 'Google-supported community for students interested in Google technologies, developer tools, and cloud computing.'],
            ] as $org)
                <div class="rounded-2xl border border-[#3e3e42] bg-[#1e1e1e] p-6 hover:border-[#007acc] transition-all duration-300 hover:-translate-y-1">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 h-12 w-12 rounded-xl bg-[#007acc]/10 border border-[#007acc]/20 flex items-center justify-center text-2xl">
                            {{ $org['icon'] }}
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-[#d4d4d4] leading-snug">{{ $org['name'] }}</h3>
                            <p class="mt-1 text-xs text-[#007acc] font-semibold">{{ $org['role'] }} · {{ $org['place'] }}</p>
                            <p class="mt-3 text-sm text-[#9d9d9d] leading-relaxed">{{ $org['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     LANGUAGES
═══════════════════════════════════════════ --}}
<section class="py-20 bg-[#1e1e1e]" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <h2 class="text-4xl font-bold text-[#d4d4d4]">Languages</h2>
            <div class="mt-2 h-1 w-16 rounded-full bg-[#007acc]"></div>
        </div>

        <div class="max-w-2xl space-y-6">
            @foreach ([
                ['label' => 'Indonesian', 'level' => 'Native',                          'percent' => 100, 'flag' => '🇮🇩'],
                ['label' => 'English',    'level' => 'Professional Working Proficiency', 'percent' => 80,  'flag' => '🇬🇧'],
            ] as $lang)
                <div class="rounded-2xl border border-[#3e3e42] bg-[#252526] p-6 hover:border-[#007acc] transition-colors duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <span class="text-2xl">{{ $lang['flag'] }}</span>
                            <div>
                                <h3 class="font-bold text-[#d4d4d4]">{{ $lang['label'] }}</h3>
                                <p class="text-xs text-[#9d9d9d]">{{ $lang['level'] }}</p>
                            </div>
                        </div>
                        <span class="text-sm font-bold text-[#007acc]">{{ $lang['percent'] }}%</span>
                    </div>
                    <div class="h-2 rounded-full bg-[#1e1e1e] border border-[#3e3e42] overflow-hidden">
                        <div class="progress-fill h-full rounded-full bg-gradient-to-r from-[#007acc] to-[#00aeff]"
                             data-value="{{ $lang['percent'] }}" style="width:0%;transition:width 1.2s cubic-bezier(.4,0,.2,1);">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     LIGHTBOX
═══════════════════════════════════════════ --}}
<div id="lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/80 backdrop-blur-sm p-4">
    <div class="relative max-w-4xl w-full">
        <button id="lightbox-close"
                class="absolute -top-10 right-0 text-white text-2xl font-bold hover:text-[#007acc] transition-colors duration-200">✕</button>
        <img id="lightbox-img" src="" alt="" class="w-full rounded-2xl border border-[#3e3e42] shadow-2xl" />
        <p id="lightbox-title" class="mt-4 text-center text-sm text-[#9d9d9d]"></p>
    </div>
</div>

{{-- ═══════════════════════════════════════════
     SCRIPTS
═══════════════════════════════════════════ --}}
<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ── Typing animation ─────────────────── */
    const roles   = ['Information Technology Student', 'Web Developer', 'IoT Enthusiast', 'AI & ML Learner'];
    const typingEl = document.getElementById('typing-role');
    let rIdx = 0, cIdx = 0, deleting = false;

    function tick () {
        const cur = roles[rIdx];
        typingEl.textContent = deleting ? cur.slice(0, --cIdx) : cur.slice(0, ++cIdx);
        if (!deleting && cIdx === cur.length) { deleting = true; return setTimeout(tick, 1400); }
        if  (deleting && cIdx === 0)          { deleting = false; rIdx = (rIdx + 1) % roles.length; }
        setTimeout(tick, deleting ? 55 : 95);
    }
    tick();

    /* ── Scroll fade-in ───────────────────── */
    const fadeEls = document.querySelectorAll('[data-animate]');
    const fadeObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.remove('opacity-0', 'translate-y-8');
                e.target.classList.add('opacity-100', 'translate-y-0');
                fadeObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.12 });
    fadeEls.forEach(el => {
        el.classList.add('opacity-0', 'translate-y-8', 'transition-all', 'duration-700', 'ease-out');
        fadeObs.observe(el);
    });

    /* ── Progress bars ────────────────────── */
    const bars    = document.querySelectorAll('.progress-fill');
    const barObs  = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.width = e.target.dataset.value + '%';
                barObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.3 });
    bars.forEach(b => barObs.observe(b));

    /* ── Lightbox ─────────────────────────── */
    const lb      = document.getElementById('lightbox');
    const lbImg   = document.getElementById('lightbox-img');
    const lbTitle = document.getElementById('lightbox-title');
    const lbClose = document.getElementById('lightbox-close');

    document.querySelectorAll('.lightbox-trigger').forEach(el => {
        el.addEventListener('click', () => {
            lbImg.src       = el.dataset.src;
            lbTitle.textContent = el.dataset.title;
            lb.classList.remove('hidden');
            lb.classList.add('flex');
        });
    });

    function closeLb () { lb.classList.add('hidden'); lb.classList.remove('flex'); }
    lbClose.addEventListener('click', closeLb);
    lb.addEventListener('click', e => { if (e.target === lb) closeLb(); });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLb(); });

});
</script>

@endsection