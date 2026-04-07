@section('description')
    <meta name="description" content="Read our terms of service for using {{ config('app.name') }}'s website and services.">
@endsection
@section('keywords')
    <meta name="keywords"
        content="Terms of Service, {{ config('app.name') }}, website usage, service terms, user responsibilities, legal agreement">
@endsection
@section('featured_image')
    <meta property="og:image" content="{{ asset('images/terms/terms.png') }}" />
@endsection
@extends('frontend')
@section('content')
    <div>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

            * {
                font-family: "Poppins", sans-serif;
            }
        </style>

        <!-- Hero Section -->
        <section
            class="bg-[#021F59] mt-2 mb-5 rounded-2xl bg-[url(https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop)] bg-blend-overlay bg-no-repeat bg-cover py-20 px-4 md:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Terms of Service</h1>
                <p class="text-white text-lg max-w-3xl mx-auto">Last updated: {{ date('F j, Y') }}</p>
            </div>
        </section>

        <!-- Content -->
        <section class="py-16 px-4 bg-[#021F59]">
            <div class="max-w-full mx-auto">
                <div class="bg-black/40 backdrop-blur rounded-2xl p-8 md:p-12 border border-white/20">

                    <div class="space-y-8">
                        <!-- Acceptance of Terms -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Acceptance of Terms</h2>
                            <p class="text-gray-300 leading-relaxed">By accessing or using {{ config('app.name') }}'s
                                website, services, and facilities (collectively, the "Services"), you agree to be bound
                                by these Terms of Service ("Terms"). If you do not agree to these Terms, please do not
                                use our Services.</p>
                        </div>

                        <!-- Services Description -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Services Description</h2>
                            <p class="text-gray-300 leading-relaxed">{{ config('app.name') }} provides professional live
                                production, broadcast services, audio recording, and post-production facilities. Our
                                Services include studio rentals, equipment usage, technical crew services, and related
                                production support. Specific service details, pricing, and availability are subject to
                                change and will be confirmed at the time of booking.</p>
                        </div>

                        <!-- Booking and Payment -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Booking and Payment</h2>
                            <div class="space-y-3">
                                <p class="text-gray-300 leading-relaxed"><span
                                        class="font-semibold text-white">Deposits:</span> A non-refundable deposit of
                                    50% is required to secure all studio bookings. Full payment must be made before the
                                    session start time unless otherwise agreed in writing.</p>
                                <p class="text-gray-300 leading-relaxed"><span
                                        class="font-semibold text-white">Pricing:</span> All prices are quoted in Kenyan
                                    Shillings (KES) and are subject to change without notice. Applicable taxes will be
                                    added to all invoices.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Payment
                                        Methods:</span> We accept M-Pesa, Visa, Mastercard, and bank transfers. Payment
                                    must be cleared before session commencement.</p>
                                <p class="text-gray-300 leading-relaxed"><span
                                        class="font-semibold text-white">Invoicing:</span> Invoices for corporate
                                    clients are due within 14 days of receipt unless prior arrangements have been made.
                                </p>
                            </div>
                        </div>

                        <!-- Cancellation and Rescheduling -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Cancellation and Rescheduling</h2>
                            <div class="space-y-3">
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Cancellation
                                        by Client:</span></p>
                                <ul class="list-disc list-inside text-gray-300 space-y-1 ml-4">
                                    <li>More than 7 days notice: Full refund of deposit</li>
                                    <li>48 hours to 7 days notice: 50% refund of deposit</li>
                                    <li>Less than 48 hours notice: No refund of deposit</li>
                                </ul>
                                <p class="text-gray-300 leading-relaxed mt-3"><span
                                        class="font-semibold text-white">Rescheduling:</span> Sessions may be
                                    rescheduled with at least 48 hours notice at no additional charge. Rescheduling
                                    within 48 hours may incur a fee of 25% of the session cost.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Cancellation
                                        by
                                        {{ config('app.name') }}:</span> In the rare event we need to cancel a session
                                    due to technical issues or emergencies, we will provide a full refund or reschedule
                                    at no additional cost.</p>
                            </div>
                        </div>

                        <!-- Studio Usage Policies -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Studio Usage Policies</h2>
                            <div class="space-y-3">
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Setup
                                        Time:</span> Booked time includes setup and breakdown. Please arrive promptly to
                                    maximize your session time.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Equipment
                                        Handling:</span> Clients are
                                    responsible for any damage to studio equipment caused by negligence or improper
                                    handling. Repair or replacement costs will be charged accordingly.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Prohibited
                                        Content:</span> We reserve the right
                                    to refuse or terminate sessions involving illegal activities, hate speech, explicit
                                    violence, or content that violates Kenyan law.</p>
                                <p class="text-gray-300 leading-relaxed"><span
                                        class="font-semibold text-white">Guests:</span> Additional guests must be
                                    approved in advance. Maximum capacity limits must be respected for safety and
                                    quality.</p>
                                <p class="text-gray-300 leading-relaxed"><span class="font-semibold text-white">Food and
                                        Beverages:</span> Only water is permitted in the studio areas. Food and other
                                    beverages must be consumed in designated areas.</p>
                            </div>
                        </div>

                        <!-- Intellectual Property -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Intellectual Property</h2>
                            <p class="text-gray-300 leading-relaxed mb-3">All content created during your session
                                belongs to you, subject to the following:</p>
                            <ul class="list-disc list-inside text-gray-300 space-y-1 ml-4">
                                <li>You retain full ownership of your recordings and productions.</li>
                                <li>{{ config('app.name') }} retains ownership of its equipment, facilities, and any
                                    pre-existing materials.</li>
                                <li>We may request permission to use excerpts for promotional purposes, which you may
                                    grant or deny.</li>
                                <li>You are responsible for obtaining all necessary licenses and permissions for content
                                    you produce.</li>
                            </ul>
                        </div>

                        <!-- Confidentiality -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Confidentiality</h2>
                            <p class="text-gray-300 leading-relaxed">We respect the confidentiality of your projects and
                                sessions. Our staff is trained to maintain discretion. We will not share your content or
                                project details with third parties without your consent, except as required by law.</p>
                        </div>

                        <!-- Liability -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Liability</h2>
                            <p class="text-gray-300 leading-relaxed mb-3">To the maximum extent permitted by law,
                                {{ config('app.name') }} shall not be liable for:</p>
                            <ul class="list-disc list-inside text-gray-300 space-y-1 ml-4">
                                <li>Any indirect, incidental, or consequential damages.</li>
                                <li>Loss of data, revenue, or business opportunities.</li>
                                <li>Technical issues beyond our reasonable control.</li>
                                <li>Client property left in the studio beyond the agreed session time.</li>
                            </ul>
                            <p class="text-gray-300 leading-relaxed mt-3">Our total liability shall not exceed the
                                amount paid for the specific session in question.</p>
                        </div>

                        <!-- Indemnification -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Indemnification</h2>
                            <p class="text-gray-300 leading-relaxed">You agree to indemnify and hold harmless
                                {{ config('app.name') }}, its employees, and affiliates from any claims, damages, or
                                expenses arising from your use of our Services, violation of these Terms, or
                                infringement of any third-party rights.</p>
                        </div>

                        <!-- Force Majeure -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Force Majeure</h2>
                            <p class="text-gray-300 leading-relaxed">We shall not be liable for delays or failure to
                                perform resulting from circumstances beyond our reasonable control, including but not
                                limited to natural disasters, power outages, equipment failures, or government actions.
                            </p>
                        </div>

                        <!-- Modifications -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Modifications to Services and Terms</h2>
                            <p class="text-gray-300 leading-relaxed">We reserve the right to modify or discontinue our
                                Services at any time without notice. We may update these Terms periodically. Continued
                                use of our Services after changes constitutes acceptance of the updated Terms.</p>
                        </div>

                        <!-- Governing Law -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Governing Law</h2>
                            <p class="text-gray-300 leading-relaxed">These Terms shall be governed by and construed in
                                accordance with the laws of the Republic of Kenya. Any disputes arising under these
                                Terms shall be subject to the exclusive jurisdiction of the courts of Kenya.</p>
                        </div>

                        <!-- Contact Information -->
                        <div>
                            <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Contact Us</h2>
                            <p class="text-gray-300 leading-relaxed mb-2">For questions about these Terms of Service,
                                please contact us at:</p>
                            <p class="text-gray-300">{{ config('app.name') }}</p>
                            <p class="text-gray-300">Westlands, Nairobi, Kenya</p>
                            <p class="text-gray-300">Email: <span class="text-[#FF8F20]">legal@samslivestudios.co.ke</span>
                            </p>
                            <p class="text-gray-300">Phone: <span class="text-[#FF8F20]">{{ env('STUDIO_PHONE') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
