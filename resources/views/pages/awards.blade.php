@extends('layouts.app')

@section('title', 'Awards - Afriza')

@section('content')
<section class="py-16 bg-[#1e1e1e] min-h-screen" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-[#d4d4d4]">Awards & Achievements</h1>
            <p class="mt-4 text-lg text-[#9d9d9d] max-w-3xl mx-auto">A curated showcase of academic awards, competition achievements, and leadership recognition.</p>
        </div>

        <div class="space-y-12">
            <div data-animate>
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px flex-1 bg-[#3e3e42]"></span>
                    <h2 class="text-sm font-bold uppercase tracking-[0.25em] text-[#007acc]">High School</h2>
                    <span class="h-px flex-1 bg-[#3e3e42]"></span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <article class="bg-[#2d2d2d] border border-[#3e3e42] rounded-3xl overflow-hidden hover:shadow-lg transition-all duration-300">
                        <button type="button" class="block w-full bg-[#1a1a1a] p-4" data-lightbox="award-ldko" data-src="{{ asset('images/awards/LDKO.jpg') }}">
                            <img src="{{ asset('images/awards/LDKO.jpg') }}" alt="LDKO Basic Organizational Leadership Training" class="h-64 w-full object-contain mx-auto transition-transform duration-500 hover:scale-105" />
                        </button>
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="flex items-start gap-3">
                                    <div class="w-14 h-14 rounded-2xl bg-[#252526] border border-[#3e3e42] flex items-center justify-center text-3xl text-[#007acc]">🏆</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-[#d4d4d4]">LDKO Basic Organizational Leadership Training</h3>
                                        <p class="text-sm text-[#9d9d9d] mt-1">SMA Negeri 2 Tambun Selatan</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-[#252526] border border-[#3e3e42] text-xs text-[#9d9d9d]">2020</span>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#252526] border border-[#3e3e42] text-xs font-semibold text-[#007acc]">Issuer: SMA Negeri 2 Tambun Selatan</span>
                        </div>
                    </article>

                    <article class="bg-[#2d2d2d] border border-[#FFD700] rounded-3xl overflow-hidden hover:shadow-lg transition-all duration-300">
                        <button type="button" class="block w-full bg-[#1a1a1a] p-4" data-lightbox="award-physics" data-src="{{ asset('images/awards/PhysicsOlympiad.jpg') }}">
                            <img src="{{ asset('images/awards/PhysicsOlympiad.jpg') }}" alt="Gold Medal – Physics Olympiad" class="h-64 w-full object-contain mx-auto transition-transform duration-500 hover:scale-105" />
                        </button>
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="flex items-start gap-3">
                                    <div class="w-14 h-14 rounded-2xl bg-[#252526] border border-[#FFD700]/50 flex items-center justify-center text-3xl text-[#FFD700]">🥇</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-[#d4d4d4]">Gold Medal – Physics Olympiad</h3>
                                        <p class="text-sm text-[#9d9d9d] mt-1">Olympiad League</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-[#252526] border border-[#3e3e42] text-xs text-[#9d9d9d]">2021</span>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#252526] border border-[#FFD700]/50 text-xs font-semibold text-[#FFD700]">Gold Medal 🥇</span>
                        </div>
                    </article>

                    <article class="bg-[#2d2d2d] border border-[#FFD700] rounded-3xl overflow-hidden hover:shadow-lg transition-all duration-300">
                        <button type="button" class="block w-full bg-[#1a1a1a] p-4" data-lightbox="award-compsci" data-src="{{ asset('images/awards/NationalComputerScienceOlympiad.jpg') }}">
                            <img src="{{ asset('images/awards/NationalComputerScienceOlympiad.jpg') }}" alt="Gold Medal – National Computer Science Olympiad" class="h-64 w-full object-contain mx-auto transition-transform duration-500 hover:scale-105" />
                        </button>
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="flex items-start gap-3">
                                    <div class="w-14 h-14 rounded-2xl bg-[#252526] border border-[#FFD700]/50 flex items-center justify-center text-3xl text-[#FFD700]">🥇</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-[#d4d4d4]">Gold Medal – National Computer Science Olympiad</h3>
                                        <p class="text-sm text-[#9d9d9d] mt-1">Global Youth Action</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-[#252526] border border-[#3e3e42] text-xs text-[#9d9d9d]">2021</span>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#252526] border border-[#FFD700]/50 text-xs font-semibold text-[#FFD700]">Gold Medal 🥇</span>
                        </div>
                    </article>

                    <article class="bg-[#2d2d2d] border border-[#C0C0C0] rounded-3xl overflow-hidden hover:shadow-lg transition-all duration-300">
                        <button type="button" class="block w-full bg-[#1a1a1a] p-4" data-lightbox="award-computer" data-src="{{ asset('images/awards/NationalComputerOlympiad.jpg') }}">
                            <img src="{{ asset('images/awards/NationalComputerOlympiad.jpg') }}" alt="Silver Medal – National Computer Olympiad" class="h-64 w-full object-contain mx-auto transition-transform duration-500 hover:scale-105" />
                        </button>
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="flex items-start gap-3">
                                    <div class="w-14 h-14 rounded-2xl bg-[#252526] border border-[#C0C0C0]/50 flex items-center justify-center text-3xl text-[#C0C0C0]">🥈</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-[#d4d4d4]">Silver Medal – National Computer Olympiad</h3>
                                        <p class="text-sm text-[#9d9d9d] mt-1">Indonesian Competition Institute</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-[#252526] border border-[#3e3e42] text-xs text-[#9d9d9d]">2021</span>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#252526] border border-[#C0C0C0]/50 text-xs font-semibold text-[#C0C0C0]">Silver Medal 🥈</span>
                        </div>
                    </article>
                </div>
            </div>

            <div data-animate data-delay="120">
                <div class="flex items-center gap-3 mb-6">
                    <span class="h-px flex-1 bg-[#3e3e42]"></span>
                    <h2 class="text-sm font-bold uppercase tracking-[0.25em] text-[#007acc]">University</h2>
                    <span class="h-px flex-1 bg-[#3e3e42]"></span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <article class="bg-[#2d2d2d] border border-[#CD7F32] rounded-3xl overflow-hidden hover:shadow-lg transition-all duration-300">
                        <button type="button" class="block w-full bg-[#1a1a1a] p-4" data-lightbox="award-pkm" data-src="{{ asset('images/awards/placeholder.jpg') }}">
                            <div class="flex h-64 w-full items-center justify-center text-6xl text-[#CD7F32]">🥉</div>
                        </button>
                        <div class="p-6">
                            <div class="flex items-start justify-between gap-4 mb-4">
                                <div class="flex items-start gap-3">
                                    <div class="w-14 h-14 rounded-2xl bg-[#252526] border border-[#CD7F32]/50 flex items-center justify-center text-3xl text-[#CD7F32]">🥉</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-[#d4d4d4]">3rd Place – Mini PKM-KC</h3>
                                        <p class="text-sm text-[#9d9d9d] mt-1">Liga Mahasiswa Telkom University Jakarta</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-[#252526] border border-[#3e3e42] text-xs text-[#9d9d9d]">2026</span>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full bg-[#252526] border border-[#CD7F32]/50 text-xs font-semibold text-[#CD7F32]">Bronze Medal 🥉</span>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="award-lightbox" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/90 p-4">
    <button id="award-lightbox-close" class="absolute top-4 right-4 rounded-full border border-[#3e3e42] bg-[#1e1e1e] px-4 py-2 text-white text-lg hover:bg-[#007acc] transition-colors">×</button>
    <img id="award-lightbox-img" class="max-h-[90vh] max-w-full rounded-3xl border border-[#3e3e42] object-contain" src="" alt="Unggahan award" />
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const lightbox = document.getElementById('award-lightbox');
        const lightboxImg = document.getElementById('award-lightbox-img');
        const closeBtn = document.getElementById('award-lightbox-close');

        document.querySelectorAll('[data-lightbox]').forEach(button => {
            button.addEventListener('click', function () {
                const src = this.getAttribute('data-src');
                lightboxImg.src = src;
                lightbox.classList.remove('hidden');
            });
        });

        closeBtn.addEventListener('click', function () {
            lightbox.classList.add('hidden');
            lightboxImg.src = '';
        });

        lightbox.addEventListener('click', function (event) {
            if (event.target === lightbox || event.target === lightboxImg) {
                lightbox.classList.add('hidden');
                lightboxImg.src = '';
            }
        });
    });
</script>
@endsection
