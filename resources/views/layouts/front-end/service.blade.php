@extends('frontend')
@section('content')
@section('description')
    <meta name="description"
        content="Explore our comprehensive live production and streaming services for events, conferences, and more.">
@endsection
@section('keywords')
    <meta name="keywords"
        content="Live production services, streaming solutions, event production, conference streaming, media production, live video recording, photography studios, audio recording, TV broadcasting">
@endsection
@section('featured_image')
    <meta property="og:image" content="{{ asset('images/services/service.png') }}" />
@endsection
<div>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

        * {
            font-family: "Poppins", sans-serif;
        }
    </style>

    <!-- Hero Section -->
    <section
        class="bg-[#021F59] mb-5 mt-2 rounded-2xl bg-[url(https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop)] bg-blend-overlay bg-no-repeat bg-cover py-20 px-4 md:px-8">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Our Services</h1>
            <p class="text-white text-lg max-w-3xl mx-auto">Comprehensive live production and streaming solutions for
                every need.</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-16 px-4 bg-[#021F59]">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Events Category -->
                <div
                    class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                    <div class="w-16 h-16 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="#FF8F20" stroke-width="1.5">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                            <path d="M8 14h.01"></path>
                            <path d="M12 14h.01"></path>
                            <path d="M16 14h.01"></path>
                            <path d="M8 18h.01"></path>
                            <path d="M12 18h.01"></path>
                            <path d="M16 18h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Events</h3>
                    <p class="text-gray-300 mb-4">Complete event production and management services for all
                        occasions.</p>
                    <ul class="text-gray-400 text-sm space-y-1">
                        <li>✓ Wedding venue & booking</li>
                        <li>✓ Live wedding concerts</li>
                        <li>✓ Wedding expenses management</li>
                        <li>✓ Band rehearsals (chill group)</li>
                        <li>✓ Conferences & corporate events</li>
                    </ul>
                    <p class="text-[#FF8F20] font-semibold mt-4">Custom pricing</p>
                </div>

                <!-- Production Category -->
                <div
                    class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                    <div class="w-16 h-16 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="#FF8F20" stroke-width="1.5">
                            <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                            <path d="M8 12h8"></path>
                            <path d="M12 8v8"></path>
                            <circle cx="12" cy="12" r="2"></circle>
                            <path d="M22 10v4"></path>
                            <path d="M2 10v4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Production</h3>
                    <p class="text-gray-300 mb-4">High-quality production services for all your media needs.</p>
                    <ul class="text-gray-400 text-sm space-y-1">
                        <li>✓ Live video recording & streaming</li>
                        <li>✓ Photography studios</li>
                        <li>✓ Audio recording</li>
                        <li>✓ Podcasts and interviews</li>
                        <li>✓ TV broadcasting</li>
                    </ul>
                    <p class="text-[#FF8F20] font-semibold mt-4">From KES 8,000/hour</p>
                </div>

                <!-- Academy Category -->
                <div
                    class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                    <div class="w-16 h-16 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="#FF8F20" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                            <path d="M12 7v10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Academy</h3>
                    <p class="text-gray-300 mb-4">Training and development programs for aspiring creatives.</p>
                    <ul class="text-gray-400 text-sm space-y-1">
                        <li>✓ Video academy</li>
                        <li>✓ Photography & videography academy</li>
                        <li>✓ Talent search & additions</li>
                    </ul>
                    <p class="text-[#FF8F20] font-semibold mt-4">Inquire for fees</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Service Sections -->
    <section class="py-16 px-4 bg-[#021F59]">
        <div class="max-w-6xl mx-auto">
            <!-- Events Detailed -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-white text-center mb-12">Events Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Wedding Venue & Booking</h3>
                        <p class="text-gray-300">Exclusive wedding venues and seamless booking coordination for your
                            special day.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M9 18V5l12-2v13"></path>
                                <circle cx="6" cy="18" r="3"></circle>
                                <circle cx="18" cy="16" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Live Wedding Concerts</h3>
                        <p class="text-gray-300">Live musical performances and concert experiences for
                            unforgettable wedding celebrations.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path
                                    d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83">
                                </path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Wedding Expenses</h3>
                        <p class="text-gray-300">Comprehensive budget management and expense tracking for your
                            wedding planning.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                                <path d="M8 12h8"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Band Rehearsals (Chill Group)</h3>
                        <p class="text-gray-300">Professional rehearsal spaces and equipment for bands and musical
                            groups.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Conferences & Corporate Events</h3>
                        <p class="text-gray-300">Full-scale conference and corporate event production with AV
                            support.</p>
                    </div>
                </div>
            </div>

            <!-- Production Detailed -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold text-white text-center mb-12">Production Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                                <path d="M8 12h8"></path>
                                <path d="M12 8v8"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Live Video Recording / Streaming</h3>
                        <p class="text-gray-300">Professional multi-camera live recording and streaming to major
                            platforms.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <rect x="2" y="2" width="20" height="20" rx="2.18"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <path d="M21 15l-5-4-3 3-4-4-5 5"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Photography Studios</h3>
                        <p class="text-gray-300">Fully equipped photography studios with professional lighting and
                            backdrops.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3z"></path>
                                <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                <line x1="12" y1="19" x2="12" y2="22"></line>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Audio Recording</h3>
                        <p class="text-gray-300">State-of-the-art audio recording studios with professional
                            engineers.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <path d="M12 22V12"></path>
                                <path d="M9 10.5 12 8l3 2.5"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Podcasts and Interviews</h3>
                        <p class="text-gray-300">Complete podcast production with video and audio recording
                            capabilities.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20 hover:border-[#FF8F20] transition">
                        <div class="w-12 h-12 bg-[#FF8F20]/20 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                <path d="M9 8h6"></path>
                                <path d="M9 12h6"></path>
                                <path d="M9 16h6"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">TV Broadcasting</h3>
                        <p class="text-gray-300">Professional TV broadcast production with full studio setup and
                            transmission.</p>
                    </div>
                </div>
            </div>

            <!-- Academy Detailed -->
            <div>
                <h2 class="text-3xl font-bold text-white text-center mb-12">Academy Programs</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20 text-center hover:border-[#FF8F20] transition">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2">
                                </rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Video Academy</h3>
                        <p class="text-gray-300">Comprehensive training in video production, editing, and
                            storytelling techniques.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20 text-center hover:border-[#FF8F20] transition">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <rect x="2" y="2" width="20" height="20" rx="2.18"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <path d="M21 15l-5-4-3 3-4-4-5 5"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Photography / Videography Academy</h3>
                        <p class="text-gray-300">Hands-on courses covering camera techniques, lighting,
                            composition, and post-production.</p>
                    </div>
                    <div
                        class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20 text-center hover:border-[#FF8F20] transition">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                                <path d="M17 11h4"></path>
                                <path d="M19 9v4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">Talent Search / Additions</h3>
                        <p class="text-gray-300">Discover and nurture new talent through auditions, workshops, and
                            industry connections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Studio Packages -->
    <section class="py-16 px-4 bg-[#021F59]">
        <div class="max-w-6xl mx-auto p-2">
            <h2 class="text-3xl font-bold text-white text-center mb-12">Studio Packages</h2>
            <livewire:package-ui />
        </div>
    </section>
</div>
@endsection
