<div class="grid gap-6 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 place-items-center">
    @foreach ($services as $service)
        <div
            class="group w-full max-w-sm border border-[#c29a4e] rounded-lg overflow-hidden 
                    bg-[#010812] hover:shadow-2xl hover:shadow-[#c29a4e]/30 
                    transition-all duration-300 cursor-pointer">
            <div class="h-48 overflow-hidden bg-gray-900">
                <img src="{{ asset($service->image_path) }}" alt="{{ $service->title }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            </div>
            <div class="p-5">
                <h2
                    class="text-lg font-semibold text-white uppercase tracking-wide mb-3 
                           group-hover:text-[#c29a4e] transition-colors duration-300">
                    {{ $service->title }}
                </h2>
                <p class="text-sm text-gray-300 leading-relaxed line-clamp-3">
                    {{ $service->description }}
                </p>
            </div>
        </div>
    @endforeach
</div>
