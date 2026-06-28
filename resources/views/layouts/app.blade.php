<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Core SEO --}}
    <title>@yield('title', 'Aloflux - Custom Software, Automation and AI Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'Aloflux builds custom software, enterprise automation, and AI powered solutions for US and European businesses. High quality engineering at competitive rates.')">
    <meta name="keywords" content="@yield('meta_keywords', 'custom software development, enterprise automation, AI solutions, offshore software development, Delaware technology company, Laravel development, digital commerce infrastructure, IT managed services')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Aloflux LLC">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="Aloflux">
    <meta property="og:title" content="@yield('og_title', 'Aloflux - Custom Software, Automation and AI Solutions')">
    <meta property="og:description" content="@yield('og_description', 'Aloflux builds custom software, enterprise automation, and AI powered solutions for US and European businesses. High quality engineering at competitive rates.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1200&h=630&fit=crop')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_US">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Aloflux - Custom Software, Automation and AI Solutions')">
    <meta name="twitter:description" content="@yield('og_description', 'Aloflux builds custom software, enterprise automation, and AI powered solutions for US and European businesses. High quality engineering at competitive rates.')">
    <meta name="twitter:image" content="@yield('og_image', 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=1200&h=630&fit=crop')">

    {{-- Organization JSON-LD --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Aloflux LLC",
        "alternateName": "Aloflux",
        "url": "{{ url('/') }}",
        "logo": "{{ url('/') }}/favicon.ico",
        "description": "Aloflux builds custom software, enterprise automation, and AI powered solutions for US and European businesses.",
        "address": [
            {
                "@@type": "PostalAddress",
                "addressLocality": "Kampala",
                "addressCountry": "UG"
            },
            {
                "@@type": "PostalAddress",
                "addressRegion": "Delaware",
                "addressCountry": "US"
            }
        ],
        "contactPoint": {
            "@@type": "ContactPoint",
            "telephone": "+256758831249",
            "email": "info@aloflux.com",
            "contactType": "customer service",
            "availableLanguage": "English"
        },
        "knowsAbout": [
            "Custom Software Development",
            "Enterprise Automation",
            "AI Powered SaaS Solutions",
            "Digital Commerce Infrastructure",
            "IT Managed Services",
            "Offline First Development",
            "Systems Integration"
        ],
        "areaServed": ["US", "EU"]
    }
    </script>

    {{-- Page-specific structured data --}}
    @yield('structured_data')

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
            <div class="grid md:grid-cols-4 gap-10 mb-8">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-[#FF6D00] rounded flex items-center justify-center">
                            <span class="text-white font-bold text-xl">A</span>
                        </div>
                        <span class="text-2xl font-bold">Aloflux</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        We build custom software, enterprise automation, AI powered solutions, and digital commerce infrastructure for businesses in the US and Europe.
                    </p>
                </div>

                <!-- Major Services -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-widest text-[#FF6D00] mb-4">Major Services</h4>
                    <ul class="space-y-2.5 text-gray-300 text-sm">
                        <li>
                            <a href="https://schoolms.aloflux.com/" target="_blank" class="hover:text-[#FF6D00] transition-colors flex items-center gap-2">
                                <i class='bx bx-book-reader text-base'></i>
                                School Management System
                            </a>
                        </li>
                        <li>
                            <a href="https://versefountain.com" target="_blank" class="hover:text-[#FF6D00] transition-colors flex items-center gap-2">
                                <i class='bx bx-pen text-base'></i>
                                Versefountain
                            </a>
                        </li>
                        <li>
                            <a href="/#contact" class="hover:text-[#FF6D00] transition-colors flex items-center gap-2">
                                <i class='bx bx-code-alt text-base'></i>
                                Software Development
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Other Services -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Other Services</h4>
                    <ul class="space-y-2.5 text-gray-400 text-sm">
                        <li><a href="/services/ai-solutions" class="hover:text-[#FF6D00] transition-colors">AI Solutions</a></li>
                        <li><a href="/services/offline-first-development" class="hover:text-[#FF6D00] transition-colors">Offline-First Development</a></li>
                        <li><a href="/services/systems-integration" class="hover:text-[#FF6D00] transition-colors">Systems Integration</a></li>
                        <li><a href="/services/enterprise-automation" class="hover:text-[#FF6D00] transition-colors">Enterprise Automation</a></li>
                        <li><a href="/services/marketing" class="hover:text-[#FF6D00] transition-colors">Marketing</a></li>
                        <li><a href="/services/search-engine-optimization" class="hover:text-[#FF6D00] transition-colors">SEO</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Contact</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-center gap-2">
                            <i class='bx bx-envelope text-lg text-[#FF6D00]'></i>
                            info@aloflux.com
                        </li>
                        <li class="flex items-center gap-2">
                            <i class='bx bx-phone text-lg text-[#FF6D00]'></i>
                            <a href="tel:+256758831249" class="hover:text-[#FF6D00] transition-colors">+256 758 831249</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class='bx bx-map text-lg text-[#FF6D00]'></i>
                            <span>Kampala, Uganda</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class='bx bx-map text-lg text-[#FF6D00]'></i>
                            <span>Delaware, USA</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-500 text-sm">
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
