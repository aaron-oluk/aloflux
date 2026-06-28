@extends('layouts.app')

@section('title', 'Aloflux - Custom Software, Automation and AI Solutions')
@section('meta_description', 'Aloflux builds custom software, enterprise automation, AI powered SaaS solutions, and digital commerce infrastructure for US and European businesses. High quality engineering at competitive rates.')
@section('og_title', 'Aloflux - Custom Software, Automation and AI Solutions')
@section('og_description', 'We build custom software, enterprise automation, and AI powered solutions for US and European businesses. High quality engineering at competitive rates.')

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "name": "Aloflux",
    "url": "{{ url('/') }}",
    "description": "Custom software development, enterprise automation, and AI powered solutions for US and European businesses.",
    "publisher": {
        "@@type": "Organization",
        "name": "Aloflux LLC"
    }
}
</script>
@endsection

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
                        We design, build, and deploy custom software, enterprise automation, AI powered SaaS solutions, and digital commerce infrastructure for US and European businesses. Experienced engineers who communicate clearly and deliver solutions that scale, at rates that make serious projects financially viable.
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
                        Aloflux serves US and European SMEs, startups, and NGOs that need custom software, enterprise automation, and AI powered tools. We focus on technical quality, clear communication, and building solutions that scale and last well beyond the initial release.
                    </p>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <i class='bx bx-check-circle text-xl text-[#FF6D00] mt-0.5 shrink-0'></i>
                            <span class="text-gray-700">Custom web applications and enterprise systems built around your business needs</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class='bx bx-check-circle text-xl text-[#FF6D00] mt-0.5 shrink-0'></i>
                            <span class="text-gray-700">In-house SaaS products: School Management System and Versefountain</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class='bx bx-check-circle text-xl text-[#FF6D00] mt-0.5 shrink-0'></i>
                            <span class="text-gray-700">Enterprise automation, AI powered tools, and systems integration</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class='bx bx-check-circle text-xl text-[#FF6D00] mt-0.5 shrink-0'></i>
                            <span class="text-gray-700">Payment gateway integrations and digital commerce infrastructure</span>
                        </li>
                    </ul>
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

            <!-- Major Services -->
            <div class="mb-6">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#FF6D00]/20 text-[#FF6D00] text-xs font-bold rounded-full uppercase tracking-wide mb-6">
                    <i class='bx bx-star text-sm'></i>
                    Major Services
                </span>
            </div>
            <div class="grid md:grid-cols-3 gap-6 mb-12">
                <!-- School Management System -->
                <div class="relative bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 flex flex-col">
                    <span class="absolute top-4 right-4 inline-flex items-center gap-1 px-2 py-0.5 bg-[#1A1A1A] text-white text-xs font-semibold rounded-full">
                        <i class='bx bx-building-house text-xs'></i>
                        In-house
                    </span>
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-5">
                        <i class='bx bx-book-reader text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">School Management System</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed flex-1">
                        A comprehensive platform for schools — student records, academic tracking, attendance, timetables, and parent-teacher communication. Works offline-first for all connectivity environments.
                    </p>
                    <a href="https://schoolms.aloflux.com/" target="_blank" class="text-[#FF6D00] font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Visit Platform
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Versefountain -->
                <div class="relative bg-[#FF6D00] rounded-xl p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 flex flex-col">
                    <span class="absolute top-4 right-4 inline-flex items-center gap-1 px-2 py-0.5 bg-[#1A1A1A] text-white text-xs font-semibold rounded-full">
                        <i class='bx bx-building-house text-xs'></i>
                        In-house
                    </span>
                    <div class="w-14 h-14 bg-white/20 rounded-lg flex items-center justify-center mb-5">
                        <i class='bx bx-pen text-4xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Versefountain</h3>
                    <p class="text-white/90 mb-6 text-sm leading-relaxed flex-1">
                        A vibrant platform for creatives, writers, readers, and poets to share their work, discover new content, and connect with a community of literary enthusiasts.
                    </p>
                    <a href="https://versefountain.com" target="_blank" class="font-semibold text-sm text-white inline-flex items-center gap-1 hover:gap-2 transition-all hover:underline">
                        Visit Platform
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Software Development -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 flex flex-col">
                    <div class="w-14 h-14 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center mb-5">
                        <i class='bx bx-code-alt text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Software Development</h3>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed flex-1">
                        End-to-end custom software development tailored to your business. From MVPs to enterprise-grade systems — web, mobile, and desktop — built with an offline-first approach.
                    </p>
                    <a href="/#contact" class="text-[#1A1A1A] font-semibold text-sm inline-flex items-center gap-1 hover:text-[#FF6D00] transition-colors">
                        Get a Quote
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>
            </div>

            <!-- Other Services -->
            <div class="mb-6">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/10 text-gray-300 text-xs font-bold rounded-full uppercase tracking-wide mb-6">
                    <i class='bx bx-grid-alt text-sm'></i>
                    Other Services
                </span>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-brain text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">AI Solutions</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Custom AI models, predictive analytics, and intelligent process automation.</p>
                    <a href="/services/ai-solutions" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-shield text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">Offline-First Dev</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Software that syncs when connectivity returns, keeping your business running.</p>
                    <a href="/services/offline-first-development" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-transfer text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">Systems Integration</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Connect legacy systems with modern applications and third-party APIs.</p>
                    <a href="/services/systems-integration" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-cog text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">Enterprise Automation</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Automate workflows, approvals, and operations for SMEs.</p>
                    <a href="/services/enterprise-automation" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-line-chart text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">Marketing</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Data-driven digital marketing to grow your brand and reach.</p>
                    <a href="/services/marketing" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-edit text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">Content Marketing</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Engaging content strategies that build trust and brand authority.</p>
                    <a href="/services/content-marketing" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-share-alt text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">Social Media</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Targeted campaigns and community management across all platforms.</p>
                    <a href="/services/social-media-marketing" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-lg p-5 hover:border-[#FF6D00]/50 hover:bg-white/10 transition-all">
                    <div class="w-10 h-10 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-search-alt text-2xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-base font-bold text-white mb-2">SEO</h3>
                    <p class="text-gray-400 text-xs leading-relaxed mb-3">Improve search rankings and drive organic traffic with data-driven strategies.</p>
                    <a href="/services/search-engine-optimization" class="text-[#FF6D00] font-semibold text-xs inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Learn more <i class='bx bx-right-arrow-alt'></i>
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
                        'inhouse' => true,
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
                        'inhouse' => true,
                    ],
                ];
            @endphp

            <div class="grid md:grid-cols-2 gap-8">
                @foreach ($projects as $project)
                    <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-lg hover:shadow-xl transition-all hover:-translate-y-1 group">
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-4">
                                <div class="w-12 h-12 bg-[#FF6D00]/10 rounded-lg flex items-center justify-center">
                                    <i class='bx {{ $project['icon'] }} text-3xl text-[#FF6D00]'></i>
                                </div>
                                @if (!empty($project['inhouse']))
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-[#1A1A1A] text-white text-xs font-semibold rounded-full">
                                        <i class='bx bx-building-house text-sm'></i>
                                        In-house Project
                                    </span>
                                @endif
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

            <!-- In-house products callout -->
            <div class="mt-12 rounded-xl bg-[#1A1A1A] px-8 py-8 md:px-12 md:py-10 flex flex-col md:flex-row items-start md:items-center gap-6">
                <div class="flex-shrink-0 w-12 h-12 bg-[#FF6D00]/20 rounded-lg flex items-center justify-center">
                    <i class='bx bx-package text-3xl text-[#FF6D00]'></i>
                </div>
                <div class="flex-1">
                    <h3 class="text-white text-xl font-bold mb-1">Beyond Services — Our Own Products</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        In addition to building solutions for clients, Aloflux develops and maintains proprietary products
                        that businesses and individuals can adopt directly. These in-house products are available
                        <span class="text-white font-medium">as a service (SaaS)</span>, meaning you get a ready-made,
                        continuously improved platform for a simple subscription or usage fee — no lengthy build cycle required.
                    </p>
                </div>
                <a href="#contact" class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-3 bg-[#FF6D00] text-white text-sm font-semibold rounded-lg hover:bg-[#e56200] transition-colors">
                    Enquire Now
                    <i class='bx bx-right-arrow-alt text-lg'></i>
                </a>
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
                            Your project inquiry was sent successfully. We will get back to you shortly.
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="bg-red-50 text-red-700 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in" id="error-alert">
                            Failed to send your inquiry. Please try again.
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="bg-red-50 text-red-700 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in">
                            Please fill in all required fields correctly.
                        </div>
                    @endif

                    {{-- Contact Info --}}
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name <span class="text-[#FF6D00]">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="John Smith"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address <span class="text-[#FF6D00]">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="john@company.com"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                        </div>
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">Company / Organisation</label>
                        <input type="text" id="company" name="company" value="{{ old('company') }}" placeholder="Your company name"
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200">
                    </div>

                    {{-- Project Details --}}
                    <div class="border-t border-gray-200 pt-6">
                        <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-5">Project Details</p>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="project_type" class="block text-sm font-semibold text-gray-700 mb-2">Project Type <span class="text-[#FF6D00]">*</span></label>
                                <select id="project_type" name="project_type" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200 appearance-none">
                                    <option value="" disabled {{ old('project_type') ? '' : 'selected' }}>Select a service</option>
                                    <option value="Custom Software Development" {{ old('project_type') === 'Custom Software Development' ? 'selected' : '' }}>Custom Software Development</option>
                                    <option value="Enterprise Automation" {{ old('project_type') === 'Enterprise Automation' ? 'selected' : '' }}>Enterprise Automation</option>
                                    <option value="AI Powered SaaS Solution" {{ old('project_type') === 'AI Powered SaaS Solution' ? 'selected' : '' }}>AI Powered SaaS Solution</option>
                                    <option value="Digital Commerce Infrastructure" {{ old('project_type') === 'Digital Commerce Infrastructure' ? 'selected' : '' }}>Digital Commerce Infrastructure</option>
                                    <option value="Systems Integration" {{ old('project_type') === 'Systems Integration' ? 'selected' : '' }}>Systems Integration</option>
                                    <option value="IT Managed Services" {{ old('project_type') === 'IT Managed Services' ? 'selected' : '' }}>IT Managed Services</option>
                                    <option value="School Management System" {{ old('project_type') === 'School Management System' ? 'selected' : '' }}>School Management System</option>
                                    <option value="Marketing or SEO" {{ old('project_type') === 'Marketing or SEO' ? 'selected' : '' }}>Marketing or SEO</option>
                                    <option value="Other" {{ old('project_type') === 'Other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>

                            <div>
                                <label for="proposed_budget" class="block text-sm font-semibold text-gray-700 mb-2">Proposed Budget <span class="text-[#FF6D00]">*</span></label>
                                <select id="proposed_budget" name="proposed_budget" required
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200 appearance-none">
                                    <option value="" disabled {{ old('proposed_budget') ? '' : 'selected' }}>Select a range</option>
                                    <option value="Discovery Sprint ($1,500 to $3,000)" {{ old('proposed_budget') === 'Discovery Sprint ($1,500 to $3,000)' ? 'selected' : '' }}>Discovery Sprint ($1,500 to $3,000)</option>
                                    <option value="$3,000 to $8,000" {{ old('proposed_budget') === '$3,000 to $8,000' ? 'selected' : '' }}>$3,000 to $8,000</option>
                                    <option value="$8,000 to $25,000" {{ old('proposed_budget') === '$8,000 to $25,000' ? 'selected' : '' }}>$8,000 to $25,000</option>
                                    <option value="$25,000 to $50,000" {{ old('proposed_budget') === '$25,000 to $50,000' ? 'selected' : '' }}>$25,000 to $50,000</option>
                                    <option value="$50,000 or above" {{ old('proposed_budget') === '$50,000 or above' ? 'selected' : '' }}>$50,000 or above</option>
                                    <option value="Monthly Retainer (ongoing)" {{ old('proposed_budget') === 'Monthly Retainer (ongoing)' ? 'selected' : '' }}>Monthly Retainer (ongoing)</option>
                                    <option value="Not sure yet" {{ old('proposed_budget') === 'Not sure yet' ? 'selected' : '' }}>Not sure yet</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="project_description" class="block text-sm font-semibold text-gray-700 mb-2">Project Description <span class="text-[#FF6D00]">*</span></label>
                        <textarea id="project_description" name="project_description" rows="6" required
                            placeholder="Describe what you are looking to build or solve. Include any relevant context, existing systems, timelines, or constraints."
                            class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-white text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-0 focus:border-[#FF6D00]/50 transition-all duration-200 resize-none">{{ old('project_description') }}</textarea>
                    </div>

                    <button type="submit"
                        class="w-full px-8 py-4 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-[#E55A00] transition-colors shadow-lg">
                        Send Project Inquiry
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
