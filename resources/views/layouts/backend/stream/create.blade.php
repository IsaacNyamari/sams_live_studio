<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Streams') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#010E22] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('streams.store') }}" method="POST"
                        class='bg-white text-gray-500 max-w-[
                            340px
                            ] mx-4 p-6 text-left text-sm rounded-lg border border-gray-300/60'>
                        @csrf
                        <label class='font-medium' for='title'>Stream Title</label>
                        <input id='title'
                            class='w-full border mt-1.5 mb-1 border-gray-500/30 outline-none rounded py-2.5 px-3'
                            type='text' name="title" placeholder='Enter title'>
                        @error('title')
                            <p class="form-text text-danger mt-1">{{ $message }}</p>
                        @enderror
                        <label class='font-medium' for='description'>Stream Description</label>
                        <textarea name="description" rows='3' id='description'
                            class='w-full resize-none border mt-1.5 border-gray-500/30 outline-none rounded py-2.5 px-3' type='text'
                            placeholder='Enter description'></textarea>
                        @error('description')
                            <p class="form-text text-danger mt-1">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center mt-4">
                            <input type="checkbox" name="recording" id="recording" class="mr-2">
                            <label for="recording" class="text-sm text-gray-600 dark:text-gray-400">Record
                                Stream</label>
                        </div>
                        <div class='flex items-center justify-between'>
                            <button type='submit'
                                class='my-3 bg-indigo-500 py-2 px-5 rounded text-white font-medium'>Create
                                Stream</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
