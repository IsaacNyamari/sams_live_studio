<div>
    <h2 class="text-2xl font-semibold dark:text-white text-[#000080] mb-2 mt-4">Student & Graduate Work</h2>
    <p class="text-gray-600 dark:text-gray-300 mb-6">See what our students have accomplished at {{ config('app.name') }}
        Academy</p>
    <div class="grid md:grid-cols-3 gap-8">
        @forelse ($this->getGalleries() as $gallery)
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
    {{ $this->getGalleries()->links() }}
</div>
