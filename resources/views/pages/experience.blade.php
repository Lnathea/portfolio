@extends('layouts.app')

@section('title', 'Experience - Afriza')

@section('content')
<section class="py-16 bg-[#1e1e1e] min-h-screen" data-animate>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-[#d4d4d4]">Experience</h1>
            <p class="mt-4 text-lg text-[#9d9d9d] max-w-3xl mx-auto">Professional roles and practical experience supporting university labs, events, and technical operations.</p>
        </div>

        <div class="space-y-10">
            <article class="bg-[#2d2d2d] border border-[#3e3e42] rounded-3xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300" data-animate>
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 mb-6">
                    <div>
                        <h2 class="text-3xl font-bold text-[#d4d4d4]">Operating Systems Lab Assistant</h2>
                        <p class="text-[#007acc] font-medium">Telkom University Jakarta</p>
                    </div>
                    <span class="px-4 py-2 text-sm font-semibold rounded-full bg-[#252526] border border-[#3e3e42] text-[#9d9d9d]">Feb 2026 – Present</span>
                </div>
                <p class="text-[#9d9d9d] leading-relaxed mb-5">Assisted students in network and systems practicum, including hands-on configuration of network devices and operating systems. Ensured proper lab procedures, assessed student performance, and bridged the gap between theoretical concepts and real-world IT applications.</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <img src="{{ asset('images/experience/asprak-1.jpeg') }}" alt="Lab Assistant 1" class="w-full h-72 object-cover rounded-3xl border border-[#3e3e42] shadow-sm">
                    <img src="{{ asset('images/experience/asprak-2.jpeg') }}" alt="Lab Assistant 2" class="w-full h-72 object-cover rounded-3xl border border-[#3e3e42] shadow-sm">
                </div>
            </article>

            <article class="bg-[#2d2d2d] border border-[#3e3e42] rounded-3xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300" data-animate data-delay="120">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6 mb-6">
                    <div>
                        <h2 class="text-3xl font-bold text-[#d4d4d4]">Logistics Officer</h2>
                        <p class="text-[#007acc] font-medium">SMA Negeri 2 Tambun Selatan</p>
                    </div>
                    <span class="px-4 py-2 text-sm font-semibold rounded-full bg-[#252526] border border-[#3e3e42] text-[#9d9d9d]">Dec 2022 – Jan 2023</span>
                </div>
                <p class="text-[#9d9d9d] leading-relaxed mb-5">Organized logistics for the Colouring Environment #6 event, coordinating equipment, vendor communication, and stage setup to ensure a seamless event experience.</p>
                <ol class="text-[#9d9d9d] list-decimal pl-5 space-y-2 mb-6">
                    <li>Compiled logistical requirements including sound system, stage, lighting, chairs, tents, generators, and cables.</li>
                    <li>Coordinated equipment needs with the production team and vendors.</li>
                    <li>Managed installation, supervision, and dismantling of technical equipment.</li>
                    <li>Ensured safety and timely return of all rented and owned equipment.</li>
                </ol>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <img src="{{ asset('images/experience/lo-1.jpeg') }}" alt="Logistics 1" class="w-full h-72 object-cover rounded-3xl border border-[#3e3e42] shadow-sm">
                    <img src="{{ asset('images/experience/lo-2.jpeg') }}" alt="Logistics 2" class="w-full h-72 object-cover rounded-3xl border border-[#3e3e42] shadow-sm">
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
