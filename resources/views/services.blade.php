@extends('layouts.app')

@section('title', 'Our Services - Aloflux')
@section('meta_description', 'Aloflux Services - AI Solutions, Offline-First Development, Systems Integration, Enterprise Automation, Marketing, Content Marketing, Social Media Marketing, and SEO.')

@php $activePage = 'services'; @endphp

@section('content')
    <!-- Page Header -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-[#1A1A1A]">
        <div class="max-w-7xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 text-[#FF6D00] text-base font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-check-circle text-xl'></i>
                <span>Our Services</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                What We Offer
            </h1>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                From AI-powered solutions to digital marketing, we provide comprehensive technology services tailored for African markets.
            </p>
        </div>
    </section>

    <!-- Technology Services -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Technology Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl">
                    Custom software development and technology solutions built for the realities of African business environments.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- AI Solutions -->
                <div class="group border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-brain text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">AI Solutions</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                AI-powered solutions designed to help businesses streamline operations and boost productivity. From custom AI models and predictive analytics to intelligent process automation, we build tools that transform how you work.
                            </p>
                            <a href="/services/ai-solutions" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Offline-First Development -->
                <div class="group border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-shield text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Offline-First Development</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Software with cleaner, offline-first architectures specifically tailored for African markets. Our applications sync automatically when connectivity is restored, ensuring your business never stops operating.
                            </p>
                            <a href="/services/offline-first-development" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Systems Integration -->
                <div class="group border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-transfer text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Systems Integration</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Seamless integration of disparate systems to create unified, efficient workflows. We connect legacy systems with modern applications, integrate third-party APIs, and build custom middleware solutions.
                            </p>
                            <a href="/services/systems-integration" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Automation -->
                <div class="group border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-bolt text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Enterprise Automation</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Custom enterprise workflow automation for SMEs in low-connectivity environments. We automate document processing, approval workflows, inventory management, and customer communications.
                            </p>
                            <a href="/services/enterprise-automation" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marketing Services -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Marketing Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl">
                    Strategic digital marketing solutions to grow your brand presence and connect with your audience.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Marketing -->
                <div class="group bg-white border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-line-chart text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Marketing</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Strategic digital marketing solutions to grow your brand. We combine data-driven approaches with creative storytelling to maximize your impact, from brand strategy and market research to campaign execution.
                            </p>
                            <a href="/services/marketing" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Content Marketing -->
                <div class="group bg-white border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-edit text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Content Marketing</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Compelling content strategies that engage your audience, build trust, and drive results. From blog posts and articles to video content and infographics, we develop content that builds brand authority.
                            </p>
                            <a href="/services/content-marketing" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Social Media Marketing -->
                <div class="group bg-white border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-share-alt text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Social Media Marketing</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Build and grow your social media presence with targeted campaigns and community management. We create content calendars, run paid campaigns, and engage with your community across all major platforms.
                            </p>
                            <a href="/services/social-media-marketing" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Search Engine Optimization -->
                <div class="group bg-white border border-gray-200 rounded-lg p-8 hover:border-[#FF6D00] hover:shadow-lg transition-all">
                    <div class="flex items-start gap-6">
                        <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx bx-search-alt text-4xl text-[#FF6D00]'></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3">Search Engine Optimization</h3>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                Improve your search rankings and drive organic traffic with data-driven SEO strategies. We handle keyword research, technical audits, on-page optimization, and link building for sustainable results.
                            </p>
                            <a href="/services/search-engine-optimization" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                                Learn more
                                <i class='bx bx-right-arrow-alt text-lg'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-[#FF6D00]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Not Sure Which Service You Need?
            </h2>
            <p class="text-lg text-white/90 mb-8">
                Get in touch and we'll help you find the right solution for your business.
            </p>
            <a href="/#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-white hover:text-[#1A1A1A] transition-colors">
                Get A Free Quote
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div>
    </section>
@endsection
