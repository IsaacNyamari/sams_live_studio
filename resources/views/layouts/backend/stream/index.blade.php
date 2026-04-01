<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Streams') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#000080]/80 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($streams->count() < 1)
                        <a class="btn btn-danger mt-2 mb-4" href="{{ route('streams.create') }}" role="button">
                            <i class="fa fa-video-camera" aria-hidden="true"></i> Go Live
                        </a>
                    @endif

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                        @foreach ($streams as $stream)
                            <div class="rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800">
                                {{-- Livepeer Embeddable Player --}}
                                <div class="relative w-full" style="aspect-ratio: 16/9;">
                                    <iframe src="{{ $stream->stream_url }}" class="absolute inset-0 w-full h-full"
                                        allowfullscreen
                                        allow="autoplay; encrypted-media; fullscreen; picture-in-picture"
                                        frameborder="0"></iframe>
                                </div>

                                <div class="p-4">
                                    <div class="flex justify-between mb-2">
                                        <h3 class="text-lg font-semibold truncate">{{ $stream->title }}</h3>
                                    </div>

                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        Stream Key: <code class="text-xs">{{ $stream->stream_key }}</code>
                                    </p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        RTMP Server: <code class="text-xs">rtmp://rtmp.livepeer.com/live</code>
                                    </p>
                                    <a class="btn btn-primary mb-2" href="{{ route('live') }}" role="button">View on
                                        browser</a>

                                    <form action="{{ route('dashboard.streams.end', $stream->id) }}" method="POST">
                                        @csrf

                                        <button type="submit" class="btn btn-danger">
                                            End Live
                                        </button>

                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
