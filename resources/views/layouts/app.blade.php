<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Aloflux - Technology solutions for African markets. Offline-first architectures, enterprise automation, and AI solutions for SMEs in low-connectivity environments.')">
    <title>@yield('title', 'Aloflux - Technology Solutions for African Markets')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 antialiased">
    <!-- Navigation -->
    <nav class="sticky top-0 bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#FF6D00] rounded flex items-center justify-center">
                        <span class="text-white font-bold text-xl">A</span>
                    </div>
                    <a href="/" class="text-2xl font-bold text-gray-900">Aloflux</a>
                </div>
                <div class="hidden lg:flex items-center gap-8">
                    @php $activePage = $activePage ?? ''; @endphp
                    <a href="/" class="{{ $activePage === 'home' ? 'text-[#FF6D00]' : 'text-gray-700 hover:text-[#1A1A1A]' }} font-medium transition-colors">Home</a>
                    <a href="/about" class="{{ $activePage === 'about' ? 'text-[#FF6D00]' : 'text-gray-700 hover:text-[#1A1A1A]' }} font-medium transition-colors">About Us</a>
                    <a href="/services" class="{{ $activePage === 'services' ? 'text-[#FF6D00]' : 'text-gray-700 hover:text-[#1A1A1A]' }} font-medium transition-colors">Services</a>
                    <a href="/#projects" class="text-gray-700 hover:text-[#1A1A1A] font-medium transition-colors">Projects</a>
                    <a href="/#contact" class="text-gray-700 hover:text-[#1A1A1A] font-medium transition-colors">Contact</a>
                    <a href="/#contact" class="px-6 py-2.5 bg-[#FF6D00] text-white rounded-full font-semibold hover:bg-[#E55A00] transition-colors">
                        Get A Quote
                    </a>
                </div>
                <button id="mobile-menu-button" class="lg:hidden text-gray-700 p-2">
                    <i class='bx bx-menu text-2xl'></i>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-2">
                <a href="/" class="block px-4 py-2 {{ $activePage === 'home' ? 'text-[#FF6D00] bg-orange-50 font-semibold' : 'text-gray-700 hover:bg-gray-50' }} rounded-lg">Home</a>
                <a href="/about" class="block px-4 py-2 {{ $activePage === 'about' ? 'text-[#FF6D00] bg-orange-50 font-semibold' : 'text-gray-700 hover:bg-gray-50' }} rounded-lg">About Us</a>
                <a href="/services" class="block px-4 py-2 {{ $activePage === 'services' ? 'text-[#FF6D00] bg-orange-50 font-semibold' : 'text-gray-700 hover:bg-gray-50' }} rounded-lg">Services</a>
                <a href="/#projects" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Projects</a>
                <a href="/#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Contact</a>
                <a href="/#contact" class="block px-4 py-2 bg-[#FF6D00] text-white rounded-lg font-semibold text-center">Get A Quote</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-[#1A1A1A] text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-12 mb-8">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#FF6D00] rounded flex items-center justify-center">
                            <span class="text-white font-bold text-xl">A</span>
                        </div>
                        <span class="text-2xl font-bold">Aloflux</span>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Technology solutions designed for African markets. Building the future of offline-first software.
                    </p>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="/services/ai-solutions" class="hover:text-[#FF6D00] transition-colors">AI Solutions</a></li>
                        <li><a href="/services/offline-first-development" class="hover:text-[#FF6D00] transition-colors">Offline-First Development</a></li>
                        <li><a href="/services/systems-integration" class="hover:text-[#FF6D00] transition-colors">Systems Integration</a></li>
                        <li><a href="/services/enterprise-automation" class="hover:text-[#FF6D00] transition-colors">Enterprise Automation</a></li>
                        <li><a href="/services/marketing" class="hover:text-[#FF6D00] transition-colors">Marketing</a></li>
                        <li><a href="/services/content-marketing" class="hover:text-[#FF6D00] transition-colors">Content Marketing</a></li>
                        <li><a href="/services/social-media-marketing" class="hover:text-[#FF6D00] transition-colors">Social Media Marketing</a></li>
                        <li><a href="/services/search-engine-optimization" class="hover:text-[#FF6D00] transition-colors">Search Engine Optimization</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex items-center gap-2">
                            <i class='bx bx-envelope text-lg'></i>
                            info@aloflux.com
                        </li>
                        <li class="flex items-center gap-2">
                            <i class='bx bx-phone text-lg'></i>
                            <a href="tel:+256700000000" class="hover:text-[#FF6D00] transition-colors">+256 700 000000</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-300">
                <p>&copy; {{ date('Y') }} Aloflux. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        @hasSection('scripts')
            @yield('scripts')
        @endif
    </script>
</body>

</html>
