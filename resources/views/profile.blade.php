<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-[#010E22] shadow sm:rounded-lg order-1">
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-[#010E22] shadow sm:rounded-lg order-2">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>
            <div wire:ignore class="p-4 sm:p-8 bg-white dark:bg-[#010E22] shadow sm:rounded-lg order-0">
                {{-- current images --}}
                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">Current Profile Image</h3>
                    <img src="{{ asset(auth()->user()->profile_image) ?? 'https://placehold.co/120x120/ccc/white?text=Photo' }}"
                        alt="Profile Image" class="rounded-full w-24 h-24 object-cover">
                </div>
                <div class="mb-4">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-2">Current Cover Image</h3>
                    <img src="{{ asset(auth()->user()->cover_image) ?? 'https://placehold.co/1200x300/1877f2/white?text=Cover+Photo' }}" alt="Cover Image" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div class="max-w-xl">
                    <form method="POST" action="{{ route('profile.image.update', auth()->user()) }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group mb-3">
                            <label for="profile_image">Profile Image</label>
                            <input id="profile_image" class="form-control" type="file" name="profile_image">
                            @error('profile_image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="cover_image">Cover Image</label>
                            <input id="cover_image" class="form-control" type="file" name="cover_image">
                            @error('cover_image')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <x-primary-button class="mt-2">Save</x-primary-button>
                    </form>
                </div>
            </div>

            {{-- <div class="p-4 sm:p-8 bg-white dark:bg-[#010E22] shadow sm:rounded-lg">
                {{-- <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div> 
            </div> --}}
        </div>
    </div>
</x-app-layout>
