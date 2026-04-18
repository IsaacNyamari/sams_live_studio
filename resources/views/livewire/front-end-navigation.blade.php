<div>
    <div class="text-sm text-white w-full max-w-full z-50">
        {{-- <div
            class="w-full py-2.5 font-medium text-sm text-white text-center bg-gradient-to-r from-[#FF8F20]/60 via-[#FF8F20] to-[#E0724A]/100">
            <p>Special Deal: Register and list your property now!</p>
        </div> --}}
        <nav
            class="relative navbar-dark h-[70px] dark:text-white flex items-center justify-between px-6 md:px-16 lg:px-24 xl:px-32 py-4  dark:bg-[#010E22]/90 text-gray-900 transition-all shadow">

            <a href="/" class="flex flex-row gap-2 align-middle content-center items-center">
                <x-application-logo class="w-fit h-16" />
                <h2 class="h2 dark:text-white md:hidden">{{ config('app.name') }}</h2>
            </a>
            <ul class="hidden md:flex items-center space-x-8 md:space-x-2 md:pl-0">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                    {{ __('Services') }}
                </x-nav-link>
                @if (env('LIVESTREAM_SWITCH'))
                    <x-nav-link :href="route('live')" :active="request()->routeIs('live')">
                        {{ __('Live') }}
                    </x-nav-link>
                @endif
                <x-nav-link :href="route('academy')" :active="request()->routeIs('academy')">
                    {{ __('Academy') }}
                </x-nav-link>
                <x-nav-link :href="route('donate')" :active="request()->routeIs('donate')">
                    {{ __('Donate') }}
                </x-nav-link>
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                    {{ __('Contact') }}
                </x-nav-link>

                @if (Auth::user())
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <x-danger-button>{{ __('Logout') }}</x-danger-button>
                    </form>
                @else
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-nav-link>
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-nav-link>
                @endif
            </ul>

            <button aria-label="menu-btn" type="button"
                class="menu-btn inline-block md:hidden active:scale-90 transition dark:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                    class="text-gray-900 dark:text-white">
                    <path
                        d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z"
                        fill="currentColor" />
                </svg>
            </button>

            <div class="mobile-menu absolute top-[70px] left-0 w-full bg-white z-50 shadow-sm p-6 hidden md:hidden">
                <ul class="flex flex-col space-y-4 text-lg">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                        {{ __('About') }}
                    </x-nav-link>
                    <x-nav-link :href="route('services')" :active="request()->routeIs('services')">
                        {{ __('Services') }}
                    </x-nav-link>
                    @if (env('LIVESTREAM_SWITCH'))
                        <x-nav-link :href="route('live')" :active="request()->routeIs('live')">
                            {{ __('Live') }}
                        </x-nav-link>
                    @endif
                    <x-nav-link :href="route('academy')" :active="request()->routeIs('academy')">
                        {{ __('Academy') }}
                    </x-nav-link>
                    <x-nav-link :href="route('donate')" :active="request()->routeIs('donate')">
                        {{ __('Donate') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')">
                        {{ __('Contact') }}
                    </x-nav-link>

                    @if (Auth::user())
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <x-danger-button>{{ __('Logout') }}</x-danger-button>
                        </form>
                    @else
                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Register') }}
                        </x-nav-link>
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Login') }}
                        </x-nav-link>
                    @endif
                </ul>
            </div>
        </nav>
    </div>

    <script>
        const menuButtons = document.querySelectorAll('.menu-btn');
        const mobileMenus = document.querySelectorAll('.mobile-menu');

        menuButtons.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                mobileMenus[index].classList.toggle('hidden');
            });
        });
    </script>
</div>
