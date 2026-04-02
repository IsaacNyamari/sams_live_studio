@extends('frontend')
@section('description')
    <meta name="description"
        content="Support {{ config('app.name') }} with your donation. Help us acquire professional cameras, audio gear, and production equipment to elevate our live streaming studio in Kenya.">
@endsection
@section('keywords')
    <meta name="keywords"
        content="Donate to {{ config('app.name') }}, support live streaming, Kenya production studio, professional equipment, 4K cameras, audio gear, studio upgrades">
@endsection
@section('featured_image')
    <meta property="og:image" content="{{ asset('images/support/donate.jpeg') }}" />
@endsection
@section('content')
    <div>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

            * {
                font-family: "Poppins", sans-serif;
            }
        </style>

        <!-- Hero Section -->
        <section
            class="bg-[#000080]/80 mb-5 mt-2 rounded-2xl bg-[url(https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop)] bg-blend-overlay bg-no-repeat bg-cover py-20 px-4 md:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Support {{ config('app.name') }}</h1>
                <p class="text-white text-lg max-w-3xl mx-auto">Your donation helps us acquire professional cameras,
                    audio equipment, and production gear to elevate our studio capabilities.</p>
            </div>
        </section>
        <!-- Equipment Goal Progress -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <livewire:donation-progress />
        </section>
        <!-- Donation Impact -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-white mb-4">How Your Support Helps</h2>
                <p class="text-gray-200 max-w-3xl mx-auto mb-12">Every contribution goes directly toward purchasing
                    professional equipment and building {{ config('app.name') }} into Kenya's premier live production
                    facility.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-black/40 backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold text-[#FF8F20] mb-2">4K Cameras</div>
                        <p class="text-white">Professional cinema cameras for broadcast-quality production</p>
                    </div>
                    <div class="bg-black/40 backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold text-[#FF8F20] mb-2">Audio Gear</div>
                        <p class="text-white">Industry-standard microphones, mixers, and recording equipment</p>
                    </div>
                    <div class="bg-black/40 backdrop-blur rounded-2xl p-6">
                        <div class="text-4xl font-bold text-[#FF8F20] mb-2">Studio Upgrades</div>
                        <p class="text-white">Acoustic treatment, lighting, and live production infrastructure</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Donation Options -->
        <section id="donation-form" class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-white text-center mb-8">Support {{ config('app.name') }}</h2>

                <div class="grid md:grid-cols-2 gap-8 items-stretch">
                    <!-- Form Section - Left -->
                    <div class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20">
                        @if (!Auth::user())
                            <div class="mb-2">
                                <livewire:register-user-on-payment />
                            </div>
                        @else
                            <div id="donation-form">
                                <livewire:donation-page-form />
                            </div>
                        @endif
                    </div>

                    <!-- Image Section - Right -->
                    <div class="relative rounded-2xl overflow-hidden min-h-[300px] md:min-h-full">
                        <img src="{{ asset('images/support/goal.jpeg') }}" alt="Support and Donation"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t  to-transparent flex flex-col justify-end p-6">
                            <h3 class="text-white text-2xl font-bold mb-2">Make a Difference Today</h3>
                            <p class="text-white/90 text-sm">Your support helps us get essential studio equipments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Other Ways to Support -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-white text-center mb-12">Other Ways to Support
                    {{ config('app.name') }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center p-6 bg-black/40 backdrop-blur rounded-2xl">
                        <div class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M20 12H4M12 4v16" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Equipment Donation</h3>
                        <p class="text-gray-300">Donate cameras, microphones, lighting, or recording equipment to expand
                            our studio capabilities.</p>
                    </div>
                    <div class="text-center p-6 bg-black/40 backdrop-blur rounded-2xl">
                        <div class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path
                                    d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Technical Expertise</h3>
                        <p class="text-gray-300">Share your skills in audio engineering, video production, or studio
                            setup to help us grow.</p>
                    </div>
                    <div class="text-center p-6 bg-black/40 backdrop-blur rounded-2xl">
                        <div class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                <polyline points="22,6 12,13 2,6" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Corporate Sponsorship</h3>
                        <p class="text-gray-300">Partner with us to sponsor specific equipment purchases and receive
                            recognition across our platforms.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
