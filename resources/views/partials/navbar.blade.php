@php
    $navLinks = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp

<header class="sticky top-0 z-50 bg-[#252526]/95 backdrop-blur-md shadow-lg shadow-black/20 border-b-2 border-[#007acc]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold font-mono text-[#d4d4d4] tracking-tight">Afriza<span class="text-[#007acc]">.</span></a>
            </div>
            <nav class="hidden md:flex space-x-8">
                @foreach ($navLinks as $link)
                    @php($isActive = request()->routeIs($link['route']))
                    <a
                        href="{{ route($link['route']) }}"
                        class="relative py-1 font-medium transition-colors duration-300 after:absolute after:left-0 after:-bottom-1 after:h-0.5 after:w-full after:bg-[#007acc] after:origin-left after:transition-transform after:duration-300 {{ $isActive ? 'text-[#007acc] after:scale-x-100' : 'text-[#9d9d9d] after:scale-x-0 hover:text-[#007acc] hover:after:scale-x-100' }}"
                        aria-current="{{ $isActive ? 'page' : 'false' }}"
                    >{{ $link['label'] }}</a>
                @endforeach
            </nav>
            <div class="md:hidden flex items-center">
                <button class="text-[#9d9d9d] hover:text-[#007acc] transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>
