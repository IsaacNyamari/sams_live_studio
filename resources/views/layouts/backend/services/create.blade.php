<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Service') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#010E22] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form class='w-full max-w-lg mx-auto' method='POST' action="{{ route('services.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            {{-- title --}}
                            <div class='w-full px-3'>
                                <label
                                    class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                                    for='title'>
                                    Title
                                </label>
                                <input name="title"
                                    class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                                    id='title' type='text'>

                                @error('title')
                                    <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            {{-- description --}}
                            <div class='w-full px-3'>
                                <label
                                    class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                                    for='description'>
                                    Description
                                </label>
                                <textarea name="description"
                                    class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                                    id='description'></textarea>

                                @error('description')
                                    <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            {{-- icon --}}
                            <div class='w-full px-3'>
                                <label
                                    class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                                    for='icon'>
                                    Icon
                                </label>
                                <input name="icon"
                                    class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                                    id='icon' type='text' placeholder="e.g fa fa-address">

                                @error('icon')
                                    <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            {{-- image --}}
                            <div class='w-full px-3'>
                                <label
                                    class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                                    for='image'>
                                    Image
                                </label>
                                <input name="image"
                                    class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                                    id='image' type='file'>

                                @error('image')
                                    <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class='flex flex-wrap -mx-3 mb-6'>
                            <div class='w-full px-3'>
                                <button
                                    class='bg-[#000080] text-white hover:bg-[#021F59] dark:bg-white/100 dark:text-[#000080] dark:hover:bg-gray-50 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'
                                    type='submit'>
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
