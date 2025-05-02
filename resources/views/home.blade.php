@extends('layouts.app')

@section('content')
    <!-- Main Container -->
    <div class="relative w-full">
        <!-- Scrolling Background Image (for first 2 sections only) -->
        <div class="absolute inset-0 -z-10 min-h-[200vh]">
            <img src="{{ asset('images/HomeBG1.png') }}" alt="Background" class="w-full h-full object-cover object-center">
        </div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 -z-10 min-h-[200vh] bg-black bg-opacity-70"></div>

        <!-- Content Sections (Welcome + About) -->
        <div class="relative z-10">
            <!-- Welcome Section -->
            <section class="h-screen flex flex-col items-center justify-center text-center px-4 relative">

                <!-- Text Content -->
                <!-- Logo Image -->
                <div class="w-full flex justify-center z-10">
                    <img src="{{ asset('images/LOGO-PORTFOLIO.png') }}" alt="Kezia's Portfolio Logo"
                        class="max-w-[70%] md:max-w-[40%] h-auto object-contain" />
                </div>


                <!-- Scroll Info -->
                <p class="font-space text-sm3 pt-10 text-white">Scroll to get your tickets</p>

                <!-- Scroll Button -->
                <button onclick="scrollToAbout()"
                    class="mt-5 animate-bounce text-white hover:text-pink-300 transition z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </button>

                <!-- Copyright & Credit - Responsive -->
                <div
                    class="absolute bottom-2 left-20 right-20 flex flex-col sm:flex-row justify-between items-center text-xs text-white z-30 gap-1 sm:gap-0">
                    <div class="font-space text-center sm:text-left">© 2025 Kezia Enginia Sagala</div>
                    <div class="font-space text-center sm:text-right">Website by Bernicko & Prayogo</div>
                </div>
            </section>

            <section id="about"
                class="min-h-screen flex items-center justify-center px-4 sm:px-8 lg:px-16 relative overflow-hidden">
                <div class="w-full max-w-4xl relative my-20 z-10">
                    <p class="text-white text-5xl mb-4 text-center sm:text-left z-10">About</p>

                    <!-- DESKTOP VIEW -->
                    <div class="hidden sm:block relative z-10">
                        <!-- Background Image Desktop -->
                        <img src="{{ asset('images/TicketBG.png') }}" alt="Ticket Background"
                            class="w-full h-full absolute inset-0 rounded-3xl object-cover z-0">

                        <!-- Foreground content -->
                        <div class="relative bg-black bg-opacity-10 p-8 sm:p-12 rounded-3xl z-10">
                            <div class="flex flex-col lg:flex-row gap-8 items-center">
                                <div class="w-40 h-40 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/Keziapic.png') }}" alt="Kezia Ens"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 text-center lg:text-left">
                                    <h2 class="font-space text-2xl sm:text-3xl font-bold text-pink-300">Kezia Enginia Sagala
                                    </h2>
                                    <p class="text-pink-200 text-sm mb-4">Graphic Designer</p>
                                    <p class="font-space text-white text-sm sm:text-base mb-6 leading-relaxed">
                                        I'm Kezia Enginia—graphic designer, visual storyteller, and music enthusiast.
                                        Driven by a relentless curiosity to blend art with innovation, I craft designs that
                                        resonate, provoke, and inspire.
                                    </p>
                                </div>
                                <div class="font-space w-full lg:w-auto text-sm space-y-3">
                                    <div>
                                        <p class="text-pink-300 font-medium">Contact</p>
                                        <p class="font-space text-white">
                                            <a href="mailto:keziaens@gmail.com">keziaens@gmail.com</a>
                                        </p>
                                        <p class="font-space text-white">
                                            <a href="https://behance.net/keziaens">behance.net/keziaens</a>

                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-pink-300 font-medium">Instagram</p>
                                        <p class="font-space text-white">
                                            <a href="https://instagram.com/keziaens">@keziaens</a>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="text-pink-300 font-medium">Spotify</p>
                                        <p class="font-space text-white">
                                            <a
                                                href="https://open.spotify.com/artist/2P846ZW0bC8S4zjBLoZ49p?si=QYyQf2t0QuOVQXNu5wKX4Q&nd=1&dlsi=5c1c524f866d4913">Kezia
                                                Sagala</a>
                                        </p>
                                    </div>

                                    <div class="mt-5">
                                        <a href="/about">
                                            <button
                                                class="bg-white text-black text-sm font-semibold px-4 py-2 rounded-full hover:bg-pink-200 transition">
                                                More about
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MOBILE VIEW -->
                    <div class="block sm:hidden relative z-10 bg-black bg-opacity-80 rounded-3xl overflow-hidden">
                        <!-- Background Image Mobile -->
                        <img src="{{ asset('images/TICKET-10.png') }}" alt="Ticket Background Mobile"
                            class="absolute inset-0 w-full h-[130%] object-cover rounded-3xl z-0" />

                        <!-- Mobile Content -->
                        <div class="relative p-6 pt-72 pb-8 text-white text-center rounded-3xl z-10">
                            <div class="w-28 h-28 rounded-lg overflow-hidden mx-auto mb-4">
                                {{-- <img src="{{ asset('images/Keziapic.png') }}" alt="Kezia Ens"
                                    class="w-full h-full object-cover"> --}}
                            </div>

                            <p class="font-space text-2xl text-pink-300">Kezia Enginia Sagala</p>
                            <p class="text-lg text-pink-200 font-medium my-2">Graphic Designer</p>

                            <p
                                class="font-space text-xs text-white mb-4 max-w-[240px] mx-auto leading-relaxed outline-none border-none">
                                I'm Kezia Enginia—graphic designer, visual storyteller, and music enthusiast.
                                Driven by a relentless curiosity to blend art with innovation, I craft designs
                                that resonate, provoke, and inspire. I love challenging creative conventions and
                                bringing vibrant ideas to life.
                            </p>

                            <div class="text-xs space-y-3">
                                <div>
                                    <p class="text-pink-300 font-medium">Contact</p>
                                    <p class="font-space">
                                        <a href="mailto:keziaens@gmail.com">keziaens@gmail.com</a>
                                    </p>
                                    <p class="font-space ">
                                        <a href="https://behance.net/keziaens">behance.net/keziaens</a>
                                    </p>
                                </div>
                                <div>
                                    <p class="text-pink-300 font-medium">Instagram</p>
                                    <p class="font-space ">
                                        <a href="https://instagram.com/keziaens">@keziaens</a>
                                    </p>
                                </div>
                                <div>
                                    <p class="text-pink-300 font-medium">Spotify
                                    </p>
                                    <p class="font-space ">Row
                                        <a
                                            href="https://open.spotify.com/artist/2P846ZW0bC8S4zjBLoZ49p?si=QYyQf2t0QuOVQXNu5wKX4Q&nd=1&dlsi=5c1c524f866d4913">Kezia
                                            Sagala</a>
                                    </p>
                                </div>
                            </div>

                            <div class="mt-5">
                                <a href="/about">
                                    <button
                                        class="bg-white text-black text-sm font-semibold px-4 py-2 rounded-full hover:bg-pink-200 transition">
                                        More about
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Tracklist Section -->
    <section id="tracklist" class="font-manrope bg-black text-white px-4 sm:px-8 lg:px-16 relative overflow-hidden py-20">
        <div class=" px-4 sm:px-8 lg:px-20 w-full max-w-4xl relative my-2p0 z-10">
            <p class="text-white text-5xl mb-4 text-center sm:text-left z-10">Tracklist</p>
        </div>

        <div class="container relative w-full flex items-center justify-center">
            <div class="card-stack w-full max-w-4xl relative pb-20 sm:pb-80">
                <!-- Cards -->
                <!-- Card 1 - Pattern -->
                <div class="card group" id="card1">
                    <img src="{{ asset('images/cards/1.png') }}" class="w-full h-auto rounded-[15px]" alt="Pattern" />
                    <div class="card-overlay">
                        <!-- Added scrollable container for mobile -->
                        <div
                            class="grid mt-8 sm:mt-32 gap-2 sm:gap-4 overflow-y-auto max-h-[60vh] sm:max-h-none sm:overflow-visible">
                            @foreach ($branding as $project)
                                <a href="{{ $project['link'] }}" class="block hover:opacity-80 transition">
                                    <div
                                        class="bg-black/25 rounded-xl p-3 sm:p-4 flex flex-col sm:flex-row gap-3 sm:gap-6 items-start">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                                            class="w-full sm:w-32 h-24 object-cover rounded-lg shadow-md" />
                                        <div class="flex-1">
                                            <h1 class="text-pink-400 text-xl sm:text-3xl font-semibold">
                                                {{ $project['title'] }}</h1>
                                            <p class="text-xs sm:text-sm text-pink-400 mb-2 sm:mb-3">
                                                {{ $project['year'] }}
                                            </p>
                                            <div class="flex flex-wrap gap-1 sm:gap-2">
                                                @foreach ($project['tags'] as $tag)
                                                    <span
                                                        class="border border-white rounded-full px-2 py-0.5 sm:px-3 sm:py-1 text-xs sm:text-sm">
                                                        {{ $tag }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Campaign -->
                <div class="card group" id="card2">
                    <img src="{{ asset('images/cards/2.png') }}" class="w-full h-auto rounded-[15px]" alt="Pattern" />
                    <div class="card-overlay">
                        <!-- Added scrollable container for mobile -->
                        <div
                            class="grid mt-8 sm:mt-32 gap-2 sm:gap-4 overflow-y-auto max-h-[60vh] sm:max-h-none sm:overflow-visible">
                            @foreach ($campaign as $project)
                                <a href="{{ $project['link'] }}" class="block hover:opacity-80 transition">
                                    <div
                                        class="bg-black/25 rounded-xl p-3 sm:p-4 flex flex-col sm:flex-row gap-3 sm:gap-6 items-start">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                                            class="w-full sm:w-32 h-24 object-cover rounded-lg shadow-md" />
                                        <div class="flex-1">
                                            <h1 class="text-pink-400 text-xl sm:text-3xl font-semibold">
                                                {{ $project['title'] }}</h1>
                                            <p class="text-xs sm:text-sm text-pink-400 mb-2 sm:mb-3">
                                                {{ $project['year'] }}
                                            </p>
                                            <div class="flex flex-wrap gap-1 sm:gap-2">
                                                @foreach ($project['tags'] as $tag)
                                                    <span
                                                        class="border border-white rounded-full px-2 py-0.5 sm:px-3 sm:py-1 text-xs sm:text-sm">
                                                        {{ $tag }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Branding -->
                <div class="card group" id="card3">
                    <img src="{{ asset('images/cards/3.png') }}" class="w-full h-auto rounded-[15px]" alt="Pattern" />
                    <div class="card-overlay">
                        <!-- Added scrollable container for mobile -->
                        <div
                            class="grid mt-8 sm:mt-32 gap-2 sm:gap-4 overflow-y-auto max-h-[60vh] sm:max-h-none sm:overflow-visible">
                            @foreach ($product as $project)
                                <a href="{{ $project['link'] }}" class="block hover:opacity-80 transition">
                                    <div
                                        class="bg-black/25 rounded-xl p-3 sm:p-4 flex flex-col sm:flex-row gap-3 sm:gap-6 items-start">
                                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                                            class="w-full sm:w-32 h-24 object-cover rounded-lg shadow-md" />
                                        <div class="flex-1">
                                            <h1 class="text-pink-400 text-xl sm:text-3xl font-semibold">
                                                {{ $project['title'] }}</h1>
                                            <p class="text-xs sm:text-sm text-pink-400 mb-2 sm:mb-3">
                                                {{ $project['year'] }}
                                            </p>
                                            <div class="flex flex-wrap gap-1 sm:gap-2">
                                                @foreach ($project['tags'] as $tag)
                                                    <span
                                                        class="border border-white rounded-full px-2 py-0.5 sm:px-3 sm:py-1 text-xs sm:text-sm">
                                                        {{ $tag }}
                                                    </span>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section 4 with Full-Width Horizontal Background -->
    <section id="section-four" class="min-h-screen relative overflow-hidden">
        <!-- Full-width Background Container -->
        <div class="absolute inset-0 -z-10 w-full h-full">
            <!-- Horizontal Background Image -->
            <img src="{{ asset('images/HomeBG2.png') }}" alt="Background"
                class="w-full h-full object-cover object-left">
        </div>

        <!-- Dark Overlay -->
        <div class="absolute inset-0 -z-10 bg-black bg-opacity-70"></div>

        <!-- Content Container with Myriad Font -->
        <div class="relative z-10 h-full flex flex-col items-center justify-center px-4 py-20 ">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-pink-400 mb-6">Contacts</h2>
                <p class="font-space text-sm sm:text-base text-pink-200 max-w-2xl mx-auto">
                    Email
                </p>
                <p class="font-space text-2xl sm:text-3xl font-bold text-pink-400 max-w-2xl mx-auto mb-5">
                    <a href="mailto:keziaens@gmail.com">keziaens@gmail.com</a>
                </p>
                <p class="font-space text-sm sm:text-base text-pink-200 max-w-2xl mx-auto">
                    Instagram
                </p>
                <p class="font-space text-2xl sm:text-3xl font-bold text-pink-400 max-w-2xl mx-auto mb-5">
                    <a href="https://instagram.com/keziaens">@keziaens</a>
                </p>
                <p class="font-space text-sm sm:text-base text-pink-200 max-w-2xl mx-auto">
                    Behance
                </p>
                <p class="font-space text-2xl sm:text-3xl font-bold text-pink-400 max-w-2xl mx-auto mb-5">
                    <a href="https://behance.net/keziaens">behance.net/keziaens</a>
                </p>
                <p class="font-space text-sm sm:text-base text-pink-200 max-w-2xl mx-auto"> Spotify</p>
                {{-- <a href="https://open.spotify.com/artist/2P846ZW0bC8S4zjBLoZ49p?si=QYyQf2t0QuOVQXNu5wKX4Q&nd=1&dlsi=5c1c524f866d4913">Spotify</a> --}}
                <p class="font-space text-2xl sm:text-3xl font-bold text-pink-400 max-w-2xl mx-auto mb-5">
                    <a
                        href="https://open.spotify.com/artist/2P846ZW0bC8S4zjBLoZ49p?si=QYyQf2t0QuOVQXNu5wKX4Q&nd=1&dlsi=5c1c524f866d4913">Kezia
                        Sagala</a>
                </p>
            </div>
        </div>
    </section>

    <style>
        body {
            font-family: 'MyriadPro', sans-serif;
            background-color: #000 !important;
            color: #fff !important;
        }

        .font-myriad {
            font-family: 'MyriadPro', sans-serif;
        }

        .card-stack {
            position: relative;
            min-height: 500px;
            /* Minimum height to ensure cards are visible */
            display: flex;
            flex-direction: column;
            gap: 4rem;
        }

        .card {
            position: absolute;
            width: calc(100% - 40px);
            left: 20px;
            transition: transform 0.5s ease-in-out;
            cursor: pointer;
            overflow: hidden;
            background-color: transparent;
        }

        .card img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: contain;
        }

        .card-overlay {
            position: absolute;
            inset: 0;
            padding: 20px;
            background: rgba(0, 0, 0, 0.1);
            color: white;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            border-radius: 15px;
        }

        .card-overlay img {
            width: 320px;
            height: 120px;
            object-fit: cover;
            flex-shrink: 0;
            border-radius: 8px;
        }


        .card h2 {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card .tap-to-view {
            font-size: 0.7rem;
            color: rgba(255, 255, 255, 0.7);
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .card .subtitle {
            font-size: 0.85rem;
            margin-bottom: 10px;
        }

        .card ul {
            list-style: disc;
            padding-left: 20px;
            font-size: 0.85rem;
        }

        /* Positioning */
        #card3 {
            top: 0;
            z-index: 1;
        }

        #card2 {
            top: 100px;
            z-index: 2;
        }

        #card1 {
            top: 200px;
            z-index: 3;
        }

        /* Active Card Animation */
        .card.active {
            transform: translateX(100%);
        }

        /* Section 4 Styles */
        #section-four {
            position: relative;
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
        }

        #section-four .absolute {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
        }

        #section-four img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .thumbnail-img {
            width: 160px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            flex-shrink: 0;
        }
    </style>

    <script>
        window.addEventListener('load', () => {
            const cards = document.querySelectorAll('.card');
            const cardStack = document.querySelector('.card-stack');
            let maxHeight = 0;

            cards.forEach(card => {
                const cardHeight = card.offsetTop + card.offsetHeight;
                if (cardHeight > maxHeight) {
                    maxHeight = cardHeight;
                }
            });

            // Set the card stack container to fit the tallest card
            cardStack.style.height = `${maxHeight}px`;
        });

        document.querySelectorAll('.card-overlay a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.stopPropagation(); // Prevent click from bubbling up to card
            });
        });

        // Card Stack Interactions
        const pinkCard = document.getElementById('card1');
        const orangeCard = document.getElementById('card2');
        const darkCard = document.getElementById('card3');

        darkCard.addEventListener('click', () => {
            if (!orangeCard.classList.contains('active')) orangeCard.classList.add('active');
            if (!pinkCard.classList.contains('active')) pinkCard.classList.add('active');
        });

        orangeCard.addEventListener('click', () => {
            if (orangeCard.classList.contains('active') && pinkCard.classList.contains('active')) {
                orangeCard.classList.remove('active');
            } else if (!pinkCard.classList.contains('active')) {
                pinkCard.classList.add('active');
            }
        });

        pinkCard.addEventListener('click', () => {
            pinkCard.classList.toggle('active');
            darkCard.classList.remove('active');
            orangeCard.classList.remove('active');
        });

        // Scroll to About function
        function scrollToAbout() {
            const aboutSection = document.getElementById("about");
            if (aboutSection) {
                aboutSection.scrollIntoView({
                    behavior: "smooth"
                });
            }
        }
    </script>
@endsection
