@extends('frontend')
@section('description')
    <meta name="description" content="Book a session at {{ config('app.name') }}. Reserve your spot for our live streaming events and productions.">
@endsection
@section('keywords')
    <meta name="keywords" content="Book session, {{ config('app.name') }}, live streaming, events, productions">
@endsection
@section('featured_image')
    <meta property="og:image" content="{{ asset('images/booking/booking.jpg') }}" />
@endsection
@section('content')
    
    <livewire:session-booking />
@endsection
