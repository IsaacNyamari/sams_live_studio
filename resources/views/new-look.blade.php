@extends('frontend')
@section('content')
    <section class="max-w-full px-4  bg-[#010812]/100 flex flex-col justify-between gap-6">
        <div class="w-full px-4 sm:px-6 md:px-8 lg:px-2 py-8 sm:py-10 lg:py-16">
            <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-8 lg:gap-12 items-center">

                <!-- Left Content -->
                <div class="space-y-6">
                    <p class="uppercase text-[#D4A44C] font-semibold tracking-wide text-sm sm:text-base">
                        East Africa's Premier
                    </p>

                    <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl font-bold leading-tight">
                        LIVE PRODUCTION & STREAMING STUDIO
                    </h1>

                    <p class="text-white/90 text-base sm:text-lg leading-relaxed">
                        Broadcast quality productions that bring your vision to life with precision, excellence, and
                        creativity.
                    </p>

                    <!-- Feature Cards -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <div class="flex items-start space-x-3 border-r border-gray-500/50 pr-4 flex-1">
                            <i class="fa fa-video-camera fa-2x text-[#EEC667] mt-1 flex-shrink-0"></i>
                            <div class="text-white text-xs uppercase leading-tight">
                                4K multi-camera<br>production
                            </div>
                        </div>

                        <div class="flex items-start space-x-3 border-r border-gray-500/50 pr-4 flex-1">
                            <i class="fas fa-music fa-2x text-[#EEC667] mt-1 flex-shrink-0"></i>
                            <div class="text-white text-xs uppercase leading-tight">
                                broadcast audio<br>48-channel mixing
                            </div>
                        </div>

                        <div class="flex items-start space-x-3 flex-1">
                            <i class="fas fa-tower-broadcast fa-2x text-[#EEC667] mt-1 flex-shrink-0"></i>
                            <div class="text-white text-xs uppercase leading-tight">
                                live streaming<br>multi-platform
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <button
                            class="bg-gradient-to-r from-[#AF8640] via-[#E7BA60] to-[#AF8640] text-white px-8 py-3 rounded-md font-semibold shadow-lg hover:opacity-90 transition-opacity duration-300 flex items-center justify-center gap-2">
                            BOOK A SESSION
                            <i class="fa fa-angle-right text-[#010812]" aria-hidden="true"></i>
                        </button>

                        <button
                            class="bg-[#010812] text-white border-1 border border-[#C29A4E]/80 px-8 py-3 rounded-md font-semibold shadow-lg hover:bg-[#1a2440] transition-colors duration-300 flex items-center justify-center gap-2">
                            GET A QUOTE
                            <i class="fa fa-angle-right text-[#AF8640]" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <!-- Right Image -->
                <div
                    class="flex justify-center items-center border-6 border border-[#C29A4E]/100 rounded-lg mt-8 lg:mt-0 w-full">
                    <div x-data="{
                        slides: [{
                                imgSrc: '{{ asset('images/pexels-qaarif-10395639.jpg') }}',
                                imgAlt: 'Live production studio with professional equipment',
                                title: '4K Multi-Camera Production',
                                description: 'Professional multi-camera setup capturing every angle with crystal clear 4K resolution.'
                            },
                            {
                                imgSrc: 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?q=80&w=1170&auto=format&fit=crop',
                                imgAlt: 'Professional audio mixing console',
                                title: 'Broadcast Audio Mixing',
                                description: '48-channel digital mixing with pristine sound quality for professional broadcasts.'
                            },
                            {
                                imgSrc: 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?q=80&w=1170&auto=format&fit=crop',
                                imgAlt: 'Live streaming control room',
                                title: 'Multi-Platform Streaming',
                                description: 'Stream simultaneously to multiple platforms with low latency and high reliability.'
                            }
                        ],
                        currentSlideIndex: 0,
                        previous() {
                            this.currentSlideIndex = this.currentSlideIndex === 0 ?
                                this.slides.length - 1 :
                                this.currentSlideIndex - 1;
                        },
                        next() {
                            this.currentSlideIndex = this.currentSlideIndex === this.slides.length - 1 ?
                                0 :
                                this.currentSlideIndex + 1;
                        },
                        goToSlide(index) {
                            this.currentSlideIndex = index;
                        }
                    }" class="relative w-full overflow-hidden rounded-lg shadow-2xl"
                        x-init="setInterval(() => next(), 5000)">

                        <!-- Slides Container -->
                        <div class="relative h-[250px] md:h-[300px] lg:h-[400px] w-full">
                            <template x-for="(slide, index) in slides">
                                <div x-show="currentSlideIndex === index"
                                    class="absolute inset-0 transition-opacity duration-700"
                                    x-transition:enter="transition ease-out duration-700"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-300"
                                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

                                    <!-- Background Image -->
                                    <img class="absolute inset-0 w-full h-full object-cover" :src="slide.imgSrc"
                                        :alt="slide.imgAlt" />

                                    <!-- Gradient Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent">
                                    </div>

                                    <!-- Content -->
                                    <div
                                        class="absolute inset-x-0 bottom-0 flex flex-col items-center justify-end gap-3 p-6 md:p-10 text-center">
                                        <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white max-w-3xl"
                                            x-text="slide.title">
                                        </h3>
                                        <p class="text-sm md:text-base text-white/90 max-w-2xl" x-text="slide.description">
                                        </p>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <!-- Previous Button -->
                        <button type="button"
                            class="absolute left-3 md:left-5 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-10 h-10 md:w-12 md:h-12 rounded-full bg-black/50 hover:bg-black/70 text-white transition-all duration-300 hover:scale-110"
                            aria-label="previous slide" @click="previous()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                stroke-width="2.5" class="w-5 h-5 md:w-6 md:h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </button>

                        <!-- Next Button -->
                        <button type="button"
                            class="absolute right-3 md:right-5 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-10 h-10 md:w-12 md:h-12 rounded-full bg-black/50 hover:bg-black/70 text-white transition-all duration-300 hover:scale-110"
                            aria-label="next slide" @click="next()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                stroke-width="2.5" class="w-5 h-5 md:w-6 md:h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>

                        <!-- Indicators/Dots -->
                        <div class="absolute bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 z-20 flex gap-2 md:gap-3">
                            <template x-for="(slide, index) in slides">
                                <button class="w-2 h-2 md:w-2.5 md:h-2.5 rounded-full transition-all duration-300"
                                    :class="currentSlideIndex === index ? 'bg-[#D4A44C] w-6 md:w-8' :
                                        'bg-white/50 hover:bg-white/80'"
                                    @click="goToSlide(index)" :aria-label="'Go to slide ' + (index + 1)">
                                </button>
                            </template>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <span class="flex py-3 items-center">
        <span class="h-px flex-1 bg-gray-300 w-2"></span>

        <h2 class="shrink-0 px-4 h2 dark:text-white text-[#D4A44C]">WHAT WE DO</h2>

        <span class="h-px flex-1 bg-gray-300"></span>
    </span>

    <section class="mt-2 mb-2 mx-8">
        <h2 class="text-xl uppercase dark:text-white text-center mb-2 mt-1">our services</h2>

        <livewire:load-frontend-services />
    </section>
    <section class="max-w-full px-4 py-10  flex flex-col justify-between gap-6">
        <h2 class="text-xl uppercase dark:text-white text-[#D4A44C] text-center mb-2 mt-1">our packages</h2>
        <livewire:package-ui />
    </section>
@endsection
