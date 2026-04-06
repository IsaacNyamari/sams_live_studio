@extends('frontend')
@section('content')
    {{-- this is the academy page --}}
@section('description')
    <meta name="description"
        content="Join {{ config('app.name') }} Academy and discover why we're the leading choice for live production and streaming training in East Africa.">
@endsection
@section('keywords')
    <meta name="keywords"
        content="{{ config('app.name') }} academy, join academy, live production training, streaming courses, media education, broadcast training, content creator academy">
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
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Join {{ config('app.name') }} Academy</h1>
            <p class="text-white text-lg max-w-3xl mx-auto">Transform your passion into a profession with East Africa's premier live production and streaming academy.</p>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="max-w-7xl mx-auto px-4 md:px-8 mb-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#000080] dark:text-white mb-4">Why Choose {{ config('app.name') }} Academy?</h2>
            <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto">We provide the skills, knowledge, and hands-on experience you need to succeed in the live production industry.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Benefit 1 -->
            <div class="text-center p-6 border rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-[#FF8F20]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#FF8F20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#000080] dark:text-white mb-3">Industry-Leading Equipment</h3>
                <p class="text-gray-600 dark:text-gray-300">Train on professional-grade broadcast cameras, switchers, audio consoles, and streaming encoders used by top production companies.</p>
            </div>

            <!-- Benefit 2 -->
            <div class="text-center p-6 border rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-[#FF8F20]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#FF8F20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#000080] dark:text-white mb-3">Expert Instructors</h3>
                <p class="text-gray-600 dark:text-gray-300">Learn from industry professionals with years of live production and streaming experience across East Africa.</p>
            </div>

            <!-- Benefit 3 -->
            <div class="text-center p-6 border rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-[#FF8F20]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#FF8F20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#000080] dark:text-white mb-3">Hands-On Experience</h3>
                <p class="text-gray-600 dark:text-gray-300">Work on real productions, live events, and streaming projects that build your portfolio and confidence.</p>
            </div>

            <!-- Benefit 4 -->
            <div class="text-center p-6 border rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-[#FF8F20]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#FF8F20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#000080] dark:text-white mb-3">Certification</h3>
                <p class="text-gray-600 dark:text-gray-300">Earn industry-recognized certificates that validate your skills and enhance your career opportunities.</p>
            </div>

            <!-- Benefit 5 -->
            <div class="text-center p-6 border rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-[#FF8F20]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#FF8F20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#000080] dark:text-white mb-3">Job Placement Support</h3>
                <p class="text-gray-600 dark:text-gray-300">Access our network of media partners and production companies looking for trained professionals.</p>
            </div>

            <!-- Benefit 6 -->
            <div class="text-center p-6 border rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-[#FF8F20]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-[#FF8F20]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-[#000080] dark:text-white mb-3">Flexible Learning</h3>
                <p class="text-gray-600 dark:text-gray-300">Choose from weekend classes, evening sessions, or intensive workshops that fit your schedule.</p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="max-w-7xl mx-auto px-4 md:px-8 mb-10">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-[#000080]/5 to-transparent p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-[#000080] dark:text-white mb-4">Our Mission</h2>
                <p class="dark:text-white text-gray-700">To empower East African content creators and businesses with
                    cutting-edge live production and streaming solutions, fostering creativity, innovation, and global connectivity through {{ config('app.name') }} Academy.</p>
            </div>
            <div class="bg-gradient-to-br from-[#000080]/5 to-transparent p-6 rounded-lg">
                <h2 class="text-2xl font-semibold text-[#000080] dark:text-white mb-4">Our Vision</h2>
                <p class="dark:text-white text-gray-700">To be the leading live production and streaming facility in
                    Africa, recognized for excellence, innovation, and transformative impact on the media landscape through our academy graduates.</p>
            </div>
        </div>
    </section>
    {{-- gallery of what we do --}}
    <section class="max-w-7xl mx-auto px-4 md:px-8 mb-10">
        @php
            $galleries = \App\Models\Gallery::paginate(6);
        @endphp
        <h2 class="text-2xl font-semibold dark:text-white text-[#000080] mb-2 mt-4">Student & Graduate Work</h2>
        <p class="text-gray-600 dark:text-gray-300 mb-6">See what our students have accomplished at {{ config('app.name') }} Academy</p>
        <div class="grid md:grid-cols-3 gap-8">
            @forelse ($galleries as $gallery)
                <div class="border rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow">
                    <img src="{{ asset($gallery->image_path) }}" alt="{{ $gallery->title }}"
                        class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold mb-2">{{ $gallery->title }}</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ $gallery->description }}</p>
                </div>

            @empty
                {{-- nice ui for empty state --}}
                <div class="col-span-3 text-center py-10">
                    <h3 class="text-2xl font-semibold text-gray-700 dark:text-gray300 mb-4">No gallery items found.</h3>
                    <p class="text-gray-500 dark:text-gray-400 mb-6">Check back later to see our students' latest work and
                        projects.</p>
                </div>
            @endforelse

        </div>
        {{ $galleries->links() }}
    </section>
</div>
@endsection