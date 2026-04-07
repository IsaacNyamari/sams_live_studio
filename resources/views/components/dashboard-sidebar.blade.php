<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-50 w-64 bg-[#F6F8FA] dark:bg-[#000080] border-r border-white/10 transform transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0 lg:static lg:inset-auto">
    <!-- Sidebar Header -->
    <div class="flex items-center justify-between h-16 px-4 border-b border-white/10">
        <div class="flex items-center gap-3">
            <div class="w-8 h-8 bg-[#FF8F20] rounded-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                    fill="none" stroke="white" stroke-width="2">
                    <rect x="2" y="6" width="20" height="12" rx="2" />
                    <path d="M8 12h8" />
                    <path d="M12 8v8" />
                </svg>
            </div>
            <span class="dark:text-white font-semibold text-lg">{{ config('app.name') }}</span>
        </div>
        <button class="lg:hidden dark:text-white hover:text-[#FF8F20] transition" id="closeSidebarBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Sidebar Navigation -->
    <nav class="mt-6 px-4 space-y-1">
        <x-sidebar-links :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
                <path d="M3 9l9-6 9 6v11a2 2 0 0 1-2 2h-5v-7H9v7H5a2 2 0 0 1-2-2z" />
            </svg>
            {{ __('Dashboard') }}
        </x-sidebar-links>

        @if (Auth::user()->isAdmin())
            <x-sidebar-links :href="route('dashboard.gallery')" :active="request()->routeIs('dashboard.gallery')">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                    viewBox="0 0 50 50" class="group-hover:text-[#FF8F20]" fill="#FF8F20">
                    <path
                        d="M 5 4 C 3.3550302 4 2 5.3550302 2 7 L 2 16 L 2 18 L 2 43 C 2 44.64497 3.3550302 46 5 46 L 45 46 C 46.64497 46 48 44.64497 48 43 L 48 19 L 48 16 L 48 11 C 48 9.3550302 46.64497 8 45 8 L 18 8 C 18.08657 8 17.96899 8.000364 17.724609 7.71875 C 17.480227 7.437136 17.179419 6.9699412 16.865234 6.46875 C 16.55105 5.9675588 16.221777 5.4327899 15.806641 4.9628906 C 15.391504 4.4929914 14.818754 4 14 4 L 5 4 z M 5 6 L 14 6 C 13.93925 6 14.06114 6.00701 14.308594 6.2871094 C 14.556051 6.5672101 14.857231 7.0324412 15.169922 7.53125 C 15.482613 8.0300588 15.806429 8.562864 16.212891 9.03125 C 16.619352 9.499636 17.178927 10 18 10 L 45 10 C 45.56503 10 46 10.43497 46 11 L 46 13.1875 C 45.685108 13.07394 45.351843 13 45 13 L 5 13 C 4.6481575 13 4.3148915 13.07394 4 13.1875 L 4 7 C 4 6.4349698 4.4349698 6 5 6 z M 5 15 L 45 15 C 45.56503 15 46 15.43497 46 16 L 46 19 L 46 43 C 46 43.56503 45.56503 44 45 44 L 5 44 C 4.4349698 44 4 43.56503 4 43 L 4 18 L 4 16 C 4 15.43497 4.4349698 15 5 15 z">
                    </path>
                </svg>
                {{ __('Media') }}
            </x-sidebar-links>
            <x-sidebar-links :href="route('dashboard.portfolio')" :active="request()->routeIs('dashboard.portfolio', 'portfolio.create', 'portfolio.edit')">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                    viewBox="0 0 50 50" class="group-hover:text-[#FF8F20]" fill="#FF8F20">
                    <path
                        d="M 5 4 C 3.3550302 4 2 5.3550302 2 7 L 2 16 L 2 18 L 2 43 C 2 44.64497 3.3550302 46 5 46 L 45 46 C 46.64497 46 48 44.64497 48 43 L 48 19 L 48 16 L 48 11 C 48 9.3550302 46.64497 8 45 8 L 18 8 C 18.08657 8 17.96899 8.000364 17.724609 7.71875 C 17.480227 7.437136 17.179419 6.9699412 16.865234 6.46875 C 16.55105 5.9675588 16.221777 5.4327899 15.806641 4.9628906 C 15.391504 4.4929914 14.818754 4 14 4 L 5 4 z M 5 6 L 14 6 C 13.93925 6 14.06114 6.00701 14.308594 6.2871094 C 14.556051 6.5672101 14.857231 7.0324412 15.169922 7.53125 C 15.482613 8.0300588 15.806429 8.562864 16.212891 9.03125 C 16.619352 9.499636 17.178927 10 18 10 L 45 10 C 45.56503 10 46 10.43497 46 11 L 46 13.1875 C 45.685108 13.07394 45.351843 13 45 13 L 5 13 C 4.6481575 13 4.3148915 13.07394 4 13.1875 L 4 7 C 4 6.4349698 4.4349698 6 5 6 z M 5 15 L 45 15 C 45.56503 15 46 15.43497 46 16 L 46 19 L 46 43 C 46 43.56503 45.56503 44 45 44 L 5 44 C 4.4349698 44 4 43.56503 4 43 L 4 18 L 4 16 C 4 15.43497 4.4349698 15 5 15 z">
                    </path>
                </svg>
                {{ __('Portfolio') }}
            </x-sidebar-links>
            <x-sidebar-links :href="route('dashboard.streams')" :active="request()->routeIs(['dashboard.streams', 'streams.create', 'streams.edit'])">
                <i class="fa fa-video-camera group-hover:text-[#FF8F20]" fill="#FF8F20" x="0px" y="0px"
                    width="20" height="20">
                </i>
                {{ __('Streams') }}
            </x-sidebar-links>

            <x-sidebar-links :href="route('dashboard.payments')" :active="request()->routeIs('dashboard.payments*', 'dashboard.user.payments')">
                <i class="fa fa-dollar" width="20" height="20" aria-hidden="true"></i>
                {{ __('Payments') }}
            </x-sidebar-links>
            <x-sidebar-links :href="route('dashboard.users')" :active="request()->routeIs('dashboard.users*', 'dashboard.user.bookings')">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                    <line x1="16" y1="2" x2="16" y2="6" />
                    <line x1="8" y1="2" x2="8" y2="6" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
                {{ __('Users') }}
            </x-sidebar-links>
        @endif
        <x-sidebar-links :href="route('bookings')" :active="request()->routeIs('bookings*')">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                <line x1="16" y1="2" x2="16" y2="6" />
                <line x1="8" y1="2" x2="8" y2="6" />
                <line x1="3" y1="10" x2="21" y2="10" />
            </svg>
            {{ __('Bookings') }}
        </x-sidebar-links>
        @if (Auth::user()->isClient())
            <x-sidebar-links :href="route('dashboard.user.payments', auth()->user()->id)" :active="request()->routeIs('dashboard.user.payments')">
                <i class="fa fa-dollar"width="20" height="20" viewBox="0 0 24 24"
                    class="group-hover:text-[#FF8F20]"></i>
                <span>Payments</span>
            </x-sidebar-links>
            <x-sidebar-links :href="route('dashboard.payments.donate', auth()->user()->id)" :active="request()->routeIs('dashboard.payments.donate')">
                <i class="fa fa-dollar"width="20" height="20" viewBox="0 0 24 24"
                    class="group-hover:text-[#FF8F20]"></i>
                <span>Donate</span>
            </x-sidebar-links>
        @endif


        {{-- <!-- Sessions Link -->
<x-sidebar-links :href="route('dashboard.sessions')" :active="request()->routeIs('dashboard.sessions')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
        <circle cx="12" cy="12" r="10" />
        <polygon points="10 8 16 12 10 16 10 8" />
    </svg>
    <span>Live Sessions</span>
</x-sidebar-links>

<!-- Studio Calendar Link -->
<x-sidebar-links :href="route('calendar')" :active="request()->routeIs('calendar')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
        <line x1="16" y1="2" x2="16" y2="6" />
        <line x1="8" y1="2" x2="8" y2="6" />
        <line x1="3" y1="10" x2="21" y2="10" />
    </svg>
    <span>Studio Calendar</span>
</x-sidebar-links>

<!-- Equipment Link -->
<x-sidebar-links :href="route('equipment')" :active="request()->routeIs('equipment')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83" />
    </svg>
    <span>Equipment</span>
</x-sidebar-links>

<!-- Clients Link -->
<x-sidebar-links :href="route('clients')" :active="request()->routeIs('clients')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
        <circle cx="12" cy="7" r="4" />
    </svg>
    <span>Clients</span>
</x-sidebar-links>

<!-- Invoices Link -->
<x-sidebar-links :href="route('invoices')" :active="request()->routeIs('invoices')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
        <polyline points="14 2 14 8 20 8" />
        <line x1="16" y1="13" x2="8" y2="13" />
        <line x1="16" y1="17" x2="8" y2="17" />
        <polyline points="10 9 9 9 8 9" />
    </svg>
    <span>Invoices</span>
</x-sidebar-links>

<!-- Reports Link -->
<x-sidebar-links :href="route('reports')" :active="request()->routeIs('reports')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
        <path d="M21 16v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2M7 10l5 5 5-5" />
        <path d="M12 15V3" />
    </svg>
    <span>Reports</span>
</x-sidebar-links> --}}
    </nav>

    <!-- Divider -->
    <div class="mx-4 mt-6 pt-6 border-t border-white/10">
        <!-- Settings Link -->
        <x-sidebar-links :href="route('dashboard.settings')" class="mb-2" :active="request()->routeIs('dashboard.settings')">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
                <circle cx="12" cy="12" r="3" />
                <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
            </svg>
            <span>Settings</span>
        </x-sidebar-links>
        <x-sidebar-links :href="route('profile')" :active="request()->routeIs('profile')">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" class="group-hover:text-[#FF8F20]">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <span>Profile</span>
        </x-sidebar-links>
        <!-- Logout Link -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="flex items-center gap-3 w-full px-4 py-3 text-red-900 hover:text-[#FF8F20] hover:bg-white/5 rounded-lg transition group">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5"
                    class="group-hover:text-[#FF8F20]">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                    <polyline points="16 17 21 12 16 7" />
                    <line x1="21" y1="12" x2="9" y2="12" />
                </svg>
                <span>{{ __('Logout') }}</span>
            </button>
        </form>
    </div>
</aside>
