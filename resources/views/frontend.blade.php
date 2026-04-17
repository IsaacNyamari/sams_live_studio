<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BJ+Cree:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/logos/file_00000000a738720aa937501436d285b3.ico') }}"
        type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/js/bootstrap.min.js"
        integrity="sha512-nKXmKvJyiGQy343jatQlzDprflyB5c+tKCzGP3Uq67v+lmzfnZUi/ZT+fc6ITZfSC5HhaBKUIvr/nTLCV+7F+Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('description')
    @yield('keywords')
    @yield('featured_image')
    <!-- Styles -->
    <style>
        /* add times new roman font here */
        * {
            font-family: "BJ Cree", serif;
            font-weight: 700;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: {{ env('HEADING_COLOR') }};
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src='https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment.min.js'></script>
    @livewireStyles
    <!-- Step 2: Timezone data (this enables ALL timezones) -->
    <script src='https://cdn.jsdelivr.net/npm/moment-timezone@0.5.40/builds/moment-timezone-with-data.min.js'></script>

    <!-- Step 3: FullCalendar core -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.20/index.global.min.js'></script>

    <!-- Step 4: The connector (what you asked about) -->
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/moment-timezone@6.1.20/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="antialiased font-sans dark:bg-[#010E24]">
    {{-- sweetalert --}}
    @include('sweetalert2::index')
    <livewire:front-end-navigation />
    <main class="mb-2">
        @yield('content')
    </main>
    <livewire:footer />
    @livewireScripts
    @yield('scripts')
    <script>
        document.addEventListener('livewire:init', function() {
            Livewire.on('initializePayment', async (event) => {
                if (event) {
                    const data = event[0];

                    // Dynamically load Paystack script if not loaded
                    if (!window.PaystackPop) {
                        await new Promise((resolve, reject) => {
                            const script = document.createElement('script');
                            script.src = 'https://js.paystack.co/v1/inline.js';
                            script.onload = resolve;
                            script.onerror = reject;
                            document.head.appendChild(script);
                        });
                    }
                    // Initialize Paystack payment
                    let handler = PaystackPop.setup({
                        key: data.key, // Corrected
                        email: data.email,
                        amount: data.amount,
                        currency: 'KES',
                        ref: 'PS_' + Math.floor(Math.random() * 1000000000 + 1),
                        callback: function(response) {
                            Livewire.dispatch('paymentSuccess', {
                                reference: response.reference
                            });

                        },
                        onClose: function(response) {
                            Livewire.dispatch('paymentPopupClosed');
                        }
                    });
                    handler.openIframe();
                }
            });
            window.Echo.channel('refresh.services')
                .listen('.refresh.services', (e) => {
                    Livewire.dispatch('refreshServices');
                });
            window.Echo.channel('load.packages')
                .listen('.load.packages', (e) => {
                    console.log(e);

                    Livewire.dispatch('refreshPackages');
                });

            window.addEventListener("DOMContentLoaded", (e) => {
                @if (auth()->user())
                    let name = '{{ Auth::user()->name }}';
                    $('#sendTraffic').keyup(() => {
                        window.Echo.private('traffic.monitor').whisper('new.traffic', {
                            name: name,
                            text: $('#sendTraffic').val()
                        })
                    })
                @endif
            })
            Livewire.on('inquirySent', (event) => {
                Swal.fire({
                    icon: event[0].icon,
                    title: 'Inquiry Status',
                    text: event[0].message,
                    confirmButtonColor: '#FF8F20'
                });
            });
            window.addEventListener('swal:loading', event => {
                Swal.fire({
                    title: 'Loading...',
                    onBeforeOpen: () => {
                        Swal.showLoading();
                    }
                });
            });

        })
    </script>
</body>

</html>
