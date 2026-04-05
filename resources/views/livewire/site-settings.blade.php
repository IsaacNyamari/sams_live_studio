<div>
    <div class="grid grid-flow-row lg:grid-cols-2 md:grid-cols-1 gap-4">
        <form class='w-full max-w-full' wire:submit.prevent='saveSiteSettings'>
            <h3 class="text-center mb-3">Site Settings</h3>
            <div class='flex flex-wrap -mx-3 mb-6'>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='appName'>
                        Site Name
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='appName' type='text' wire:model='appName'>
                    @error('appName')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='studioPhone'>
                        Studio Phone
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='studioPhone' type='text' wire:model='studioPhone'>
                    @error('studioPhone')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='studioPhoneAlt'>
                        Studio Phone (Alternative)
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='studioPhoneAlt' type='text' wire:model='studioPhoneAlt'>
                    @error('studioPhoneAlt')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='studioEmail'>
                        Studio Email
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='studioEmail' type='text' wire:model='studioEmail'>
                    @error('studioEmail')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='bookingsEmail'>
                        Bookings Email
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='bookingsEmail' type='text' wire:model='bookingsEmail'>
                    @error('bookingsEmail')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <button class="btn btn-primary" type="submit">Save Site Settings</button>
        </form>
        <form class='w-full max-w-full' wire:submit.prevent='saveMailSettings'>
            <h3 class="text-center mb-3">Mail Settings</h3>
            <div class='flex flex-wrap -mx-3 mb-6'>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='mailHost'>
                        Mail Host
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='mailHost' type='text' wire:model='mailHost'>
                    @error('mailHost')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='mailPort'>
                        Mail Port
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='mailPort' type='text' wire:model='mailPort'>
                    @error('mailPort')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='mailUsername'>
                        Mail Username
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='mailUsername' type='text' wire:model='mailUsername'>
                    @error('mailUsername')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>

                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='mailPassword'>
                        Mail Password
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='mailPassword' type='text' wire:model='mailPassword'>
                    @error('mailPassword')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='mailEncryption'>
                        Mail Encryption
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='mailEncryption' type='text' wire:model='mailEncryption'>
                    @error('mailEncryption')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save Mail Settings</button>
        </form>
    </div>
    <div class="grid grid-flow-row lg:grid-cols-2 md:grid-cols-1 gap-4 mt-5">
        {{-- pusher settings --}}
        <form class='w-full max-w-full' wire:submit.prevent='savePusherSettings'>
            <h3 class="text-center mb-3">Pusher Settings</h3>
            <div class='flex flex-wrap -mx-3 mb-6'>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='pusherAppId'>
                        Pusher App ID
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='pusherAppId' type='text' wire:model='pusherAppId'>
                    @error('pusherAppId')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='pusherKey'>
                        Pusher Key
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='pusherKey' type='text' wire:model='pusherKey'>
                    @error('pusherKey')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='pusherSecret'>
                        Pusher Secret
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='pusherSecret' type='text' wire:model='pusherSecret'>
                    @error('pusherSecret')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='pusherCluster'>
                        Pusher Cluster
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='pusherCluster' type='text' wire:model='pusherCluster'>
                    @error('pusherCluster')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='pusherPort'>
                        Pusher Port
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='pusherPort' type='text' wire:model='pusherPort'>
                    @error('pusherPort')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>

            </div>
            <button class="btn btn-primary" type="submit">Save Pusher Settings</button>
        </form>

        {{-- paystack settings --}}
        <form class="w-full max-w-full" wire:submit.prevent='savePaystackSettings'>
            <h3 class="text-center mb-3">Paystack Settings</h3>
            <div class='flex flex-wrap -mx-3 mb-6'>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='paystackPublicKey'>
                        Paystack Public Key
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='paystackPublicKey' type='text' wire:model='paystackPublicKey'>
                    @error('paystackPublicKey')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='paystackSecretKey'>
                        Paystack Secret Key
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='paystackSecretKey' type='text' wire:model='paystackSecretKey'>
                    @error('paystackSecretKey')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='paystackMerchantUrl'>
                        Paystack Merchant Url
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='paystackMerchantUrl' type='text' wire:model='paystackMerchantUrl'>
                    @error('paystackMerchantUrl')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save Paystack Settings</button>
        </form>

    </div>
    <div class="grid grid-flow-row lg:grid-cols-2 md:grid-cols-1 gap-4 mt-5">
        {{-- livepeer settings --}}
        <form class="w-full max-w-full" wire:submit.prevent='saveLivePeerSettings'>
            <h3 class="text-center mb-3">LivePeer Settings</h3>
            <div class='flex flex-wrap -mx-3 mb-6'>
                <div class='w-full px-3'>
                    <label class='block uppercase tracking-wide text-gray-700 dark:text-white text-xs font-bold mb-2'
                        for='livePeerApiKey'>
                        LivePeer API Key
                    </label>
                    <input
                        class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                        id='livePeerApiKey' type='text' wire:model='livePeerApiKey'>
                    @error('livePeerApiKey')
                        <p class='text-gray-600 text-xs italic'>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Save LivePeer Settings</button>
        </form>
    </div>
</div>
