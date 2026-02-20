@extends('layouts.app')

@section('title', 'About Us - Aloflux')
@section('meta_description', 'About Aloflux - Technology solutions for African markets. Learn about our mission, vision, and the team behind our innovative solutions.')

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
                We are a technology company dedicated to creating innovative software solutions for African markets.
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
                        Aloflux is a technology company dedicated to creating innovative software solutions that address the unique challenges faced by businesses in African markets. We understand that connectivity can be unreliable, and we build our solutions with this reality in mind.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Our mission is to empower small and medium enterprises across Africa with technology that works everywhere — online or offline. We believe that every business deserves access to world-class digital tools, regardless of their connectivity situation.
                    </p>

                    <!-- Progress Bars -->
                    <div class="space-y-6">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">School Management System</span>
                                <span class="text-gray-600 font-semibold">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">Versefountain (Creative Platform)</span>
                                <span class="text-gray-600 font-semibold">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-700 font-semibold">Custom Software Development</span>
                                <span class="text-gray-600 font-semibold">92%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-[#FF6D00] h-3 rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                    </div>
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
                    We combine deep technical expertise with an understanding of African markets to deliver solutions that truly work.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-8 shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-globe text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">African Market Focus</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our solutions are built from the ground up for the realities of African business environments, including low-connectivity areas.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-8 shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-code-alt text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Technical Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Our team of experienced engineers delivers high-quality, scalable, and maintainable software solutions.
                    </p>
                </div>
                <div class="bg-white rounded-lg p-8 shadow-lg text-center">
                    <div class="w-16 h-16 bg-[#FF6D00]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-support text-4xl text-[#FF6D00]'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Dedicated Support</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We provide ongoing support and maintenance to ensure your solutions continue to deliver value long after launch.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistics - commented out
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
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
        </div>
    </section>
    --}}

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
