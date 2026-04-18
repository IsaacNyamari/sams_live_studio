<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Brands') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="p-6 bg-white/50 dark:bg-[#010E22] overflow-hidden shadow-sm sm:rounded-lg">
                {{-- alert div --}}
                @session('success')
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <strong>Success!</strong> {{ session('success') }}
                    </div>
                @endsession
                <div class=" text-gray-900 dark:text-gray-100">
                    <a href="{{ route('brands.create') }}"
                        class="btn bg-[#FF8F20] hover:bg-[#010E22] hover:text-white mb-2">Create Brand</a>
                    <div class="p-3 text-gray-900 dark:text-gray-100">
                        <livewire:brands-index />
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
