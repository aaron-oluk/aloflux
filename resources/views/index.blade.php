@extends('layouts.app')

@section('title', 'Aloflux - Technology Solutions for African Markets')

@php $activePage = 'home'; @endphp

@section('content')
    <!-- Hero Section -->
    <section id="home" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 text-[#FF6D00] text-base md:text-lg font-bold mb-4 tracking-wide uppercase">
                        <i class='bx bx-check-circle text-xl'></i>
                        <span>Elevate Your Business With Us</span>
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Empowering Your Success with Digital Expertise
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        We design, develop, and commercialize software with cleaner, offline-first architectures for African markets. Our solutions work seamlessly even in low-connectivity environments, helping SMEs thrive with custom enterprise automation and AI-powered tools.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/services" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-[#E55A00] transition-colors">
                            Explore More
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                        <a href="/services" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-white text-gray-900 border-2 border-gray-300 rounded-lg font-semibold hover:border-[#1A1A1A] hover:text-[#1A1A1A] transition-colors">
                            View All Services
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=400&h=400&fit=crop" alt="Team collaboration" class="rounded-lg aspect-square object-cover w-full">
                            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400&h=400&fit=crop" alt="Business meeting" class="rounded-lg aspect-square object-cover w-full">
                        </div>
                        <div class="space-y-4 pt-8">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&h=400&fit=crop" alt="Technology solutions" class="rounded-lg aspect-square object-cover w-full">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=400&fit=crop" alt="Digital workspace" class="rounded-lg aspect-square object-cover w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Keywords Bar -->
    <section class="bg-[#1A1A1A] py-4 px-4 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center gap-4 text-white text-sm md:text-base font-medium whitespace-nowrap">
                <div class="flex items-center gap-4 animate-scroll">
                    <span>Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Content Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Social Media Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Search Engine Optimization</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Enterprise Automation</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>AI Solutions</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Offline-First Development</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Systems Integration</span>
                    <span class="text-[#FF6D00]">*</span>
                    <!-- Duplicate for seamless loop -->
                    <span>Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Content Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Social Media Marketing</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Search Engine Optimization</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Enterprise Automation</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>AI Solutions</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Offline-First Development</span>
                    <span class="text-[#FF6D00]">*</span>
                    <span>Systems Integration</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                    <i class='bx bx-check-circle text-lg'></i>
                    <span>About Us</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Empowering Your Success with Digital Expertise
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-start">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Our team at work" class="rounded-lg aspect-[4/3] object-cover w-full">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=400&fit=crop" alt="Team planning session" class="rounded-lg aspect-square object-cover w-full">
                    </div>
                    <div class="space-y-4 pt-8">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=400&fit=crop" alt="Office environment" class="rounded-lg aspect-square object-cover w-full">
                        <img src="https://images.unsplash.com/photo-1553028826-f4804a6dba3b?w=400&h=300&fit=crop" alt="Innovation and technology" class="rounded-lg aspect-[4/3] object-cover w-full">
                    </div>
                </div>

                <div>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Aloflux is a technology company dedicated to creating innovative software solutions that address the unique challenges faced by businesses in African markets. We understand that connectivity can be unreliable, and we build our solutions with this reality in mind.
                    </p>

                    <!-- Progress Bars -->
                    <div class="space-y-6 mb-8">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">Offline-First Architecture</span>
                                <span class="text-gray-600 font-semibold">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">AI & Automation Solutions</span>
                                <span class="text-gray-600 font-semibold">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">Market-Specific Customization</span>
                                <span class="text-gray-600 font-semibold">88%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>

                    <a href="/about" class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-[#E55A00] transition-colors">
                        About Us
                        <i class='bx bx-right-arrow-alt text-xl'></i>
                    </a>
                </div>
            </div>

            {{-- Statistics - commented out
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 pt-16 border-t border-gray-200">
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-check-circle text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">500+</div>
                    <div class="text-gray-600 font-medium">Successful Projects</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-group text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">50+</div>
                    <div class="text-gray-600 font-medium">Expert Team</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-happy text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">300+</div>
                    <div class="text-gray-600 font-medium">Happy Customers</div>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class='bx bx-time text-4xl text-[#FF6D00]'></i>
                    </div>
                    <div class="text-4xl font-bold text-[#1A1A1A] mb-2">8+</div>
                    <div class="text-gray-600 font-medium">Years of Experience</div>
                </div>
            </div>
            --}}
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-[#1A1A1A]">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                        <i class='bx bx-check-circle text-lg'></i>
                        <span>Our Services</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                        Boost Your Brand with Our Expertise
                    </h2>
                </div>
                <a href="/services" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 rounded-lg font-semibold hover:bg-gray-100 transition-colors mt-4 md:mt-0">
                    View All Services
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service 1: AI Solutions -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-brain text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">AI Solutions</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        AI-powered solutions designed to help businesses streamline operations and boost productivity with intelligent automation.
                    </p>
                    <a href="/services/ai-solutions" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 2: Offline-First Development -->
                <div class="bg-[#FF6D00] rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-white/20 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-shield text-4xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Offline-First Development</h3>
                    <p class="mb-6 text-sm leading-relaxed text-white/90">
                        We design and develop software with cleaner, offline-first architectures specifically tailored for African markets.
                    </p>
                    <a href="/services/offline-first-development" class="font-semibold text-sm text-white inline-flex items-center gap-1 hover:underline">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 3: Systems Integration -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-transfer text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Systems Integration</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Seamless integration of disparate systems to create unified, efficient workflows across your organization.
                    </p>
                    <a href="/services/systems-integration" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 4: Enterprise Automation -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-bolt text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Enterprise Automation</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Custom enterprise workflow automation and AI solutions for SMEs in low-connectivity environments.
                    </p>
                    <a href="/services/enterprise-automation" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 5: Marketing -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-line-chart text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Marketing</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Strategic digital marketing solutions to grow your brand presence and reach your target audience effectively.
                    </p>
                    <a href="/services/marketing" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 6: Content Marketing -->
                <div class="bg-[#FF6D00] rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-white/20 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-edit text-4xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Content Marketing</h3>
                    <p class="mb-6 text-sm leading-relaxed text-white/90">
                        Compelling content strategies that engage your audience, build trust, and drive meaningful business results.
                    </p>
                    <a href="/services/content-marketing" class="font-semibold text-sm text-white inline-flex items-center gap-1 hover:underline">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 7: Social Media Marketing -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-share-alt text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Social Media Marketing</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Build and grow your social media presence with targeted campaigns and community management strategies.
                    </p>
                    <a href="/services/social-media-marketing" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Service 8: Search Engine Optimization -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-6">
                        <i class='bx bx-search-alt text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Search Engine Optimization</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        Improve your search rankings and drive organic traffic with our data-driven SEO strategies and best practices.
                    </p>
                    <a href="/services/search-engine-optimization" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Learn more
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <div>
                    <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                        <i class='bx bx-check-circle text-lg'></i>
                        <span>Our Projects</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                        Showcasing Our Success Stories
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl">
                        Explore some of our recent projects that have transformed businesses across African markets with innovative technology solutions.
                    </p>
                </div>
            </div>

            @php
                $projects = [
                    [
                        'icon' => 'bx-book-reader',
                        'title' => 'School Management System',
                        'description' => 'A comprehensive school management system designed to streamline administrative tasks, student records, academic performance tracking, and communication between teachers, students, and parents.',
                        'tags' => [
                            ['label' => 'Education', 'highlight' => true],
                            ['label' => 'Management System', 'highlight' => false],
                        ],
                        'link' => 'https://schoolms.aloflux.com/',
                    ],
                    [
                        'icon' => 'bx-pen',
                        'title' => 'Versefountain',
                        'description' => 'A vibrant platform for creatives, writers, readers, and poets to share their work, discover new content, and connect with a community of literary enthusiasts. Features include publishing tools, reading lists, and interactive engagement.',
                        'tags' => [
                            ['label' => 'Creative Platform', 'highlight' => true],
                            ['label' => 'Social Network', 'highlight' => false],
                        ],
                        'link' => 'https://versefountain.com',
                    ],
                ];
            @endphp

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($projects as $project)
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 group">
                        <div class="p-6">
                            <div class="w-12 h-12 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-4">
                                <i class='bx {{ $project['icon'] }} text-3xl text-[#FF6D00]'></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $project['title'] }}</h3>
                            <p class="text-gray-600 mb-4 text-sm leading-relaxed">
                                {{ $project['description'] }}
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach ($project['tags'] as $tag)
                                    @if ($tag['highlight'])
                                        <span class="px-3 py-1 bg-[#FF6D00]/10 text-[#FF6D00] text-xs font-semibold rounded-full">{{ $tag['label'] }}</span>
                                    @else
                                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">{{ $tag['label'] }}</span>
                                    @endif
                                @endforeach
                            </div>
                            <a href="{{ $project['link'] }}" target="_blank" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                                View Project
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 text-[#FF6D00] text-sm font-semibold mb-4">
                    <i class='bx bx-check-circle text-lg'></i>
                    <span>Get in Touch</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Ready to Transform Your Business?
                </h2>
                <p class="text-lg text-gray-600">
                    Let's discuss how our innovative technology solutions can help your business thrive
                </p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8 md:p-12 shadow-lg">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6" id="contact-form">
                    @csrf

                    @if(session('success'))
                        <div class="bg-green-50 text-green-700 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in" id="success-alert">
                            Message sent successfully.
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-50 text-red-700 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in" id="error-alert">
                            Failed to send message. Please try again.
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-50 text-red-700 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in" id="error-alert">
                            Please fill in all required fields correctly.
                        </div>
                    @endif

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                        </div>
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">Company</label>
                        <input type="text" id="company" name="company" value="{{ old('company') }}"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200 resize-none">{{ old('message') }}</textarea>
                    </div>
                    <button type="submit"
                        class="w-full px-8 py-4 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-[#E55A00] transition-colors shadow-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                }
            });
        });

        // Handle form submission feedback
        @if(session('success') || session('error'))
            setTimeout(function() {
                const contactSection = document.getElementById('contact');
                if (contactSection) {
                    contactSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 100);

            @if(session('success'))
                document.getElementById('contact-form')?.reset();
            @endif
        @endif
@endsection
