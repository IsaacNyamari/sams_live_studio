<x-layouts.front-end.app>
    @section('description')
        <meta name="description"
            content="Learn about {{ config('app.name') }}, Kenya's premier live production and streaming facility. Discover our story, mission, vision, leadership team, and state-of-the-art infrastructure that delivers world-class broadcast solutions across East Africa.">
    @endsection
    @section('keywords')
        <meta name="keywords"
            content="About {{ config('app.name') }}, Kenya live production, streaming facility, broadcast solutions, mission, vision, leadership team, infrastructure">
    @endsection
    @section('featured_image')
        <meta property="og:image" content="{{ asset('images/team/portrait.png') }}" />
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
            class="bg-[#000080]/80 mt-2 mb-5 rounded-2xl bg-[url(https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0)] bg-blend-overlay bg-no-repeat bg-cover py-20 px-4 md:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">About {{ config('app.name') }}</h1>
                <p class="text-white text-lg max-w-3xl mx-auto">Kenya's premier live production and streaming facility,
                    delivering world-class broadcast solutions since 2018.</p>
            </div>
        </section>

        <!-- Our Story -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-[#FF8F20] mb-4">Our Story</h2>
                    <p class="text-gray-200 mb-4 leading-relaxed">Founded by Samson Mutunga, a broadcast engineer with
                        over 5 years of experience in live television production, {{ config('app.name') }} was
                        established to provide professional broadcast infrastructure in Kenya.</p>
                    <p class="text-gray-200 mb-4 leading-relaxed">What started as a small recording space has grown into
                        a full-service live production facility equipped with state-of-the-art technology, serving
                        television networks, corporate clients, and event organizers across East Africa.</p>
                    <p class="text-gray-200 leading-relaxed">Today, {{ config('app.name') }} stands as a premier
                        production facility, recognized for technical excellence, professional infrastructure, and
                        broadcast-quality services.</p>
                </div>
                <div class="rounded-2xl overflow-hidden">
                    <img src="{{ asset('images/team/portrait.png') }}" alt="{{ config('app.name') }} Interior"
                        class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
                <div class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20">
                    <div class="text-[#FF8F20] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M12 2a10 10 0 0 0-10 10c0 5 4 8 10 8s10-3 10-8c0-5-4-8-10-8z" />
                            <path d="M12 6v6l4 2" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Our Mission</h3>
                    <p class="text-gray-200 leading-relaxed">To provide world-class live production and broadcast
                        infrastructure that meets the highest industry standards for television, corporate, and event
                        clients across East Africa.</p>
                </div>
                <div class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20">
                    <div class="text-[#FF8F20] mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 8v4l3 3" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Our Vision</h3>
                    <p class="text-gray-200 leading-relaxed">To be East Africa's leading broadcast production facility,
                        recognized for technical innovation, professional excellence, and reliable infrastructure.</p>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-[#FF8F20] text-center mb-12">Our Core Values</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-6">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                <polyline points="22 4 12 14.01 9 11.01" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Technical Excellence</h3>
                        <p class="text-gray-300">Delivering broadcast-quality production with industry-leading equipment
                            and expertise.</p>
                    </div>
                    <div class="text-center p-6">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path
                                    d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Innovation</h3>
                        <p class="text-gray-300">Continuously investing in cutting-edge technology to maintain industry
                            leadership.</p>
                    </div>
                    <div class="text-center p-6">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Reliability</h3>
                        <p class="text-gray-300">Delivering consistent, dependable service with professional
                            infrastructure and support.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Facility -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-[#FF8F20] text-center mb-12">Our Facility</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-black/40 backdrop-blur rounded-2xl p-6 text-center">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                <line x1="8" y1="21" x2="16" y2="21" />
                                <line x1="12" y1="17" x2="12" y2="21" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Professional Control Room</h3>
                        <p class="text-gray-300">Fully equipped broadcast control room with multi-camera switching and
                            live production capabilities.</p>
                    </div>
                    <div class="bg-black/40 backdrop-blur rounded-2xl p-6 text-center">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <circle cx="12" cy="12" r="10" />
                                <polygon points="10 8 16 12 10 16 10 8" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Sound Studio</h3>
                        <p class="text-gray-300">Acoustically treated recording space with professional audio equipment
                            and mixing capabilities.</p>
                    </div>
                    <div class="bg-black/40 backdrop-blur rounded-2xl p-6 text-center">
                        <div
                            class="w-16 h-16 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Production Suite</h3>
                        <p class="text-gray-300">Post-production facilities with editing, color grading, and mastering
                            capabilities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- The Team -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-[#FF8F20] text-center mb-12">Leadership Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <img src="{{ asset('images/team/samson_mutunga.png') }}" alt="Samson Mutunga"
                            class="w-40 h-40 rounded-full object-cover mx-auto mb-4 border-4 border-[#FF8F20]">
                        <h3 class="text-xl font-semibold text-white">Samson Mutunga</h3>
                        <p class="text-[#FF8F20] mb-2">Founder & Lead Producer</p>
                        <p class="text-gray-300 text-sm">Broadcast engineer with 5+ years in live production</p>
                    </div>
                    <div class="text-center">
                        <img src="{{ asset('images/team/isaac_nyamari.png') }}" alt="Isaac Nyamari"
                            class="w-40 h-40 rounded-full object-cover mx-auto mb-4 border-4 border-[#FF8F20]">
                        <h3 class="text-xl font-semibold text-white">Isaac Nyamari</h3>
                        <p class="text-[#FF8F20] mb-2">Technical Director</p>
                        <p class="text-gray-300 text-sm">Live streaming & broadcast operations specialist</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Equipment & Infrastructure -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-[#FF8F20] text-center mb-12">Our Infrastructure</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-4">
                        <div class="text-3xl font-bold text-white mb-2">4K</div>
                        <p class="text-gray-300 text-sm">Broadcast Cameras</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-3xl font-bold text-white mb-2">24/7</div>
                        <p class="text-gray-300 text-sm">Streaming Capability</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-3xl font-bold text-white mb-2">48ch</div>
                        <p class="text-gray-300 text-sm">Audio Mixing</p>
                    </div>
                    <div class="text-center p-4">
                        <div class="text-3xl font-bold text-white mb-2">6</div>
                        <p class="text-gray-300 text-sm">Camera Positions</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.front-end.app>
