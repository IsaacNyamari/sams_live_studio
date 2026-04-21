@extends('frontend')
@section('content')
    <div class="card border-0 my-5 shadow-sm rounded-4 overflow-hidden" style="max-width: 800px; margin: 0 auto;">
        <!-- Cover Photo -->
        <div class="position-relative">
            <img src="{{ asset($user->cover_image) ?? 'https://placehold.co/1200x300/1877f2/white?text=Cover+Photo' }}"
                alt="Cover" class="img-fluid w-100" style="height: 200px; object-fit: cover;">

            <!-- Profile Photo (overlapping cover) -->
            <div class="position-absolute translate-middle bg-white rounded-circle p-1" style="bottom: -70px; left: 60px;">
                <img src="{{ asset($user->profile_image) ?? 'https://placehold.co/120x120/ccc/white?text=Photo' }}"
                    alt="Profile" class="rounded-circle" style=" width:80px; height:80px; object-fit: cover;">
            </div>
        </div>

        <!-- Profile Info Section -->
        <div class="card-body pt-5 pb-3 px-4">
            <div class="d-flex flex-column">
                <h2 class="fw-bold mb-0">{{ $user->name }}</h2>
                <p class="text-secondary mb-2">{{ $user->email }}</p>

                <!-- Simple Details (like Facebook bio/meta) -->
                <div class="d-flex flex-wrap gap-3 mt-2 text-secondary small">
                    <span><i class="bi bi-briefcase-fill me-1 text-capitalize"></i>
                        {{ $user->roles()->first()->name }}</span>
                    <span><i class="bi bi-calendar-fill me-1"></i>{{ $user->created_at->diffForHumans() }}</span>
                </div>
                {{-- add call button --}}
                <div class="mt-3">
                    <a href="tel:{{ $user->phone }}" class="btn btn-primary btn-sm"><i
                            class="bi bi-telephone-fill me-1"></i> Call </a>
                </div>

            </div>
        </div>
    </div>
    {{-- https://placehold.co/1200x300/1877f2/white?text=Cover+Photo --}}
@endsection
