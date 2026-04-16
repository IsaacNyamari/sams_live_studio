<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @foreach ($packages as $package)
        <div
            class="bg-[#010812] backdrop-blur rounded-2xl p-12 @if ($package->featured) border-2 border-[#FF8F20] transform scale-105 @else border-2 border-white @endif relative">
            @if ($package->featured)
                <div
                    class="absolute top-0 right-0 bg-[#FF8F20] text-gray-900 px-3 py-1 rounded-bl-lg rounded-tr-lg text-sm font-semibold">
                    Featured </div>
            @endif
            <h3 class="text-2xl font-bold text-[#FF8F20] mb-2">{{ $package->name }}</h3>
            <p class="text-gray-300 mb-4">{{ $package->description }}</p>
            <p class="text-3xl font-bold text-white mb-6">KES {{ $package->price }}<span
                    class="text-sm text-gray-400">/hour</span></p>
            <ul class="space-y-3 mb-8">
                @foreach ($package->features as $feature)
                    <li class="flex items-center gap-2 text-gray-300"><svg class="w-5 h-5 text-[#FF8F20]" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>{{ $feature->feature }}</li>
                @endforeach

            </ul>
            {{-- <button
                class="w-full bg-[#FF8F20] hover:bg-[#FF8F20]/90 text-gray-900 font-semibold py-2 rounded-lg transition">Book
                Now</button> --}}

            {{-- inquire via whatsapp --}}
            <a href="https://wa.me/{{ env('STUDIO_PHONE') }}?text=Hello {{ config('app.name') }}! I`m interested in your {{ $package->name }} package. with the following features: {{ $package->features->pluck('feature')->join(', ') }}. Please provide more details and availability."
                target="_blank"
                class="w-full bg-[#FF8F20] hover:bg-[#FF8F20]/90 text-gray-900 font-semibold py-2 rounded-lg transition text-center block">Inquire
                via WhatsApp</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#emailModal_{{ $package->id }}"
                class="w-full bg-[#021F59] hover:bg-[#021F59]/90 text-white font-semibold py-2 mt-2 rounded-lg transition text-center block">Email
                Quote</a>
        </div>
        {{-- modal for mailing quote --}}
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div class="modal fade" id="emailModal_{{ $package->id }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Inquire {{ $package->name }} Package
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="sendInquiry({{ $package->id }})">
                            <x-input-label for="name" :value="__('Your Name')" />
                            <x-text-input id="name" wire:model='name' class="block mt-1 w-full" type="text"
                                name="name" required autofocus />
                            <x-input-label for="email" :value="__('Your Email')" />
                            <x-text-input id="email" wire:model='email' class="block mt-1 w-full" type="email"
                                name="email" value="{{ auth()->user() ? auth()->user()->email : '' }}" required
                                autofocus />
                            <x-input-label for="phone" :value="__('Your Phone')" />
                            <x-text-input id="phone" wire:model='phone' class="block mt-1 w-full" type="text"
                                name="phone" required autofocus />
                            <x-input-label for="duration" :value="__('Session Duration')" />
                            <x-text-input id="duration" wire:model='duration' class="block mt-1 w-full" type="text"
                                name="duration" required autofocus />
                         
                    </div>
                    <div class="modal-footer">
                        <button onclick="showLoading()" type="submit" class="btn btn-primary"
                            data-bs-dismiss="modal">Send Inquiry <i class="fa fa-paper-plane"
                                aria-hidden="true"></i></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <script>
        function showLoading() {
            Swal.fire({
                title: 'Sending...',
                html: 'Please wait while we process your request.',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });
        }
    </script>
</div>
