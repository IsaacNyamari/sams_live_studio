@extends('frontend')
@section('content')
    {{-- this is the academy page --}}
@section('description')
    <meta name="description"
        content="Learn about our academy and the comprehensive training programs we offer in live production and streaming.">
@endsection
@section('keywords')
    <meta name="keywords"
        content="academy, training, live production, streaming, education, courses, workshops, media training, broadcast training">
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
            <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">{{ config('app.name') }} Academy</h1>
            <p class="text-white text-lg max-w-3xl mx-auto">Discover our comprehensive training programs in live
                production and streaming.</p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="max-w-6xl mx-auto px-4 md:px-8 mb-10">
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-semibold dark:text-white text-[#000080] mb-4">Our Mission</h2>
                <p class="dark:text-white text-gray-700">To empower East African content creators and businesses with
                    cutting-edge live production and streaming
                    solutions, fostering creativity, innovation, and global connectivity.</p>
            </div>
            <div>
                <h2 class="text-2xl font-semibold dark:text-white text-[#000080] mb-4">Our Vision</h2>
                <p class="dark:text-white text-gray-700">To be the leading live production and streaming facility in
                    Africa, recognized for excellence, innovation, and transformative impact on the media landscape.</p>
            </div>
        </div>
    </section>
    {{-- gallery of what we do --}}
    <section class="max-w-6xl mx-auto px-4 md:px-8 mb-10">
        <h2 class="text-2xl font-semibold dark:text-white text-[#000080] mb-2 mt-4">Our Work</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="border rounded-lg shadow-md p-6">
                <img src="{{ asset('images/logos/sams_logo.png') }}" alt="Live Production"
                    class="w-full h-48 object-cover rounded-md mb-4">
            </div>
            <div class="border rounded-lg shadow-md p-6">
                <img src="{{ asset('images/logos/sams_logo.png') }}" alt="Streaming"
                    class="w-full h-48 object-cover rounded-md mb-4">
            </div>
            <div class="border rounded-lg shadow-md p-6">
                <img src="{{ asset('images/logos/sams_logo.png') }}" alt="Broadcast Solutions"
                    class="w-full h-48 object-cover rounded-md mb-4">
            </div>
        </div>
    </section>
</div>
@endsection
