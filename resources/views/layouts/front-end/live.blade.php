@extends('frontend')
@section('content')
    @if (!env('STREAMING_AVAILABLE') === 'false')
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
                    <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Watch our live broadcasts</h1>
                    <p class="text-white text-lg max-w-3xl mx-auto">Comprehensive live production and streaming solutions for
                        every need.</p>
                </div>
            </section>

            <!-- Streams Section -->
            <section class="py-16 px-4 bg-[#021F59]">
                <div class="max-w-6xl mx-auto">
                    @if (empty($streams) || $streams->isEmpty())
                        <!-- No Streams Available Message -->
                        <div class="text-center py-16 px-4">
                            <div class="max-w-md mx-auto">
                                <div
                                    class="w-24 h-24 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                        fill="none" stroke="#FF8F20" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                                        <path d="M8 12h8"></path>
                                        <path d="M12 8v8"></path>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-white mb-2">No Live Streams Available</h3>
                                <p class="text-gray-300 mb-6">There are currently no active live broadcasts. Check back
                                    later
                                    for upcoming streams!</p>
                                <div class="flex flex-col sm:flex-row gap-3 justify-center">
                                    <button onclick="window.location.reload()"
                                        class="bg-[#FF8F20] hover:bg-[#FF8F20]/90 text-gray-900 font-semibold px-6 py-2 rounded-lg transition inline-flex items-center justify-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        Refresh
                                    </button>
                                    <a href="#"
                                        class="border border-[#FF8F20] text-[#FF8F20] hover:bg-[#FF8F20]/10 font-semibold px-6 py-2 rounded-lg transition inline-flex items-center justify-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                        Check Later
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Streams Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach ($streams as $stream)
                                @continue(empty($stream))
                                <div
                                    class="bg-black/40 backdrop-blur rounded-2xl overflow-hidden border border-white/20 hover:border-[#FF8F20] transition group">

                                    <!-- Livepeer Embeddable Player - Only show if stream_url exists -->
                                    <div class="relative w-full" style="aspect-ratio: 16/9;">
                                        @if (!empty($stream->stream_url) && filter_var($stream->stream_url, FILTER_VALIDATE_URL))
                                            <iframe src="{{ $stream->stream_url }}" class="absolute inset-0 w-full h-full"
                                                allowfullscreen allow="encrypted-media; fullscreen; picture-in-picture"
                                                frameborder="0" loading="lazy">
                                            </iframe>
                                        @else
                                            <!-- Fallback when no valid stream URL -->
                                            <div
                                                class="absolute inset-0 w-full h-full bg-gradient-to-br from-gray-900 to-black flex items-center justify-center">
                                                <div class="text-center p-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                        viewBox="0 0 24 24" fill="none" stroke="#FF8F20"
                                                        stroke-width="1.5">
                                                        <rect x="2" y="6" width="20" height="12" rx="2">
                                                        </rect>
                                                        <path d="M8 12h8"></path>
                                                    </svg>
                                                    <p class="text-gray-400 text-sm mt-2">Stream unavailable</p>
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Live Badge -->
                                        @if (isset($stream->isActive) && $stream->isActive)
                                            <div class="absolute top-3 left-3 z-10">
                                                <span
                                                    class="bg-red-600 text-white text-xs font-bold px-2 py-1 rounded-full flex items-center gap-1 animate-pulse">
                                                    <span class="w-1.5 h-1.5 bg-white rounded-full"></span>
                                                    LIVE
                                                </span>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <h3 class="text-lg font-bold text-white truncate flex-1">
                                                {{ $stream->title ?? 'Untitled Stream' }}
                                            </h3>
                                            @if (isset($stream->isActive) && $stream->isActive)
                                                <span
                                                    class="ml-2 px-2 py-1 text-xs font-bold text-white bg-red-600 rounded-full animate-pulse">
                                                    LIVE
                                                </span>
                                            @elseif(isset($stream->isActive) && !$stream->isActive)
                                                <span
                                                    class="ml-2 px-2 py-1 text-xs font-bold text-gray-400 bg-gray-700 rounded-full">
                                                    OFFLINE
                                                </span>
                                            @endif
                                        </div>

                                        @if (!empty($stream->description))
                                            <p class="text-sm text-gray-300 mb-1">
                                                {{ $stream->description }}
                                            </p>
                                        @endif

                                        @if (isset($stream->isActive) && !$stream->isActive)
                                            <div class="mt-3 pt-3 border-t border-white/20">
                                                <p class="text-xs text-gray-400 flex items-center gap-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="12" y1="8" x2="12" y2="12">
                                                        </line>
                                                        <line x1="12" y1="16" x2="12.01" y2="16">
                                                        </line>
                                                    </svg>
                                                    Stream is currently offline
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </section>

        </div>
        <section class="py-16 px-4 mt-4 bg-[#021F59] rounded-2xl">
            <div class="max-w-full mx-auto">
                <h2 class="text-3xl font-bold text-[#FF8F20] mb-6">Previous Streams</h2>
                @if ($assets)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($assets as $asset)
                            <div
                                class="bg-black/40 backdrop-blur rounded-2xl overflow-hidden border border-white/20 hover:border-[#FF8F20] transition group">
                                <div class="relative w-full" style="aspect-ratio: 16/9;">
                                    <video src="{{ $asset['playbackUrl'] ?? '#' }}" controls
                                        class="absolute inset-0 w-full h-full"></video>
                                </div>
                                <div class="p-4">
                                    <h3 class="text-lg font-bold text-white truncate flex-1">
                                        {{-- {{ $asset['name'] ?? 'Untitled Stream' }} --}}
                                    </h3>
                                    @if (!empty($asset['description']))
                                        <p class="text-sm text-gray-300 mb-1">
                                            {{ $asset['description'] }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-400 text-center">No previous streams available.</p>
                @endif
            </div>
        </section>
    @else
        <div class="text-center py-16 px-4">
            <div class="max-w-md mx-auto">
                <div class="w-24 h-24 bg-[#FF8F20]/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                        fill="none" stroke="#FF8F20" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <rect x="2" y="6" width="20" height="12" rx="2"></rect>
                        <path d="M8 12h8"></path>
                        <path d="M12 8v8"></path>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Live Streaming Unavailable</h3>
                <p class="text-gray-900 dark:text-white mb-6">Live streaming is currently unavailable. Please check back later for updates.
                </p>
                <button onclick="window.location.reload()"
                    class="bg-[#FF8F20] hover:bg-[#FF8F20]/90 text-gray-900 font-semibold px-6 py-2 rounded-lg transition inline-flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    Refresh
                </button>
            </div>
        </div>
    @endif
@endsection
