@extends('frontend')
@section('description')
    {{-- make this description very appealing since it's the first thing users see --}}
    <meta name="description"
        content="Welcome to {{ config('app.name') }}, Kenya's premier live production facility. Discover our state-of-the-art studios, professional streaming services, and expert team dedicated to delivering exceptional live video experiences. Explore our services, book a session, or support us with a donation to help us acquire top-tier equipment and elevate our production capabilities. Join us in creating unforgettable live events and broadcasts.">
@endsection
@section('keywords')
    {{-- add in kenya, in nairobi... --}}
    <meta name="keywords"
        content="Live Production, Streaming Services, Kenya, Premier Studio, Professional Video, Live Events, Broadcasts, Studio Rental, Event Production, Media Production, Live Streaming, Video Recording, Photography Studios, Audio Recording, TV Broadcasting, Studio Booking, Equipment Rental, Live Video Solutions, Studio Services, Live Event Production, Broadcast Solutions, Media Production Services, Live Streaming Studio, Video Production, Studio Facilities, Live Event Streaming, Broadcast Services, Media Production Facility, live recording near me, live recording in kenya, live recording in nairobi, photography studio near me, photography studio in kenya, photography studio in nairobi, audio recording near me, audio recording in kenya, audio recording in nairobi, tv broadcasting near me, tv broadcasting in kenya, tv broadcasting in nairobi">
@endsection
@section('content')
    <livewire:hero-section />
    <livewire:divider :title="__('Features')" :id="__('features')" />
    <livewire:feature-section />
    <livewire:divider :title="__('Testimonials')" :id="__('testimonials')" />
    <livewire:testimonials-section />
@endsection
