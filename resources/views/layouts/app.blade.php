<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{ config('app.name') }}</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <!-- Required for ALL timezone support -->
        <script src='https://cdn.jsdelivr.net/npm/moment@2.29.4/min/moment.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/moment-timezone@0.5.40/builds/moment-timezone-with-data.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.20/index.global.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/moment-timezone@6.1.20/index.global.min.js'></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .card-header {
            background-color: #FF8F20 !important;
            color: white;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @filemanagerStyles
</head>

<body class="dark:bg-[#010E22] bg-slate-100 text-black font-['Poppins']">
    @include('sweetalert2::index')
    <!-- Main Dashboard Container -->
    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <x-dashboard-sidebar />
        <div class='fixed inset-0 z-50 hidden place-content-center bg-black/50 p-4' role='dialog' aria-modal='true'
            aria-labelledby=''>
            <div class='w-full max-w-md rounded-lg bg-white p-6 shadow-lg dark:bg-gray-900'>
                <div class='flex items-start justify-between'>
                    <h2 id='modalTitle' class='text-xl font-bold text-gray-900 sm:text-2xl dark:text-white'>
                        Modal Title
                    </h2>
                    <button type='button'
                        class='-me-4 -mt-4 rounded-full p-2 text-gray-400 transition-colors hover:bg-gray-50 hover:text-gray-600 focus:outline-none dark:text-gray-500 dark:hover:bg-gray-800 dark:hover:text-gray-300'
                        aria-label='Close'>
                        <svg xmlns='http: //www.w3.org/2000/svg' class='size-5' fill='none' viewBox='0 0 24 24'
                            stroke='currentColor'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                                d='M6 18L18 6M6 6l12 12'>
                            </path>
                        </svg>
                    </button>
                </div>
                <div class='mt-4'>
                    <p class='text-pretty text-gray-700 dark:text-gray-200'>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod, nisi eu
                        consectetur. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <footer class='mt-6 flex justify-end gap-2'>
                    <button type='button'
                        class='rounded bg-gray-100 px-4 py-2 text-sm font-medium text-gray-700 transition-colors hover:bg-gray-200 dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-gray-700'>
                        Cancel
                    </button>
                    <button type='button'
                        class='rounded bg-blue-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-blue-700'>
                        Done
                    </button>
                </footer>
            </div>
        </div>
        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <!-- Top Bar -->
            <header
                class="h-16 dark:bg-[#010E22] bg-[#F6F8FA] text-black border-b border-gray-200 flex items-center justify-between px-4 md:px-6">
                <!-- Left Section - Mobile Menu Button -->
                <div class="flex items-center gap-4">
                    <button id="openSidebarBtn" class="lg:hidden dark:text-white hover:text-[#FF8F20] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                    </button>

                    <!-- Page Title -->
                    <h1 class="dark:text-white font-semibold text-lg md:text-xl">Dashboard</h1>
                </div>

                <!-- Right Section - User Menu -->
                <div class="flex items-center gap-4">
                    <!-- Notifications -->
                    <button class="relative dark:text-white hover:text-[#FF8F20] transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                            <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                        </svg>
                        <span
                            class="absolute -top-1 -right-1 w-4 h-4 bg-[#FF8F20] rounded-full text-[10px] text-white flex items-center justify-center">3</span>
                    </button>

                    <!-- User Dropdown -->
                    <div class="relative">
                        <button class="flex items-center gap-3 dark:text-white hover:text-black transition"
                            id="userMenuBtn">
                            <div class="w-8 h-8 bg-[#FF8F20] rounded-full flex items-center justify-center">
                                <span
                                    class="text-sm font-semibold dark:text-white hover:text-white">{{ user_initials(Auth::user()?->name) }}</span>
                            </div>
                            <span class="hidden md:block text-sm">{{ Auth::user() ? Auth::user()->name : '' }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="hidden md:block">
                                <polyline points="6 9 12 15 18 9" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="userDropdown"
                            class="absolute right-0 mt-2 w-48 dark:bg-[#010E22] bg-slate-100 dark:text-white border border-white/80 rounded-lg shadow-lg hidden z-50">
                            <div class="py-2">
                                <a href="{{ route('profile') }}"
                                    class="block px-4 py-2 text-sm  dark:text-white hover:text-[#FF8F20] hover:bg-white/5 transition">Profile</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm  dark:text-white hover:text-[#FF8F20] hover:bg-white/5 transition">Account
                                    Settings</a>
                                <div class="border-t border-white/80 my-1"></div>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button href="#"
                                        class="block px-4 py-2 text-sm  dark:text-white hover:text-[#FF8F20] hover:bg-white/5 transition">Logout</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content - Blank -->
            <main class="flex-1 overflow-y-auto md:p-6">
                <div class="text-center">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebarOverlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>

    @livewireScripts
    @filemanagerScripts

    <!-- Use this CDN (global version) -->

    <script>
        // Mobile sidebar functionality
        const sidebar = document.getElementById('sidebar');
        const openSidebarBtn = document.getElementById('openSidebarBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const userMenuBtn = document.getElementById('userMenuBtn');
        const userDropdown = document.getElementById('userDropdown');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        }

        if (openSidebarBtn) {
            openSidebarBtn.addEventListener('click', openSidebar);
        }

        if (closeSidebarBtn) {
            closeSidebarBtn.addEventListener('click', closeSidebar);
        }

        if (sidebarOverlay) {
            sidebarOverlay.addEventListener('click', closeSidebar);
        }

        // User dropdown functionality
        if (userMenuBtn && userDropdown) {
            userMenuBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', function(e) {
                if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
                    userDropdown.classList.add('hidden');
                }
            });
        }

        // Close sidebar on window resize if open
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('-translate-x-full');
                sidebarOverlay.classList.add('hidden');
                document.body.style.overflow = '';
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('hidden');
            }
        });
    </script>
    <script>
        @hasrole('admin')
            document.addEventListener('DOMContentLoaded', function() {
                let userId = {{ Auth::user()->id }};
                window.Echo.private('donation-notifications.' + userId)
                    .listen('.new-donation', (e) => {
                        console.log(e.data);
                        let data = e.data;
                        Swal.fire({
                            title: 'New Donation Received!',
                            text: `Donor: ${data.donor_name}\nAmount: KES ${data.amount}\nReference: ${data.reference}`,
                            icon: 'success',
                            confirmButtonText: 'View Details'
                        })

                        // .then((result) => {
                        //     if (result.isConfirmed) {
                        //         window.location.href = '/admin/donations';
                        //     }
                        // });
                    });
            });
        @endhasrole

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
                        id: data.id,
                        key: data.key, // Corrected
                        email: data.email,
                        amount: data.amount,
                        currency: 'KES',
                        ref: 'PS_' + Math.floor(Math.random() * 1000000000 + 1),
                        callback: function(response) {
                            Livewire.dispatch('paymentSuccess', {
                                reference: response.reference,
                                bookingId: data.id,
                                amount: data.amount
                            });

                        },
                        onClose: function(response) {
                            Livewire.dispatch('paymentPopupClosed');
                        }
                    });
                    handler.openIframe();
                }
            });
            let userId = {{ auth()->user()->id }};
            window.Echo.private('user-booking-updates.' + userId).listen('.booking-status-updated', (e) => {
                let status = e.status
                Swal.fire({
                    'toast': true,
                    'icon': status === 'approved' ? 'success' : 'error',
                    'title': e.message,
                    'position': 'top-end',
                    'showConfirmButton': false,
                    'timer': 3000,
                    'timerProgressBar': true
                })
            })
            window.Echo.private('notifiy-admin-on-donation.' + userId).listen('.notifiy-admin-new-donation', (
                e) => {
                Swal.fire({
                    'toast': true,
                    'icon': 'success',
                    'title': e.message,
                    'position': 'top-end',
                    'showConfirmButton': false,
                    'timer': 6000,
                    'timerProgressBar': true
                })
            })
        });
    </script>
</body>

</html>
