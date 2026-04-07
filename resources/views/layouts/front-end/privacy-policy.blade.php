@extends('frontend')
@section('content')
@section('description')
    <meta name="description"
        content="Read the privacy policy of {{ config('app.name') }}. Learn how we collect, use, and protect your information when you use our live streaming services.">
@endsection
@section('keywords')
    <meta name="keywords"
        content="Privacy Policy, {{ config('app.name') }}, data collection, information use, data protection, user privacy, live streaming services">
@endsection
@section('featured_image')
    <meta property="og:image" content="{{ asset('images/privacy/confidential.jpg') }}" />
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
        class="bg-[#021F59] mt-2 mb-5 rounded-2xl bg-[url(https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop)] bg-blend-overlay bg-no-repeat bg-cover py-20 px-4 md:px-8">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Privacy Policy</h1>
            <p class="text-white text-lg max-w-3xl mx-auto">Last updated: {{ date('F j, Y') }}</p>
        </div>
    </section>

    <!-- Content -->
    <section class="py-16 px-4 bg-[#021F59]">
        <div class="max-w-full mx-auto">
            <div class="bg-black/40 backdrop-blur rounded-2xl p-8 md:p-12 border border-white/20">

                <div class="space-y-8">
                    <!-- Introduction -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Introduction</h2>
                        <p class="text-gray-300 leading-relaxed mb-4">At {{ config('app.name') }} ("we," "our," or
                            "us"), we are committed to protecting your privacy. This Privacy Policy explains how we
                            collect, use, disclose, and safeguard your information when you visit our website, use our
                            services, or interact with our studio.</p>
                        <p class="text-gray-300 leading-relaxed">Please read this Privacy Policy carefully. By accessing
                            or using our services, you acknowledge that you have read, understood, and agree to be bound
                            by the terms of this Privacy Policy.</p>
                    </div>

                    <!-- Information We Collect -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Information We Collect</h2>
                        <p class="text-gray-300 leading-relaxed mb-4">We may collect the following types of information:
                        </p>
                        <ul class="list-disc list-inside text-gray-300 space-y-2 ml-4">
                            <li><span class="font-semibold text-white">Personal Information:</span> Name, email address,
                                phone number, billing address, and company details.</li>
                            <li><span class="font-semibold text-white">Booking Information:</span> Session dates,
                                services requested, project details, and production requirements.</li>
                            <li><span class="font-semibold text-white">Payment Information:</span> Billing details,
                                transaction history, and payment method information (processed securely through our
                                payment partners).</li>
                            <li><span class="font-semibold text-white">Technical Data:</span> IP address, browser type,
                                device information, and usage data when you visit our website.</li>
                            <li><span class="font-semibold text-white">Communication Data:</span> Records of your
                                communications with us via email, phone, or through our contact forms.</li>
                        </ul>
                    </div>

                    <!-- How We Use Your Information -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">How We Use Your Information</h2>
                        <p class="text-gray-300 leading-relaxed mb-4">We use the information we collect to:</p>
                        <ul class="list-disc list-inside text-gray-300 space-y-2 ml-4">
                            <li>Process and manage your studio bookings and service requests.</li>
                            <li>Communicate with you about your bookings, inquiries, and service updates.</li>
                            <li>Provide customer support and respond to your questions.</li>
                            <li>Send you important information about your sessions, studio policies, and service
                                changes.</li>
                            <li>Improve our services, website functionality, and user experience.</li>
                            <li>Process payments and prevent fraudulent transactions.</li>
                            <li>Comply with legal obligations and enforce our terms of service.</li>
                        </ul>
                    </div>

                    <!-- Information Sharing -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Information Sharing</h2>
                        <p class="text-gray-300 leading-relaxed mb-4">We do not sell, trade, or rent your personal
                            information to third parties. We may share your information in the following circumstances:
                        </p>
                        <ul class="list-disc list-inside text-gray-300 space-y-2 ml-4">
                            <li><span class="font-semibold text-white">Service Providers:</span> With trusted
                                third-party vendors who assist us in operating our business (payment processors, booking
                                systems, analytics providers).</li>
                            <li><span class="font-semibold text-white">Legal Requirements:</span> When required by law,
                                court order, or to protect our rights, property, or safety.</li>
                            <li><span class="font-semibold text-white">Business Transfers:</span> In connection with a
                                merger, acquisition, or sale of assets.</li>
                            <li><span class="font-semibold text-white">With Your Consent:</span> When you have given us
                                explicit permission to share your information.</li>
                        </ul>
                    </div>

                    <!-- Data Security -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Data Security</h2>
                        <p class="text-gray-300 leading-relaxed">We implement appropriate technical and organizational
                            security measures to protect your personal information from unauthorized access, disclosure,
                            alteration, or destruction. These include encryption, secure servers, access controls, and
                            regular security assessments. However, no method of transmission over the internet or
                            electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
                    </div>

                    <!-- Data Retention -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Data Retention</h2>
                        <p class="text-gray-300 leading-relaxed">We retain your personal information for as long as
                            necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention
                            period is required or permitted by law. We may retain certain information for legitimate
                            business purposes, such as record-keeping, fraud prevention, and compliance with legal
                            obligations.</p>
                    </div>

                    <!-- Your Rights -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Your Rights</h2>
                        <p class="text-gray-300 leading-relaxed mb-4">Depending on your location, you may have the
                            following rights regarding your personal information:</p>
                        <ul class="list-disc list-inside text-gray-300 space-y-2 ml-4">
                            <li>Access and receive a copy of your personal information.</li>
                            <li>Request correction of inaccurate or incomplete information.</li>
                            <li>Request deletion of your personal information.</li>
                            <li>Object to or restrict processing of your information.</li>
                            <li>Withdraw consent at any time (where processing is based on consent).</li>
                            <li>Data portability (receive your data in a structured format).</li>
                        </ul>
                        <p class="text-gray-300 leading-relaxed mt-4">To exercise these rights, please contact us at
                            <span class="text-[#FF8F20]">{{ env('STUDIO_PHONE') }}</span>.</p>
                    </div>

                    <!-- Cookies -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Cookies and Tracking Technologies</h2>
                        <p class="text-gray-300 leading-relaxed">We use cookies and similar tracking technologies to
                            enhance your experience on our website. Cookies are small files stored on your device that
                            help us understand how you interact with our site. You can control cookie preferences
                            through your browser settings, but disabling cookies may affect website functionality.</p>
                    </div>

                    <!-- Third-Party Links -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Third-Party Links</h2>
                        <p class="text-gray-300 leading-relaxed">Our website may contain links to third-party websites,
                            services, or applications. We are not responsible for the privacy practices or content of
                            these third parties. We encourage you to review the privacy policies of any third-party
                            sites you visit.</p>
                    </div>

                    <!-- Children's Privacy -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Children's Privacy</h2>
                        <p class="text-gray-300 leading-relaxed">Our services are not directed to individuals under the
                            age of 13. We do not knowingly collect personal information from children. If you believe we
                            have collected information from a child, please contact us immediately.</p>
                    </div>

                    <!-- Updates to This Policy -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Updates to This Policy</h2>
                        <p class="text-gray-300 leading-relaxed">We may update this Privacy Policy from time to time to
                            reflect changes in our practices or legal requirements. We will notify you of any material
                            changes by posting the updated policy on this page with a new "Last updated" date. We
                            encourage you to review this policy periodically.</p>
                    </div>

                    <!-- Contact Us -->
                    <div>
                        <h2 class="text-2xl font-bold text-[#FF8F20] mb-4">Contact Us</h2>
                        <p class="text-gray-300 leading-relaxed mb-2">If you have questions about this Privacy Policy or
                            our data practices, please contact us at:</p>
                        <p class="text-gray-300">{{ config('app.name') }}</p>
                        <p class="text-gray-300">Westlands, Nairobi, Kenya</p>
                        <p class="text-gray-300">Email: <span
                                class="text-[#FF8F20]">{{ env('STUDIO_EMAIL') }}</span></p>
                        <p class="text-gray-300">Phone: <span class="text-[#FF8F20]">{{ env('STUDIO_PHONE') }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
