<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Gallery
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#000080]/80 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <section class="max-w-full mx-auto px-4 md:px-8 mb-10">
                        <div class="flex">
                            <h2 class="text-2xl font-semibold dark:text-white text-[#000080] mb-2 mt-4">Gallery</h2> <a
                                href="{{ route('gallery.create') }}"
                                class="ml-auto bg-[#FF8F20] hover:bg-[#FF8F20]/80 text-white py-2 px-4 rounded-lg h-fit transition duration-300">Add
                                Gallery Item</a>
                        </div>
                        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
                            @forelse ($galleries as $gallery)
                                <div class="relative group cursor-pointer">
                                    <!-- Thumbnail with Aspect Ratio -->
                                    <div
                                        class="relative overflow-hidden rounded-lg shadow-lg bg-gray-100 dark:bg-gray-800">
                                        <div class="aspect-w-16 aspect-h-9">
                                            <img src="{{ asset($gallery->image_path) }}" alt="{{ $gallery->title }}"
                                                class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                                        </div>

                                        <!-- Gradient Overlay -->
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        </div>

                                        <!-- Content Overlay on Hover -->
                                        <div
                                            class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                            <h3 class="text-black text-xl font-bold mb-2">{{ $gallery->title }}</h3>
                                            <p class="tex text-sm line-clamp-2">{{ $gallery->description }}
                                            </p>
                                        </div>
                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST"
                                            class="absolute bottom-2 right-2 z-20"
                                            onsubmit="return confirm('Delete {{ $gallery->title }}?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white rounded-lg px-3 py-1 text-sm transition duration-300 shadow-lg flex items-center gap-1">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                    </path>
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                {{-- nice message and interface --}}
                                <div class="col-span-3 text-center py-20">
                                    <h3 class="text-2xl font-semibold text-gray-700 dark:text-gray-300 mb-4">No gallery
                                        items found.</h3>
                                    <p class="text-gray-500 dark:text-gray-400 mb-6">Start by adding a new gallery item
                                        to showcase your work.</p>
                                    <a href="{{ route('gallery.create') }}"
                                        class="bg-[#FF8F20] hover:bg-[#FF8F20]/80 text-white py-2 px-4 rounded-lg transition duration-300">Add
                                        Gallery Item</a>
                                </div>
                            @endforelse
                        </div>

                        <!-- Add this to your CSS or use Tailwind CDN for aspect ratio -->
                        <!-- For Tailwind v3+, aspect-ratio is built-in, otherwise add: -->
                        <style>
                            .aspect-w-16 {
                                position: relative;
                                padding-bottom: 56.25%;
                                /* 16:9 Aspect Ratio */
                            }

                            .aspect-w-16 img {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }
                        </style>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
