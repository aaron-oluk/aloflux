@extends('layouts.app')

@section('title', 'About Aloflux - Custom Software, Automation and AI Solutions')
@section('meta_description', 'Aloflux is a technology company building custom software, enterprise automation, and AI powered solutions for US and European businesses. Learn about our mission, values, and approach.')
@section('og_title', 'About Aloflux')
@section('og_description', 'We build custom software, enterprise automation, and AI powered solutions for US and European businesses. High quality engineering at competitive rates.')

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "AboutPage",
    "name": "About Aloflux LLC",
    "description": "Aloflux is a technology company building custom software, enterprise automation, and AI powered solutions for US and European businesses.",
    "url": "{{ url('/about') }}",
    "publisher": {
        "@@type": "Organization",
        "name": "Aloflux LLC",
        "url": "{{ url('/') }}"
    }
}
</script>
@endsection

@php $activePage = 'about'; @endphp

@section('content')
    <!-- Page Header -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-[#1A1A1A]">
        <div class="max-w-7xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 text-[#FF6D00] text-base font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-check-circle text-xl'></i>
                <span>About Us</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                Who We Are
            </h1>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                We are a technology company dedicated to building custom software, enterprise automation, and AI powered solutions for businesses across the US and Europe.
            </p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Our Mission
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Aloflux is a technology company focused on building custom software, enterprise automation, AI powered SaaS solutions, and digital commerce infrastructure for US and European SMEs, startups, and NGOs.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        We are committed to delivering exceptional engineering quality at competitive rates, with a team that communicates clearly and takes full ownership of outcomes. Our clients get more than code — they get a dependable technology partner.
                    </p>

                    <ul class="space-y-3">
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
                        <li class="flex items-start gap-3">
                            <i class='bx bx-check-circle text-xl text-[#FF6D00] mt-0.5 shrink-0'></i>
                            <span class="text-gray-700">IT managed services for CONSENT, FoSCU, and other organisations</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Aloflux?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    We combine deep technical expertise with a focus on quality, communication, and long-term partnership.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-8 shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-flag text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">US-Registered Entity</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Aloflux LLC is incorporated in Delaware. Contracts, payments, and legal jurisdiction are structured for US and international clients, giving you the familiarity and protection you expect.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-8 shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-code-alt text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Technical Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our experienced engineers deliver high quality, scalable, and maintainable software across web, mobile, and enterprise systems, built to last and easy to hand over.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-8 shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-dollar-circle text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Competitive Pricing</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We deliver senior level engineering at rates that are significantly more competitive than most Western or Eastern European alternatives, without compromising on output quality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-[#FF6D00]">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Work With Us?
            </h2>
            <p class="text-lg text-white/90 mb-8">
                Let's discuss how our technology solutions can help transform your business.
            </p>
            <a href="/#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#1A1A1A] text-white rounded-lg font-semibold hover:bg-white hover:text-[#1A1A1A] transition-colors">
                Get In Touch
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div>
    </section>
@endsection
