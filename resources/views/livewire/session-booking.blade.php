<div>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

        * {
            font-family: "Poppins", sans-serif;
        }

        /* Fix for SweetAlert overflow issues */
        .swal2-popup {
            padding: 1.5rem !important;
        }

        .swal2-html-container {
            overflow-x: hidden !important;
            padding: 0 !important;
        }

        .swal2-html-container input,
        .swal2-html-container select,
        .swal2-html-container textarea {
            max-width: 100% !important;
            box-sizing: border-box !important;
        }

        .booking-form-container {
            max-width: 100%;
            overflow-x: hidden;
        }

        .booking-form-container input,
        .booking-form-container select,
        .booking-form-container textarea {
            width: 100% !important;
            box-sizing: border-box !important;
        }
    </style>

    <!-- Hero Section -->
    <section
        class="bg-[#021F59] mt-2 mb-5 rounded-2xl bg-[url(https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop)] bg-blend-overlay bg-no-repeat bg-cover py-16 px-4 md:px-8">
        <div class="max-w-6xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-[#FF8F20] mb-4">Book a Session</h1>
            <p class="text-white text-lg max-w-3xl mx-auto">Reserve your studio time and bring your vision to life
            </p>
        </div>
    </section>
    @if (env('BOOKING_SESSIONS'))
        <!-- Booking Form Section -->
        <section class="py-16 px-4 bg-[#021F59]">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Booking Form -->
                    <div class="md:col-span-2">
                        <div class="bg-slate-400 backdrop-blur rounded-2xl p-6 md:p-8 border border-white/20">
                            <h2 class="text-2xl font-bold text-white mb-6">Book A Session</h2>

                            <div id="calendar" wire:ignore></div>
                        </div>
                    </div>

                    <!-- Booking Information Sidebar -->
                    <div class="space-y-6">
                        <!-- Pricing Information -->
                        <div class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20">
                            <h3 class="text-xl font-bold text-[#FF8F20] mb-4">Pricing Information</h3>
                            <div class="space-y-3 text-gray-300">
                                <div class="flex justify-between">
                                    <span>Standard Rate</span>
                                    <span class="text-white">KES 4,000/hour</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Live Production Package</span>
                                    <span class="text-white">KES 25,000/session</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Broadcast Package</span>
                                    <span class="text-white">KES 35,000/session</span>
                                </div>
                                <div class="border-t border-white/10 my-3 pt-3">
                                    <div class="flex justify-between font-semibold">
                                        <span>Deposit Required</span>
                                        <span class="text-[#FF8F20]">50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Studio Hours -->
                        <div class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20">
                            <h3 class="text-xl font-bold text-[#FF8F20] mb-4">Studio Hours</h3>
                            <div class="space-y-2 text-gray-300">
                                <div class="flex justify-between">
                                    <span>Monday - Friday</span>
                                    <span>9:00 AM - 8:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Saturday</span>
                                    <span>10:00 AM - 6:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Sunday</span>
                                    <span>By Appointment</span>
                                </div>
                            </div>
                        </div>

                        <!-- What's Included -->
                        <div class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20">
                            <h3 class="text-xl font-bold text-[#FF8F20] mb-4">What's Included</h3>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Technical support on-site</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>High-speed WiFi</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Complimentary refreshments</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="w-5 h-5 text-[#FF8F20]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Secure parking</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="bg-black/40 backdrop-blur rounded-2xl p-6 border border-white/20">
                            <h3 class="text-xl font-bold text-[#FF8F20] mb-4">Need Help?</h3>
                            <p class="text-gray-300 mb-3">Call or email us for assistance with your booking</p>
                            <div class="space-y-2">
                                <p class="text-white">📞 +254 700 123 456</p>
                                <p class="text-white">📧 bookings@samslivestudios.co.ke</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="py-8 px-4 bg-[#021F59]">
            <div class="max-w-6xl mx-auto justify-center items-center">
                <svg class="text-white mx-auto mb-2" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="100"
                    height="100" viewBox="0 0 50 50">
                    <path d="M 25 2 C 12.264481 2 2 12.264481 2 25 C 2 37.735519 12.264481
                                 48 25 48 C 37.735519 48 48 37.735519 48 25 C 48 12.264481 37.735519 2 25 2 z M 25 4 C 36.664481
                                  4 46 13.335519 46 25 C 46 36.664481 36.664481 46 25 46 C 13.335519 46 4 36.664481 4 25 C 4 13.335519 13.335519
                                   4 25 4 z M 25 11 A 3 3 0 0 0 25 17 A 3 3 0 0 0 25 11 z M 21 21 L 21 23 L 23 23 L 23 36 L 21 36 L 21 38 L 29 38
                                    L 29 36 L 27 36 L 27 21 L 21 21 z">
                    </path>
                </svg>
                <h1 class="text-white text-center text-3xl">
                    Sessions booking is currently unavailable!
                </h1>
            </div>
        </section>
    @endif
    <!-- Cancellation Policy Notice -->
    <section class="py-8 px-4 bg-[#021F59]">
        <div class="max-w-6xl mx-auto">
            <div class="bg-[#FF8F20]/10 border border-[#FF8F20]/30 rounded-xl p-4 text-center">
                <p class="text-gray-300 text-sm">
                    <span class="font-semibold text-[#FF8F20]">Cancellation Policy:</span>
                    Cancellations made 48+ hours before session receive full deposit refund.
                    Cancellations within 48 hours receive 50% refund.
                    No-shows forfeit the deposit.
                    <a href="{{ route('booking-policy') }}" class="text-[#FF8F20] hover:underline ml-1">Read full
                        policy →</a>
                </p>
            </div>
        </div>
    </section>
    
</div>
@script
<script>
        document.addEventListener("livewire:initialized", () => {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                slotDuration: '01:00:00',
                timeZone: 'Africa/Nairobi',
                selectable: true,
                selectMirror: true,
                snapDuration: '00:30:00',
                selectConstraint: {
                    startTime: '00:59:00',
                    endTime: '23:59:00'
                },
                events: @json($bookings),
                select: function(info) {
                    // Fix: Create dates in Nairobi timezone context
                    let startDate = new Date(info.startStr);
                    let endDate = new Date(info.endStr);

                    // Fix: Use Nairobi timezone for all date operations
                    const nairobiTimezone = 'Africa/Nairobi';

                    // Check if end date is the next day (common FullCalendar behavior)
                    if (endDate.toDateString() !== startDate.toDateString()) {
                        endDate = new Date(endDate);
                        endDate.setDate(endDate.getDate() - 1);
                    }

                    // VALIDATION 1: Check if booking spans multiple days
                    if (startDate.toDateString() !== endDate.toDateString()) {
                        Swal.fire({
                            title: 'Invalid Booking',
                            text: 'Bookings cannot span multiple days. Please select a time slot within a single day.',
                            icon: 'error',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#FF8F20'
                        });
                        return false;
                    }

                    // VALIDATION 2: Check if within operating hours
                    const startHour = startDate.getHours();
                    const startMinute = startDate.getMinutes();
                    const endHour = endDate.getHours();
                    const endMinute = endDate.getMinutes();

                    // VALIDATION 3: Check duration (max 15 hours)
                    const durationHours = (endDate - startDate) / (1000 * 60 * 60);
                    if (durationHours > 15) {
                        Swal.fire({
                            title: 'Booking Too Long',
                            text: `Maximum booking duration is 15 hours. Your selected duration is ${durationHours.toFixed(1)} hours.`,
                            icon: 'warning',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#FF8F20'
                        });
                        return false;
                    }

                    // Format date and time for display using Nairobi timezone
                    const formattedDate = startDate.toLocaleDateString('en-US', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                        timeZone: nairobiTimezone
                    });

                    const startTime = startDate.toLocaleTimeString('en-US', {
                        hour: '2-digit',
                        minute: '2-digit',
                        timeZone: nairobiTimezone
                    });

                    const endTime = endDate.toLocaleTimeString('en-US', {
                        hour: '2-digit',
                        minute: '2-digit',
                        timeZone: nairobiTimezone
                    });

                    // Show simplified booking form with fixed styling
                    Swal.fire({
                        title: 'Book a Studio Session',
                        html: `
                            <div class="booking-form-container" style="max-width: 100%; overflow-x: hidden;">
                                <div class="mb-4 p-3 bg-gray-100 rounded-lg">
                                    <p class="text-sm text-gray-600"><strong>Selected Date:</strong> ${formattedDate}</p>
                                    <p class="text-sm text-gray-600"><strong>Time Slot:</strong> ${startTime} - ${endTime}</p>
                                    <p class="text-sm text-gray-600"><strong>Duration:</strong> ${durationHours} ${durationHours === 1 ? 'hour' : 'hours'}</p>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Session Type *</label>
                                    <select id="sessionType" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #d1d5db; box-sizing: border-box;">
                                        <option value="">Select session type</option>
                                        <option value="live_production">🎥 Live Production</option>
                                        <option value="broadcast">📺 Broadcast Services</option>
                                        <option value="live_streaming">🌐 Live Streaming</option>
                                        <option value="audio_recording">🎙️ Audio Recording</option>
                                        <option value="post_production">✂️ Post-Production</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Number of Participants</label>
                                    <input type="number" id="participants" value="1" min="1" max="20" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #d1d5db; box-sizing: border-box;">
                                </div>
                                
                                <div class="mb-3">
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Project Details</label>
                                    <textarea id="projectDetails" rows="3" placeholder="Tell us about your project, goals, and any special requirements..." style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #d1d5db; box-sizing: border-box; resize: vertical;"></textarea>
                                </div>
                            </div>
                        `,
                        width: '550px',
                        showCancelButton: true,
                        confirmButtonText: 'Submit Booking Request',
                        cancelButtonText: 'Cancel',
                        confirmButtonColor: '#FF8F20',
                        cancelButtonColor: '#6c757d',
                        focusConfirm: false,
                        preConfirm: () => {
                            const sessionType = document.getElementById('sessionType')
                                .value;
                            const participants = document.getElementById('participants')
                                .value;
                            const projectDetails = document.getElementById('projectDetails')
                                .value.trim();

                            if (!sessionType) {
                                Swal.showValidationMessage('Please select a session type');
                                return false;
                            }

                            // FIX: Create dates that preserve Nairobi timezone
                            // Instead of toISOString() which converts to UTC,
                            // create datetime strings in Nairobi timezone format
                            const year = startDate.getFullYear();
                            const month = String(startDate.getMonth() + 1).padStart(2, '0');
                            const day = String(startDate.getDate()).padStart(2, '0');
                            const startHours = String(startDate.getHours()).padStart(2,
                                '0');
                            const startMinutes = String(startDate.getMinutes()).padStart(2,
                                '0');
                            const endHours = String(endDate.getHours()).padStart(2, '0');
                            const endMinutes = String(endDate.getMinutes()).padStart(2,
                                '0');

                            // Create Nairobi timezone datetime strings with offset
                            const startDateTime =
                                `${year}-${month}-${day}T${startHours}:${startMinutes}:00+03:00`;
                            const endDateTime =
                                `${year}-${month}-${day}T${endHours}:${endMinutes}:00+03:00`;

                            return {
                                session_type: sessionType,
                                participants: participants,
                                project_details: projectDetails,
                                start: startDateTime, // Now in Africa/Nairobi timezone format
                                end: endDateTime, // Now in Africa/Nairobi timezone format
                                duration: durationHours
                            };
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const bookingData = result.value;

                            // Show loading state
                            Swal.fire({
                                title: 'Submitting Booking...',
                                text: 'Please wait while we process your request',
                                allowOutsideClick: false,
                                didOpen: () => {
                                    Swal.showLoading();
                                }
                            });

                            // Dispatch to Livewire
                            Livewire.dispatch('addBooking', {
                                session_type: bookingData.session_type,
                                participants: bookingData.participants,
                                project_details: bookingData.project_details,
                                start: bookingData.start,
                                end: bookingData.end,
                                duration: bookingData.duration
                            });
                        }
                    });
                },
                @if (Auth::user())
                    eventClick: function(info) {
                        const event = info.event;

                        // FIX: Format dates in Nairobi timezone for display
                        const formatDateInNairobi = (date) => {
                            if (!date) return 'N/A';
                            return new Date(date).toLocaleString('en-US', {
                                timeZone: 'Africa/Nairobi',
                                hour12: false
                            });
                        };

                        Swal.fire({
                            title: 'Booking Details',
                            html: `
                                <div class="text-left">
                                    <div class="mb-4 p-3 bg-gray-100 rounded-lg">
                                        <p class="text-sm font-semibold text-gray-700 mb-2">Session Information</p>
                                        <p class="text-sm"><strong>📅 Date:</strong> ${event.start ? new Date(event.start).toLocaleDateString('en-US', { timeZone: 'Africa/Nairobi' }) : 'N/A'}</p>
                                        <p class="text-sm"><strong>⏰ Time:</strong> ${event.start ? new Date(event.start).toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', timeZone: 'Africa/Nairobi' }) : 'N/A'} - ${event.end ? new Date(event.end).toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', timeZone: 'Africa/Nairobi' }) : 'N/A'}</p>
                                        <p class="text-sm"><strong>🎬 Session Type:</strong> ${event.title}</p>
                                        <p class="text-sm"><strong>⏱️ Duration:</strong> ${event.extendedProps.duration || 'N/A'} hours</p>
                                        <p class="text-sm"><strong>👥 Participants:</strong> ${event.extendedProps.participants || 'N/A'}</p>
                                        <p class="text-sm"><strong>💰 Total Amount:</strong> KES ${event.extendedProps.total_amount ? event.extendedProps.total_amount.toLocaleString() : 'Not calculated yet'}</p>
                                        <p class="text-sm"><strong>💳 Payment Status:</strong> 
                                            <span class="px-2 py-1 rounded-full text-xs font-semibold" style="background: ${event.extendedProps.payment_status === 'paid' ? '#10B98120' : '#F59E0B20'}; color: ${event.extendedProps.payment_status === 'paid' ? '#10B981' : '#F59E0B'}">
                                                ${event.extendedProps.payment_status || 'Pending'}
                                            </span>
                                        </p>
                                        <p class="text-sm"><strong>📋 Booking Status:</strong> 
                                            <span class="px-2 py-1 rounded-full text-xs font-semibold" style="background: ${event.backgroundColor}20; color: ${event.backgroundColor}">
                                                ${event.extendedProps.status || 'Pending'}
                                            </span>
                                        </p>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <p class="text-sm font-semibold text-gray-700 mb-1">👤 Client Information</p>
                                        <p class="text-sm"><strong>Name:</strong> ${event.extendedProps.name || 'N/A'}</p>
                                        <p class="text-sm"><strong>Email:</strong> ${event.extendedProps.email || 'N/A'}</p>
                                        <p class="text-sm"><strong>Phone:</strong> ${event.extendedProps.phone || 'N/A'}</p>
                                    </div>
                                    
                                    ${event.extendedProps.project_details ? `
                                                                                                                <div class="mb-3">
                                                                                                                    <p class="text-sm font-semibold text-gray-700 mb-1">📝 Project Details</p>
                                                                                                                    <p class="text-sm text-gray-600">${event.extendedProps.project_details}</p>
                                                                                                                </div>
                                                                                                            ` : ''}
                                </div>
                            `,
                            width: '600px',
                            showConfirmButton: true,
                            confirmButtonText: 'Close',
                            confirmButtonColor: '#FF8F20'
                        });
                    }
                @endif
            });

            calendar.render();

            // Handle past days booking error
            Livewire.on('bookingPrevDays', (events) => {
                Swal.fire({
                    icon: 'error',
                    title: "Error!",
                    text: "Cannot book for past days!",
                    confirmButtonColor: '#FF8F20'
                });
                calendar.removeAllEvents();
                calendar.addEventSource(events);
            });

            // Handle events loaded
            Livewire.on('eventsLoaded', (events) => {
                calendar.removeAllEvents();
                calendar.addEventSource(events);
            });

            // Handle booking success
            Livewire.on('eventCreated', () => {
                Swal.fire({
                    title: 'Booking Request Submitted! 🎉',
                    text: 'Your booking request has been received successfully. We will contact you within 24 hours to confirm your session.',
                    icon: 'success',
                    confirmButtonText: 'Done',
                    confirmButtonColor: '#FF8F20'
                }).then(() => {
                    calendar.refetchEvents();
                });
            });

            // Handle booking error
            Livewire.on('bookingError', (errorData) => {
                Swal.fire({
                    title: 'Booking Failed',
                    text: errorData.message ||
                        'There was an error submitting your booking. Please try again.',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#FF8F20'
                });
            });
        });
    </script>
@endscript