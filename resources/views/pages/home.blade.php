@extends('layouts.app')

@section('title', 'Home - DevPort')

@section('content')
<section class="py-20 lg:py-32 overflow-hidden relative">
    <div class="absolute inset-0 bg-gradient-to-b from-indigo-50 to-white -z-10"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-gray-900 mb-6">
                Hi, I'm a <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Full Stack Developer</span>
            </h1>
            <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                I build beautiful, responsive, and high-performance web applications using modern technologies like Laravel and Tailwind CSS.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('projects') }}" class="px-8 py-3 bg-indigo-600 text-white rounded-full font-medium shadow-lg shadow-indigo-200 hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-300">View Projects</a>
                <a href="{{ route('contact') }}" class="px-8 py-3 bg-white text-gray-900 border border-gray-200 rounded-full font-medium shadow-sm hover:border-gray-300 hover:bg-gray-50 transition-all duration-300">Contact Me</a>
            </div>
        </div>
    </div>
</section>
@endsection
