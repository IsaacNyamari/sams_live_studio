<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Brands Edit') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#010E22] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Edit Brand</h2>

                    <form class='w-full max-w-lg' action="{{ route('brands.update', $brand->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            <div class='w-full px-3'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                    for='grid-name'>
                                    Brand name
                                </label>
                                <input
                                    class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                                    id='grid-name' type='text' name="name" placeholder='Brand name'
                                    value="{{ old('name', $brand->name) }}">
                                @error('name')
                                    <p class='text-red-600 text-xs italic'>{{ $message }}</p>
                                @enderror
                            </div>
                            <div class='w-full px-3'>
                                <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'
                                    for='grid-logo'>
                                    Brand logo
                                </label>
                                <input name="logo" value="{{ old('logo', $brand->logo_path) }}"
                                    class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                                    id='grid-logo' type='file' placeholder='Brand logo'>
                                @error('logo')
                                    <p class='text-red-600 text-xs italic'>{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class='w-full px-3'>
                            <button
                                class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'
                                type='submit'>
                                Update Brand
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
