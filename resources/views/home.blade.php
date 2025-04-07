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
            <section class="h-screen flex flex-col items-center justify-center text-center px-4">
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-pink-400 mb-4">
                    Welcome to My Website
                </h1>
                <p class="text-lg sm:text-xl md:text-2xl text-pink-200 max-w-2xl mx-auto mb-8">
                    Graphic Designer & Visual Storyteller
                </p>
                <button onclick="scrollToAbout()"
                    class="animate-bounce bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-full transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </button>
            </section>

            <!-- About Section with Sidebar -->
<section id="about" class="min-h-screen flex items-center justify-center px-4 sm:px-8 lg:px-16 relative">
    <!-- Sidebar Content -->
    <div class="sidebar" id="sidebar">
        <h1>Kezia Enginia Sagala</h1>
        <div class="intro">
            <p>Hello,</p>
            <p>People often call me Kea, an enthusiastic graphic designer with a deep love for music, culture, and creative storytelling. My work blends design, branding and digital experience, often inspired by the rhythm and energy of the music industry.</p>
            <p>With a background in Visual Communication Design, I thrive on creating immersive visuals that connect ideas with emotions. Whether it's building a brand identity, curating digital experience, or experimenting with new media, I'm always pushing creativity beyond expected.</p>
        </div>

        <h2>Skillsets</h2>
        <ul class="skillsets">
            <li>Graphic Design</li>
            <li>Branding</li>
            <li>Campaign Making</li>
            <li>Editorial</li>
            <li>Video Editing</li>
            <li>Social Media Content</li>
        </ul>

        <div class="divider"></div>

        <h2>Softwares</h2>
        <ul class="softwares">
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Adobe After Effects</li>
            <li>Adobe Premiere Pro</li>
            <li>Figma</li>
        </ul>

        <div class="divider"></div>

        <div class="contact-info">
            <p><strong>Email</strong>
            <a href="mailto:keziaens@gmail.com">keziaens@gmail.com</a></p>
            <p><strong>Instagram</strong>
            <a href="https://instagram.com/keziaens">@keziaens</a></p>
            <p><strong>Behance</strong>
            <a href="https://behance.net/keziaens">behance.net/keziaens</a></p>
            <p><strong>Spotify</strong>
            Kezia Sagala</p>
            <p><strong>Resume</strong>
            <a href="#">download here</a></p>
        </div>
    </div>

    <!-- Sidebar Toggle Tab -->
    <div class="sidebar-tab" id="sidebarTab">About</div>

    <!-- Main About Content -->
    <div class="w-full max-w-4xl relative my-20">
        <p class="text-white text-5xl mb-4">About</p>

        <img src="{{ asset('images/TicketBG.png') }}" alt="Ticket Background"
            class="w-full h-full absolute rounded-3xl">
        <div class="relative bg-black bg-opacity-10 p-8 sm:p-12 rounded-3xl">
            <div class="flex flex-col lg:flex-row gap-8 items-center">
                <div class="w-40 h-40 rounded-lg overflow-hidden">
                    <img src="{{ asset('images/Keziapic.png') }}" alt="Kezia Ens"
                        class="w-full h-full object-cover">
                </div>
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-2xl sm:text-3xl font-bold text-pink-300">Kezia Enginia Sagala</h2>
                    <p class="text-pink-200 text-sm mb-4">SACRAHIO BREEDUP HOUR</p>
                    <p class="text-white text-sm sm:text-base mb-6 leading-relaxed">
                        I'm Kezia Enginia—graphic designer, visual storyteller, and music enthusiast.
                        Driven by a relentless curiosity to blend art with innovation, I craft designs that
                        resonate, provoke, and inspire.
                    </p>
                </div>
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
                    <div>
                        <button onclick="toggleSidebar()"
                                class="inline-block mt-2 bg-transparent border border-white text-white px-4 py-2 rounded-full hover:bg-white hover:bg-opacity-10 transition-all duration-300">
                            More About
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </div>

    <!-- Tracklist Section -->
    <section id="tracklist" class="min-h-screen bg-black text-white px-4 sm:px-8 lg:px-16 relative overflow-hidden">
        <div class="max-w-2xl relative pt-8 pl-8 md:pl-10 lg:pl-64">
            <p class="text-white text-5xl mb-4">Tracklist</p>
        </div>

        <div class="container relative w-full h-full flex items-center justify-center pb-48">
            <div class="card-stack w-full max-w-4xl relative">
                <!-- Card 1 -->
                <div class="card group" id="card1">
                    <img src="{{ asset('images/cards/folder1.png') }}" class="w-full h-auto rounded-[15px] block" alt="Artist Pick" />
                    <div class="card-overlay">
                        <h2>Artist Pick</h2>
                        <div class="tap-to-view">TAP TO VIEW</div>
                        <div class="subtitle">Instruction to own design</div>
                        <ul>
                            <li>Kollibrasa</li>
                            <li>Campaigners: (Germany)</li>
                            <li>Generals: (Japan) (Great Britain)</li>
                            <li>Design Studio Alpha</li>
                            <li>Creative Minds Collective</li>
                            <li>Pixel Perfect Artists</li>
                            <li>Ink & Brush Masters</li>
                            <li>Digital Canvas Group</li>
                            <li>Visionary Illustrators</li>
                            <li>Art Direction Network</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card group" id="card2">
                    <img src="{{ asset('images/cards/folder2.png') }}" class="w-full h-auto rounded-[15px] block" alt="Popular Releases" />
                    <div class="card-overlay">
                        <h2>Popular Releases</h2>
                        <div class="tap-to-view">TAP TO VIEW</div>
                        <div class="subtitle">Top centralized</div>
                        <ul>
                            <li>Featuring Kezia</li>
                            <li>2013-12-29 09:59</li>
                            <li>Summer Vibes Collection</li>
                            <li>Urban Legends Series</li>
                            <li>Winter Wonderland Pack</li>
                            <li>Abstract Dreams Edition</li>
                            <li>Minimalist Moments</li>
                            <li>Retro Revival Set</li>
                            <li>Futuristic Concepts</li>
                            <li>Nature's Palette</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card group" id="card3">
                    <img src="{{ asset('images/cards/folder3.png') }}" class="w-full h-auto rounded-[15px] block" alt="Featured Collections" />
                    <div class="card-overlay">
                        <h2>Featured Collections</h2>
                        <div class="tap-to-view">TAP TO VIEW</div>
                        <div class="subtitle">Curated for you</div>
                        <ul>
                            <li>Best of 2023</li>
                            <li>Editor's Choice</li>
                            <li>Emerging Talents</li>
                            <li>Classic Masterpieces</li>
                            <li>Digital Innovations</li>
                            <li>Mixed Media Wonders</li>
                            <li>Street Art Highlights</li>
                            <li>Concept Art Gallery</li>
                            <li>Portrait Specialists</li>
                            <li>Landscape Legends</li>
                        </ul>
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

        <!-- Content Container -->
        <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4 py-20">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-pink-400 mb-6">My Creative Works</h2>
                <p class="text-lg sm:text-xl text-pink-200 max-w-2xl mx-auto mb-8">
                    Explore my portfolio of graphic design projects and creative works
                </p>

                <!-- Portfolio Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Portfolio Item 1 -->
                    <div class="bg-black bg-opacity-50 p-6 rounded-lg border border-pink-400 hover:bg-opacity-70 transition">
                        <h3 class="text-xl font-bold text-pink-300 mb-2">Project Alpha</h3>
                        <p class="text-white">Brand identity design for a tech startup</p>
                    </div>

                    <!-- Portfolio Item 2 -->
                    <div class="bg-black bg-opacity-50 p-6 rounded-lg border border-pink-400 hover:bg-opacity-70 transition">
                        <h3 class="text-xl font-bold text-pink-300 mb-2">Project Beta</h3>
                        <p class="text-white">Album cover design for a music artist</p>
                    </div>

                    <!-- Portfolio Item 3 -->
                    <div class="bg-black bg-opacity-50 p-6 rounded-lg border border-pink-400 hover:bg-opacity-70 transition">
                        <h3 class="text-xl font-bold text-pink-300 mb-2">Project Gamma</h3>
                        <p class="text-white">Poster series for a cultural event</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .card-stack {
            position: relative;
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
            top: 80px;
            z-index: 2;
        }

        #card1 {
            top: 160px;
            z-index: 3;
        }

        /* Active Card Animation */
        .card.active {
            transform: translateX(100%);
        }

        /* Section 4 Styles */
        #section-four {
            width: 100vw;
            left: 50%;
            right: 50%;
            margin-left: -50vw;
            margin-right: -50vw;
        }

        /* Background image treatment */
        #section-four img {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            background-color: black;

        }

        /* Content positioning */
        #section-four .max-w-6xl {
            width: 100%;
            padding: 0 2rem;
        }
         /* Sidebar Styles */
    .sidebar {
        background-color: #111;
        color: #fff;
        width: 80%;
        max-width: 400px;
        position: fixed;
        right: -80%;
        top: 0;
        height: 100vh;
        padding: 40px 30px;
        transition: right 0.3s ease;
        z-index: 1000;
        overflow-y: auto;
    }
    .sidebar.open {
        right: 0;
    }
    .sidebar-tab {
        position: fixed;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        background-color: #111;
        color: #fff;
        padding: 15px 8px;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        font-weight: bold;
        font-size: 16px;
        cursor: pointer;
        z-index: 1001;
        border-radius: 8px 0 0 8px;
        transition: right 0.3s ease;
    }
    .sidebar.open ~ .sidebar-tab {
        right: 400px;
    }
    #about {
        overflow: hidden;
    }
    .sidebar {
      background-color: #111;
      color: #fff;
      width: 80%;
      max-width: 400px;
      position: fixed;
      right: -80%;
      top: 0;
      height: 100vh;
      padding: 40px 30px;
      transition: right 0.3s ease;
      z-index: 1000;
      overflow-y: auto;
      scrollbar-width: thin;
    }

    .sidebar.open {
      right: 0;
    }

    .sidebar h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .sidebar .intro {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .sidebar .intro p {
      margin-bottom: 15px;
    }

    .sidebar h2 {
      font-size: 20px;
      margin-top: 30px;
      margin-bottom: 15px;
      color: #f78da7;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .sidebar ul {
      list-style: none;
      font-size: 16px;
      margin-bottom: 30px;
    }

    .sidebar ul.skillsets li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 30px;
    }

    .sidebar ul.skillsets li:before {
      content: "0" counter(item);
      counter-increment: item;
      position: absolute;
      left: 0;
      color: #f78da7;
      font-weight: bold;
    }

    .sidebar ul.softwares li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 20px;
    }

    .sidebar ul.softwares li:before {
      content: "-";
      position: absolute;
      left: 0;
      color: #f78da7;
    }

    .sidebar .contact-info {
      font-size: 16px;
    }

    .sidebar .contact-info p {
      margin-bottom: 15px;
    }

    .sidebar .contact-info strong {
      display: block;
      color: #f78da7;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
      transition: color 0.2s;
    }

    .sidebar a:hover {
      color: #f78da7;
    }

    .divider {
      height: 1px;
      background-color: #333;
      margin: 25px 0;
    }

    /* Tab to open sidebar - Fixed positioning */
    .sidebar-tab {
      position: fixed;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      background-color: #111;
      color: #fff;
      padding: 15px 8px;
      writing-mode: vertical-rl;
      text-orientation: mixed;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      z-index: 1001;
      border-radius: 8px 0 0 8px;
      transition: right 0.3s ease;
    }

    .sidebar.open ~ .sidebar-tab {
      right: 400px;
    }

    /* Main content */
    .main {
      flex-grow: 1;
      background-color: #1a1a1a;
      padding: 60px;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .main h2 {
      font-size: 32px;
      color: #f78da7;
      margin-bottom: 30px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .main .section {
      margin-bottom: 60px;
    }

    .main .section h3 {
      color: #fff;
      margin-bottom: 20px;
      font-size: 20px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .main .entry {
      margin-bottom: 25px;
      padding-left: 20px;
      position: relative;
    }

    .main .entry:before {
      content: "•";
      position: absolute;
      left: 0;
      color: #f78da7;
      font-size: 20px;
    }

    .main .entry .title {
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 5px;
    }

    .main .entry .info {
      font-size: 16px;
      color: #aaa;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }

    .main .entry .info span {
      display: inline-block;
    }
    <style>
  /* ... (previous styles remain the same) ... */

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 40px 30px;
    }

    .main h2 {
      font-size: 28px;
    }

    .main .section h3 {
      font-size: 18px;
    }

    .sidebar {
      width: 90%;
      max-width: 300px;
      padding: 30px 20px;
    }

    .sidebar.open ~ .sidebar-tab {
      right: 300px;
    }

    .sidebar h1 {
      font-size: 22px;
    }

    .sidebar .intro {
      font-size: 14px;
    }

    .sidebar h2 {
      font-size: 18px;
    }

    .sidebar ul {
      font-size: 14px;
    }

    .main .entry .title {
      font-size: 16px;
    }

    .main .entry .info {
      font-size: 14px;
    }
  }

  @media (max-width: 480px) {
    .main {
      padding: 30px 20px;
    }

    .main h2 {
      font-size: 24px;
    }

    .sidebar-tab {
      padding: 12px 6px;
      font-size: 14px;
    }

    .main .entry .info {
      flex-direction: column;
      gap: 5px;
    }

    .main .entry {
      padding-left: 15px;
    }

    .main .entry:before {
      font-size: 16px;
      left: -5px;
    }

    .sidebar .contact-info p {
      margin-bottom: 10px;
    }

    .sidebar .intro p {
      margin-bottom: 10px;
    }

    .sidebar .divider {
      margin: 20px 0;
    }
  }

  @media (hover: none) and (pointer: coarse) {
    /* Touch device adjustments */
    .sidebar-tab {
      padding: 15px 8px;
      font-size: 16px;
    }
  }
    </style>

    <script>
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
                aboutSection.scrollIntoView({ behavior: "smooth" });
            }
        }

         // Toggle sidebar function
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('open');
    }

    // Close sidebar when clicking outside
    document.addEventListener('click', (e) => {
        const sidebar = document.getElementById('sidebar');
        const sidebarTab = document.getElementById('sidebarTab');
        const moreAboutBtn = document.querySelector('[onclick="toggleSidebar()"]');

        if (!sidebar.contains(e.target) &&
            !sidebarTab.contains(e.target) &&
            e.target !== moreAboutBtn &&
            !moreAboutBtn.contains(e.target)) {
            sidebar.classList.remove('open');
        }
    });
    </script>




@endsection
