@extends('layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="relative w-full">
        <!-- Scrolling Background Image -->
        <div class="absolute inset-0 -z-10 h-[200vh]">
            <img src="{{ asset('images/HomeBG1.png') }}" alt="Background"
                 class="w-full h-full object-cover object-center">
        </div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 -z-10 h-[200vh] bg-black bg-opacity-70"></div>

        <!-- Content Sections -->
        <div class="relative z-10">
            <!-- Welcome Section (First Screen) -->
            <section class="h-screen flex flex-col items-center justify-center text-center px-4">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-pink-400 mb-4">
                    Welcome to My Website
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-pink-200 max-w-2xl mx-auto mb-8">
                    Graphic Designer & Visual Storyteller
                </p>
                <button onclick="scrollToAbout()"
                        class="animate-bounce bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </button>
            </section>

            <!-- About Section (Second Screen) -->
            <section id="about" class="min-h-screen flex items-center justify-center px-4 sm:px-8 lg:px-16">
                <!-- Ticket Card Container -->
                <div class="w-full max-w-4xl relative my-20">
                    <!-- Ticket Background -->
                    <img src="{{ asset('images/TicketBG.png') }}" alt="Ticket Background"
                         class="w-full h-full object-cover absolute rounded-3xl">

                    <!-- Card Content -->
                    <div class="relative bg-black bg-opacity-10 rounded-3xl p-8 sm:p-12">
                        <div class="flex flex-col lg:flex-row gap-8 items-center">
                            <!-- Profile Image -->
                            <div class="w-40 h-40 rounded-lg overflow-hidden">
                                <img src="{{ asset('images/profile.jpg') }}" alt="Kezia Ens"
                                     class="w-full h-full object-cover">
                            </div>

                            <!-- Main Content -->
                            <div class="flex-1 text-center lg:text-left">
                                <h2 class="text-2xl sm:text-3xl font-bold text-pink-300">Kezia Enginia Sagala</h2>
                                <p class="text-pink-200 text-sm mb-4">SACRAHIO BREEDUP HOUR</p>
                                <p class="text-white text-sm sm:text-base mb-6 leading-relaxed">
                                    I'm Kezia Enginia—graphic designer, visual storyteller, and music enthusiast.
                                    Driven by a relentless curiosity to blend art with innovation, I craft designs that resonate,
                                    provoke, and inspire. I love challenging creative conventions and bringing vibrant ideas to life.
                                </p>
                            </div>

                            <!-- Contact Info -->
                            <div class="w-full lg:w-auto text-sm space-y-3">
                                <div>
                                    <p class="text-pink-300 font-medium">Contact</p>
                                    <p class="text-white">keziaens@gmail.com</p>
                                    <p class="text-white">behance.net/keziaens</p>
                                </div>
                                <div>
                                    <p class="text-pink-300 font-medium">Instagram</p>
                                    <p class="text-white">@keziaens</p>
                                </div>
                                <div>
                                    <p class="text-pink-300 font-medium">Barcode</p>
                                    <p class="text-white">Row</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script>
        function scrollToAbout() {
            document.getElementById('about').scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
@endsection
