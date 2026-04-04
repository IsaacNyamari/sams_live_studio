<x-layouts.front-end.app>
    @section('description')
        <meta name="description"
            content="Get in touch with {{ config('app.name') }}. Have questions or want to book a session? Reach out to our team.">
    @endsection
    @section('keywords')
        <meta name="keywords" content="Contact {{ config('app.name') }}, inquiries, booking, live streaming, events">
    @endsection
    @section('featured_image')
        <meta property="og:image" content="{{ asset('images/contact/contact.jpg') }}" />
    @endsection
    <div>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

            * {
                font-family: "Poppins", sans-serif;
            }
        </style>

        <!-- Hero Section -->
        <section
            class="bg-[#000080]/80 mt-2 mb-5 rounded-2xl bg-[url(https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop)] bg-blend-overlay bg-no-repeat bg-cover py-20 px-4 md:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Contact Us</h1>
                <p class="text-white text-lg max-w-3xl mx-auto">Ready to bring your vision to life? Get in touch with our
                    team today.</p>
            </div>
        </section>

        <!-- Contact Information & Form -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">Get In Touch</h2>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-[#FF8F20]/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Phone</h3>
                                <p class="text-gray-300">{{ env('STUDIO_PHONE') }}</p>
                                <p class="text-gray-300">{{ env('STUDIO_PHONE_ALT') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-[#FF8F20]/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                    <rect x="2" y="4" width="20" height="16" rx="2" />
                                    <path d="m22 7-10 7L2 7" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Email</h3>
                                <p class="text-gray-300">{{ env('STUDIO_EMAIL') }}</p>
                                <p class="text-gray-300">{{ env('BOOKINGS_EMAIL') }}</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-[#FF8F20]/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Location</h3>
                                <p class="text-gray-300">Westlands, Nairobi, Kenya</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-[#FF8F20]/20 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="#FF8F20" stroke-width="1.5">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold mb-1">Business Hours</h3>
                                <p class="text-gray-300">Monday - Friday: 9am - 8pm</p>
                                <p class="text-gray-300">Saturday: 10am - 6pm</p>
                                <p class="text-gray-300">Sunday: By appointment</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-8">
                        <h3 class="text-white font-semibold mb-4">Follow Us</h3>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-10 h-10 bg-[#FF8F20]/20 rounded-full flex items-center justify-center hover:bg-[#FF8F20] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-[#FF8F20]/20 rounded-full flex items-center justify-center hover:bg-[#FF8F20] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-[#FF8F20]/20 rounded-full flex items-center justify-center hover:bg-[#FF8F20] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5">
                                    <rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18" />
                                    <path d="M7 2v20M17 2v20M2 12h20M2 7h5M2 17h5M17 17h5M17 7h5" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-[#FF8F20]/20 rounded-full flex items-center justify-center hover:bg-[#FF8F20] transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5">
                                    <path
                                        d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />
                                    <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20">
                    <h2 class="text-2xl font-bold text-white mb-6">Send Us a Message</h2>
                    <form action="{{ route('contact-form.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-300 mb-2">Full Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:border-[#FF8F20]">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-gray-300 mb-2">Email Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:border-[#FF8F20]">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-gray-300 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:border-[#FF8F20]">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="service" class="block text-gray-300 mb-2">Service Interested In</label>
                            <select id="service" name="service"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-black focus:outline-none focus:border-[#FF8F20]">
                                <option value="live-production">Live Production</option>
                                <option value="podcast-recording">Podcast Recording</option>
                                <option value="music-recording">Music Recording</option>
                                <option value="streaming">Streaming Services</option>
                                <option value="other">Other</option>
                            </select>
                            @error('service')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="message" class="block text-gray-300 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:border-[#FF8F20]"></textarea>
                            @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit"
                            class="w-full bg-[#FF8F20] hover:bg-[#FF8F20]/90 text-gray-900 font-semibold py-3 rounded-lg transition">Send
                            Message</button>
                    </form>

                    @session('success')
                        <div class="mt-4 p-4 bg-green-500 text-white rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endsession

                    @session('error')
                        <div class="mt-4 p-4 bg-red-500 text-white rounded-lg">
                            {{ session('error') }}
                        </div>
                    @endsession
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl font-bold text-white text-center mb-8">Find Us</h2>
                <div class="rounded-2xl overflow-hidden h-96">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.814094675337!2d36.803605!3d-1.267205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173c0f5b3d2b%3A0x8b7e3c5e8f2d7a3!2sCBD%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1700000000000!5m2!1sen!2ske"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>
    </div>
</x-layouts.front-end.app>
