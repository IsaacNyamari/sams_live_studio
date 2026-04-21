<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        @session('success')
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success! </strong>
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endsession
        @session('error')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error! </strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endsession
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#010E22] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 ">
                    <div
                        class="max-w-2xl mx-4 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto mt-16 bg-white shadow-xl rounded-lg text-gray-900">
                        <div class="rounded-t-lg h-32 overflow-hidden">
                            <img class="object-cover object-top w-full"
                                src='{{ asset($user->cover_image) ?? "https://placehold.co/1200x300/1877f2/white?text=Cover+Photo" }}'
                                alt='Mountain'>
                        </div>
                        <div
                            class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
                            <img class="object-cover object-center h-32"
                                src='{{ asset($user->profile_image) ?? "https://placehold.co/120x120/ccc/white?text=Photo" }}'
                                alt='Woman looking front'>
                        </div>
                        <div class="text-center mt-2">
                            <h2 class="font-semibold">{{ $user->name }}</h2>
                            <p class="text-gray-500">{{ $user->email }}</p>
                        </div>
                        <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
                            <li class="flex flex-col items-center justify-around">
                                <i class="fa fa-dollar  text-[#1E3A8A]" aria-hidden="true"></i> <a class="underline"
                                    href="{{ route('dashboard.user.payments', $user) }}">Payments</a>
                                <div>{{ $user->payments->count() }}</div>
                            </li>
                            <li class="flex flex-col items-center justify-between">
                                <i class="fa fa-book text-[#1E3A8A]" aria-hidden="true"></i> <a class="underline"
                                    href="{{ route('dashboard.user.bookings', $user) }}">Bookings</a>
                                <div>{{ $user->bookings->count() }}</div>
                            </li>
                            <li class="flex flex-col items-center justify-around">
                                <svg class="w-4 fill-current text-blue-900" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z" />
                                </svg>
                                <div>15</div>
                            </li>
                        </ul>
                        <div class="p-4 border-t flex gap-2 mx-8 mt-2">
                            <a href="tel:{{ $user->phone }}"
                                class="w-1/2 block mx-auto rounded-full bg-[#1E3A8A] hover:shadow-lg font-semibold text-white px-6 py-2"><i
                                    class="fa fa-phone" aria-hidden="true"></i> Call</a>
                            <button data-bs-toggle="modal" data-bs-target="#sendEmailToUser"
                                class="w-1/2 block mx-auto rounded-full bg-[#FF8F20] hover:shadow-lg font-semibold text-white px-6 py-2"><i
                                    class="fa fa-envelope" aria-hidden="true"></i> Email</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Body-->
    <div class="modal fade" id="sendEmailToUser" tabindex="-1" role="dialog" data-bs-backdrop="static"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        New Email
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">


                        <div class="bg-[#F8FAFC] shadow-xl rounded-2xl w-full max-w-md p-6 sm:p-8">

                            <form action="{{ route('dashboard.users.sendMail', $user) }}" method="POST"
                                class="space-y-5">
                                @csrf
                                <h5 class="text-center">{{ $user->email }}</h5>
                                <input type="hidden" name="email" value="{{ $user->email }}">
                                <input type="hidden" name="name" value="{{ $user->name }}">
                                <!-- Subject -->
                                <div>
                                    <label for="subject"
                                        class="block text-left text-sm font-medium text-gray-700 mb-1">
                                        Subject</label>
                                    <input type="text" id="subject" name="subject" required class="form-control" />
                                </div>

                                <!-- Message -->
                                <div>
                                    <label for="message"
                                        class="block text-left text-sm font-medium text-gray-700 mb-1">Message</label>
                                    <textarea type="message" id="message" name="message" required class="form-control transition" rows="5"></textarea>
                                </div>
                                <!-- Submit Button -->
                                <button type="submit"
                                    class="w-full bg-[#FF8F20] hover:bg-blue-900 text-white font-semibold py-3 rounded-lg shadow-md transition-all duration-200">
                                    Send <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
