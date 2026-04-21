@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message')
    <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 p-8">
        <div class="max-w-md w-full bg-white rounded-3xl shadow-lg overflow-hidden">
            <div class="text-center">
                <img src="{{ asset('images/server-error.png') }}" style="width: 250px !important" alt="500 error"
                    class="mb-2 w-28 h-2w-28 object-contain" />
                <p class="mt-4 text-lg text-gray-600">
                    Oops! Something went wrong on our end. Please try again later.
                </p>
                <a href="{{ url('/') }}"
                    class="mt-1 inline-flex items-center justify-center px-5 py-3 bg-blue-600 text-white rounded-full text-sm font-semibold hover:bg-blue-700">
                    Go to Homepage
                </a>
            </div>
        </div>
    </div>
@endsection