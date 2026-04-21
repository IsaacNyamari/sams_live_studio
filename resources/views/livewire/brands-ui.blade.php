<div class="flex gap-12 md:gap-16 mx-8">
    @forelse ($this->getBrands() as $brand)
        <div class="flex flex-col items-center justify-center group cursor-pointer">
           
                <img src="{{ asset($brand->logo_path) }}" alt="{{ $brand->name }} logo"
                    class="w-32 h-32 rounded-full md:w-16 md:h-16 object-cover">
            <p class="text-white/70 text-xs mt-2 group-hover:text-[#D4A44C]">{{ $brand->name }}</p>
        </div>

    @empty
        <p class="text-white/70 text-xs mt-2">No brands available</p>
    @endforelse

</div>
