@extends('layouts.app')

@section('title', 'Contact - Afriza')

@section('content')
<section class="py-16 bg-white min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900">Get in Touch</h2>
            <p class="mt-4 text-lg text-gray-600">Interested in collaborating or have any questions? I'd love to hear from you!</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="md:col-span-1 space-y-6">
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-1 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        Location
                    </h3>
                    <p class="text-gray-600 pl-7">Bekasi, Indonesia</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-1 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Email
                    </h3>
                    <a href="mailto:mhmdafrizahdyt06@gmail.com" class="text-indigo-600 hover:underline pl-7 break-all block">mhmdafrizahdyt06@gmail.com</a>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                        Social Profiles
                    </h3>
                    <div class="flex space-x-4 pl-7">
                        <a href="https://github.com/Lnathea" target="_blank" class="px-4 py-2 bg-white text-gray-700 rounded-lg shadow-sm hover:text-indigo-600 hover:shadow transition-all border border-gray-200">GitHub</a>
                        <a href="https://www.linkedin.com/in/afriza" target="_blank" class="px-4 py-2 bg-white text-gray-700 rounded-lg shadow-sm hover:text-indigo-600 hover:shadow transition-all border border-gray-200">LinkedIn</a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 bg-white rounded-2xl shadow-xl border border-gray-100 p-8">
                <form action="mailto:mhmdafrizahdyt06@gmail.com" method="POST" enctype="text/plain" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent outline-none transition-all" required placeholder="John Doe">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent outline-none transition-all" required placeholder="john@example.com">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent outline-none transition-all" required placeholder="Let's build something together">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-600 focus:border-transparent outline-none transition-all resize-none" required placeholder="Hi Afriza, I'd like to discuss..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 bg-indigo-600 text-white rounded-lg font-bold text-lg shadow-lg hover:bg-indigo-700 hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Send via Email Client
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
