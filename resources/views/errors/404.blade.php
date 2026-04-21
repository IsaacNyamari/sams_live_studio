@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message')
    {{-- simple tailwind not found section --}}
    <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-lg overflow-hidden">
            <div class="text-center">
                <img src="{{ asset('images/404.png') }}" alt="404 error" class="mb-2 w-450 h-450 object-contain" />
                <p class="mt-4 text-lg text-gray-600">
                    Oops! The page you are looking for could not be found.
                </p>
                <a href="javascript:history.back()" class="mt-1 inline-flex items-center justify-center px-5 py-3 bg-blue-600 text-white rounded-full text-sm font-semibold hover:bg-blue-700">
                    Go Back
                </a>
            </div>
        </div>
    </div>
@endsection
