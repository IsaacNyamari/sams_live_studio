<div class="grid grid-flow-row gap-4">
    <div class="mb-1">
        <h2 class="text-white">You are donating as: <br> <span class="font-bold text-gray-300">{{ auth()->user()->name }} <br> {{ auth()->user()->email }}</span></h2>
    </div>
    <form wire:submit.prevent="makeDonation">
        <label for="amount" class="text-white">Enter Amount</label>
        <x-text-input type="number" wire:model.live="amount" class="w-full mb-2" />
        <button type="submit"
            class="w-full bg-[#FF8F20] hover:bg-[#FF8F20]/90 text-gray-900 font-semibold py-3 rounded-lg transition">Support
            {{ config('app.name') }}</button>
        <img src="{{ asset('images/security/security.png') }}" alt="">
        <p class="text-center text-gray-400 text-sm mt-4">Secure payment processing via M-Pesa,
            Visa,
            and
            Mastercard</p>
    </form>
</div>