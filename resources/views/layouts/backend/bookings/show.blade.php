<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookings') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-2 lg:px-2">
            <div class="bg-white/50 dark:bg-[#010E22] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flow-root">
                        <dl class="-my-3 divide-y divide-gray-200 text-sm">
                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Session</dt>

                                <dd class="text-gray-700 sm:col-span-2">
                                    {{ ucfirst(str_replace('_', ' ', $booking->service_type)) }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Name</dt>

                                <dd class="text-gray-700 sm:col-span-2">{{ $booking->name }}</dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Duration</dt>

                                <dd class="text-gray-700 sm:col-span-2">
                                    {{ round(\Carbon\Carbon::parse($booking->session_start)->diffInHours(\Carbon\Carbon::parse($booking->session_end))) }}
                                    hour <sup>(s)</sup></dd>
                            </div>

                            <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Payment</dt>

                                <dd class="text-gray-700 sm:col-span-2">
                                    {{ $booking->deposit_paid === $booking->total_amount ? 'Fully Paid' : 'Partially Paid' }}
                                </dd>
                            </div>

                            {{-- <div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
                                <dt class="font-medium text-gray-900">Description</dt>

                                <dd class="text-gray-700 sm:col-span-2">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et facilis debitis
                                    explicabo
                                    doloremque impedit nesciunt dolorem facere, dolor quasi veritatis quia fugit aperiam
                                    aspernatur neque molestiae labore aliquam soluta architecto?
                                </dd>
                            </div> --}}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
