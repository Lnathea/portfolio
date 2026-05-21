@extends('layouts.app')

@section('title', 'Projects - DevPort')

@section('content')
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900">Featured Projects</h2>
            <p class="mt-4 text-lg text-gray-600">A collection of my recent work</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="h-48 bg-gray-200 w-full overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-indigo-100 to-purple-100 group-hover:scale-105 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">E-Commerce Platform</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">A full-featured e-commerce platform built with Laravel, featuring a custom admin panel and payment integration.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-teal-50 text-teal-600 text-xs font-semibold rounded-full">Tailwind CSS</span>
                    </div>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center">
                        View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="h-48 bg-gray-200 w-full overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-blue-100 to-cyan-100 group-hover:scale-105 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Task Management App</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">A beautiful task management application with real-time updates and collaborative features.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-yellow-50 text-yellow-600 text-xs font-semibold rounded-full">AlpineJS</span>
                    </div>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center">
                        View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
            
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 group">
                <div class="h-48 bg-gray-200 w-full overflow-hidden">
                    <div class="w-full h-full bg-gradient-to-br from-pink-100 to-rose-100 group-hover:scale-105 transition-transform duration-500"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Blog Engine</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">A high-performance markdown-based blogging platform optimized for SEO and readability.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">Markdown</span>
                    </div>
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center">
                        View Details <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
