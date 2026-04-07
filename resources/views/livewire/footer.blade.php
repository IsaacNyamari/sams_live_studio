<div class="w-full">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <footer class="bg-[#021F59] text-gray-300">
        <!-- Main Footer Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 md:gap-12">
                <!-- Logo Section -->
                <div class="lg:col-span-1">
                    <a href="/" class="inline-block">
                        <x-application-logo class="w-32 mb-4" />
                    </a>
                    <p class="text-sm text-gray-400 mt-4 leading-relaxed">
                        Kenya's premier live production and broadcast facility.
                    </p>
                </div>

                {{-- <!-- Services Section -->
                <div>
                    <h3 class="text-[#FF8F20] font-semibold text-lg mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Live Production</a></li>
                        <li><a href="#" class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Broadcast Services</a></li>
                        <li><a href="#" class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Live Streaming</a></li>
                        <li><a href="#" class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Audio Recording</a></li>
                        <li><a href="#" class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Post-Production</a></li>
                    </ul>
                </div> --}}

                <!-- Company Section -->
                <div>
                    <h3 class="text-[#FF8F20] font-semibold text-lg mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">About Us</a>
                        <li>
                            <a href="{{ route('services') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Services</a>
                        </li>
                        {{-- <li>
                            <a href="#"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm inline-flex items-center gap-2">
                                Careers
                                <span class="text-xs text-white bg-[#FF8F20] rounded-md px-2 py-0.5">We're
                                    hiring!</span>
                            </a>
                        </li> --}}
                        <li><a href="{{ route('contact') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Contact
                                Us</a></li>
                    </ul>
                </div>

                <!-- Resources Section -->
                <div>
                    <h3 class="text-[#FF8F20] font-semibold text-lg mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('register') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Register</a>
                        </li>
                        {{-- <li>
                            <a href="#"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Studio
                                Tour</a></li>
                        <li><a href="#"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">FAQs</a></li> --}}
                        <li><a href="{{ route('login') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Client
                                Portal</a></li>
                    </ul>
                </div>

                <!-- Legal Section -->
                <div>
                    <h3 class="text-[#FF8F20] font-semibold text-lg mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('privacy') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Privacy
                                Policy</a></li>
                        <li><a href="{{ route('terms') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Terms of
                                Service</a></li>
                        <li><a href="{{ route('booking-policy') }}"
                                class="hover:text-[#FF8F20] transition duration-300 text-gray-300 text-sm">Booking
                                Policy</a></li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-white/10 my-8"></div>

            <!-- Bottom Section - Contact & Social -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-center">
                <!-- Contact Info -->
                <div class="space-y-2">
                    <h3 class="text-[#FF8F20] font-semibold text-lg mb-3">Contact Us</h3>
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5"
                            class="text-[#FF8F20] mt-0.5 flex-shrink-0">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span class="text-sm text-gray-300">Westlands, Nairobi, Kenya</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5"
                            class="text-[#FF8F20] flex-shrink-0">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        <span class="text-sm text-gray-300">{{ env('STUDIO_PHONE') }}</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5"
                            class="text-[#FF8F20] flex-shrink-0">
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                            <path d="m22 7-10 7L2 7" />
                        </svg>
                        <span class="text-sm text-gray-300">{{ env('STUDIO_EMAIL') }}</span>
                    </div>
                </div>

                <!-- Tagline -->
                <div class="md:text-center lg:text-left">
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Delivering professional quality, technical excellence, and reliable service for all your
                        production needs.
                    </p>
                </div>

                <!-- Social Links -->
                <div class="flex justify-start md:justify-end lg:justify-end gap-4">
                    <a href="{{ env("TIKTOK_URL") }}" target="_blank" rel="noreferrer"
                        class="w-10 h-10 rounded-full bg-white/10 hover:bg-[#FF8F20] flex items-center justify-center transition duration-300 group">
                        {{-- tiktok --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="18" height="18"
                            viewBox="0 0 32 32" version="1.1">
                            
                            <path
                                d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z" />
                        </svg>
                    </a>
                    <a href="{{ env("FACEBOOK_URL") }}" target="_blank" rel="noreferrer"
                        class="w-10 h-10 rounded-full bg-white/10 hover:bg-[#FF8F20] flex items-center justify-center transition duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5"
                            class="text-gray-300 group-hover:text-gray-900 transition">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <a href="{{ env("INSTAGRAM_URL") }}" target="_blank" rel="noreferrer"
                        class="w-10 h-10 rounded-full bg-white/10 hover:bg-[#FF8F20] flex items-center justify-center transition duration-300 group">
                    {{-- instagram icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5"
                            class="text-gray-300 group-hover:text-gray-900 transition">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </a>
                    <a href="{{ env("YOUTUBE_URL") }}" target="_blank" rel="noreferrer"
                        class="w-10 h-10 rounded-full bg-white/10 hover:bg-[#FF8F20] flex items-center justify-center transition duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="1.5"
                            class="text-gray-300 group-hover:text-gray-900 transition">
                            <path
                                d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17" />
                            <path d="m10 15 5-3-5-3z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-6 border-t border-white/10 text-center">
                <p class="text-sm text-gray-400">
                    © {{ date('Y') }} <a href="/"
                        class="hover:text-[#FF8F20] transition">{{ config('app.name') }}</a>. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</div>
