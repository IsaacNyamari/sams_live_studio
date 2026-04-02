@section('description')
    <meta name="description"
        content="Read the booking policy for {{ config('app.name') }}. Understand the rules and guidelines for using our live production and streaming services.">
@endsection
@section('keywords')
    <meta name="keywords"
        content="Booking Policy, {{ config('app.name') }}, website usage, booking policy, user responsibilities, legal agreement">
@endsection
@section('featured_image')
    <meta property="og:image" content="{{ asset('images/terms/terms.png') }}" />
@endsection
<x-layouts.front-end.app>
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
                <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Booking Policy</h1>
                <p class="text-white text-lg max-w-3xl mx-auto">Everything you need to know about booking our studio
                    facilities</p>
            </div>
        </section>

        <!-- Content -->
        <section class="py-16 px-4 bg-[#000080]/80">
            <div class="max-w-full mx-auto">
                <div class="bg-black/40 backdrop-blur rounded-2xl p-8 md:p-12 border border-white/20">

                    <div class="space-y-8">
                        <!-- How to Book -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">How to Book</h2>
                            <p class="text-gray-300 leading-relaxed mb-4">Booking studio time at
                                {{ config('app.name') }}
                                is easy. Follow these steps:</p>
                            <ul class="list-decimal list-inside text-gray-300 space-y-2 ml-4">
                                <li>Contact us via phone, email, or our online booking form to check availability.</li>
                                <li>Specify your production type, duration, technical requirements, and preferred
                                    date/time.</li>
                                <li>Receive a confirmation email with your booking details and invoice.</li>
                                <li>Pay the 50% deposit to secure your booking.</li>
                                <li>Complete full payment before or on the day of your session.</li>
                            </ul>
                            <p class="text-gray-300 leading-relaxed mt-4">For urgent bookings (less than 48 hours
                                notice), full payment is required at the time of booking.</p>
                        </div>

                        <!-- Deposit Requirements -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Deposit Requirements</h2>
                            <div class="space-y-3">
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Standard
                                        Bookings:</span> 50% non-refundable deposit required to secure your session.</p>
                                <p class="text-gray-300 leading-relaxed"><span
                                        class="font-semibold text-white">Corporate/Institutional:</span> Deposit
                                    requirements may be waived with approved credit terms and signed agreement.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Multiple
                                        Sessions:</span> For bookings of 3+ sessions, a 30% deposit is required with
                                    balance due on first session date.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Payment
                                        Methods:</span> Deposits can be made via M-Pesa, bank transfer, or credit/debit
                                    card. M-Pesa payments should include your booking reference number.</p>
                            </div>
                        </div>

                        <!-- Cancellation Policy -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Cancellation Policy</h2>
                            <div class="overflow-x-auto">
                                <table class="w-full text-gray-300 text-sm">
                                    <thead class="border-b border-white/20">
                                        <tr class="text-left">
                                            <th class="pb-3 font-semibold text-white">Notice Period</th>
                                            <th class="pb-3 font-semibold text-white">Refund</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-white/10">
                                        <tr>
                                            <td class="py-3">More than 7 days</td>
                                            <td class="py-3">Full refund of deposit</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">48 hours to 7 days</td>
                                            <td class="py-3">50% refund of deposit</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">Less than 48 hours</td>
                                            <td class="py-3">No refund of deposit</td>
                                        </tr>
                                        <tr>
                                            <td class="py-3">No-show / Day of session</td>
                                            <td class="py-3">No refund, full session fee applies</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="text-gray-300 leading-relaxed mt-4">Refunds are processed within 5-7 business days
                                via the original payment method.</p>
                        </div>

                        <!-- Rescheduling Policy -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Rescheduling Policy</h2>
                            <div class="space-y-3">
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Free
                                        Rescheduling:</span> With 48+ hours notice, you may reschedule once at no
                                    additional cost.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Late
                                        Rescheduling:</span> Less than 48 hours notice will incur a 25% rescheduling fee
                                    of the session cost.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Multiple
                                        Reschedules:</span> The second reschedule requires a 25% fee regardless of
                                    notice period.</p>
                                <p class="text-gray-300 leading-relaxed"><span
                                        class="font-semibold text-white">Availability:</span> Rescheduled sessions are
                                    subject to studio availability.</p>
                            </div>
                        </div>

                        <!-- Session Duration & Overtime -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Session Duration & Overtime</h2>
                            <div class="space-y-3">
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Minimum
                                        Booking:</span> 2 hours for standard sessions, 4 hours for live production
                                    bookings.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Setup &
                                        Breakdown:</span> Included in your booked time. Please arrive promptly to
                                    maximize your session.</p>
                                <p class="text-gray-300 leading-relaxed"><span
                                        class="font-semibold text-white">Overtime:</span> Additional time is charged at
                                    1.5x the standard hourly rate, billed in 30-minute increments.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Late
                                        Start:</span> Sessions starting late due to client delay will still end at the
                                    scheduled time unless additional time is purchased.</p>
                            </div>
                        </div>

                        <!-- Technical Requirements -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Technical Requirements</h2>
                            <p class="text-gray-300 leading-relaxed mb-3">To ensure a smooth session, please provide the
                                following at least 72 hours before your booking:</p>
                            <ul class="list-disc list-inside text-gray-300 space-y-1 ml-4">
                                <li>Technical specifications and equipment needs</li>
                                <li>Number of participants/talent</li>
                                <li>Any special requirements (instruments, props, set design)</li>
                                <li>Audio or video playback files (if applicable)</li>
                                <li>Streaming destinations (YouTube, Facebook, etc.)</li>
                            </ul>
                            <p class="text-gray-300 leading-relaxed mt-3">We will confirm availability of requested
                                equipment and provide technical consultation as needed.</p>
                        </div>

                        <!-- Studio Amenities -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Studio Amenities</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>High-speed WiFi</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Climate-controlled studios</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Comfortable client lounge</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Parking available</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Coffee and refreshments</span>
                                </div>
                                <div class="flex items-center gap-2 text-gray-300">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Technical support on-site</span>
                                </div>
                            </div>
                        </div>

                        <!-- What to Bring -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">What to Bring</h2>
                            <ul class="list-disc list-inside text-gray-300 space-y-1 ml-4">
                                <li>Your content files (audio, video, presentations)</li>
                                <li>Any specific instruments or personal equipment (must be pre-approved)</li>
                                <li>External hard drives for file transfers</li>
                                <li>List of attendees (for access and capacity purposes)</li>
                                <li>Booking confirmation email</li>
                            </ul>
                        </div>

                        <!-- Late Arrival & No-Show -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Late Arrival & No-Show</h2>
                            <p class="text-gray-300 leading-relaxed mb-3"><span class="font-semibold text-white">Late
                                    Arrival:</span> Sessions begin at the scheduled time regardless of late arrival. No
                                time extension is guaranteed.</p>
                            <p class="text-gray-300 leading-relaxed"><span
                                    class="font-semibold text-white">No-Show:</span> If you do not arrive within 30
                                minutes of your scheduled start time without communication, your session will be
                                considered canceled, and the full session fee will be charged.</p>
                        </div>

                        <!-- Contact for Bookings -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Contact for Bookings</h2>
                            <p class="text-gray-300 leading-relaxed mb-2">For all booking inquiries, please contact:
                            </p>
                            <p class="text-gray-300">📞 <span class="text-[#FF8F20]">{{ env('STUDIO_PHONE') }}</span>
                            </p>
                            <p class="text-gray-300">📧 <span
                                    class="text-[#FF8F20]">bookings@samslivestudios.co.ke</span></p>
                            <p class="text-gray-300 mt-2">Office Hours: Monday - Friday, 9:00 AM - 6:00 PM</p>
                            <p class="text-gray-300">Weekend bookings available upon request</p>
                        </div>

                        <!-- Booking Agreement -->
                        <div class="bg-[#FF8F20]/10 border border-[#FF8F20]/30 rounded-lg p-4">
                            <p class="text-gray-200 text-sm leading-relaxed">By confirming your booking, you
                                acknowledge that you have read, understood, and agree to abide by this Booking Policy,
                                our Terms of Service, and Privacy Policy. All bookings are subject to studio
                                availability and final confirmation by {{ config('app.name') }}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.front-end.app>
