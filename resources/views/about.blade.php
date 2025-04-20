@extends('layouts.app')

@section('content')
    <title>Kezia Sagala - Portfolio</title>
    <style>
        @font-face {
            font-family: 'Lampoon Brush';
            src: url("/fonts/LAMPOOB2.TTF") format("opentype");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Matton Script';
            src: url("/fonts/MT-Matto-Script-Bold.ttf") format("opentype");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Space Grotesk';
            src: url("/fonts/spacegrotesk/SPACEGROTESK-VARIABLEFONT_WGHT.TTF") format("opentype");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar Styles - Added to ensure it's above sidebar */
        .navbar {
            /* font-family: 'Matton Script', sans-serif; */
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1500;
            /* Higher than sidebar's z-index */
            background-color: #111;
            color: #fff;
            padding: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: #f78da7;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
        }

        .navbar button {
            color: #f78da7;
            font-weight: bold;
            text-transform: uppercase;
            background: none;
            border: none;
            cursor: pointer;
        }

        /* Updated Sidebar Styles */
        .sidebar {
            /* font-family: 'Matton Script', sans-serif; */
            background-color: #111;
            color: #fff;
            width: 85%;
            /* Showing 15% of screen when closed */
            position: fixed;
            right: 0;
            /* Start open by default */
            top: 0;
            height: 100vh;
            padding: 40px 30px;
            transition: right 0.3s ease;
            z-index: 1000;
            /* Lower than navbar */
            overflow-y: auto;
            scrollbar-width: thin;
            font-family: 'Myriad Pro', 'Helvetica Neue', Arial, sans-serif;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
            padding-top: 80px;
            /* Add padding to account for navbar height */
        }

        /* When closed, only show 5% of the sidebar */
        .sidebar:not(.open) {
            right: -80%;
            /* Shows 5% when closed */
        }

        .sidebar h1 {
            font-size: 36px;
            margin-bottom: 20px;
            font-style: Normal;
        }

        .sidebar .intro {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .intro p {
            font-size: 18px;
            margin-bottom: 5px;
            font-family: 'Matton Script', sans-serif;
            color: white;
        }

        .sidebar .intro p span.pink-text {
            color: #FF69B4;
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
            color: #f78da7;
            font-family: 'Space Grotesk', sans-serif;
        }

        .sidebar ul.softwares li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 20px;
            color: #f78da7;
            font-family: 'Space Grotesk', sans-serif;
        }

        .sidebar .contact-info {
            font-size: 25px;
        }

        .sidebar .contact-info p {
            margin-bottom: 15px;
            color: #f78da7;
        }

        .sidebar .contact-info a {
            color: #f78da7;
        }

        .sidebar .contact-info strong {
            display: block;
            color: #FFFFFF;
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
            position: relative;
            height: 1px;
            margin: 25px 0;
            background-color: transparent;
        }

        .divider::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            height: 1px;
            border-top: 1px dotted #333;
        }

        .profile-image-container {
            width: 100%;
            max-width: 350px;
            /* container nge‑stretch sampai 350px */
            aspect-ratio: 3.5/1;
            /* agar tinggi juga proporsional */
            margin: 0 auto 20px;
            overflow: hidden;
        }

        .profile-image {
            display: block;
            width: 100%;
            /* “memaksa” gambar mengisi */
            height: 100%;
            object-fit: cover;
            object-position: center;
        }


        /* Updated Sidebar Tab - similar to tracklist style */
        .sidebar-tab {
            position: fixed;
            right: 85%;
            /* Position when open - aligned with sidebar edge */
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

        .sidebar:not(.open)~.sidebar-tab {
            right: 5%;
            /* Position when closed - 5% from right edge */
        }

        /* Main content - KEEPING ORIGINAL */
        .main {
            flex-grow: 1;
            padding: 60px;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 60px;
            /* Add margin to account for navbar height */
        }

        .main h2 {
            font-size: 70px;
            font-weight: lighter;
            color: #111;
            margin-bottom: 30px;
            letter-spacing: 1px;

        }

        .main .section {
            margin-bottom: 60px;
        }

        .main .section h3 {
            color: #f78da7;
            margin-bottom: 20px;
            font-size: 50px;
            font-weight: lighter;
            /* text-transform: uppercase; */
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
            color: #111;
            font-size: 20px;
        }

        .main .entry .title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
            color: #f78da7;
        }

        .main .entry .info {
            font-size: 16px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            color: #f78da7;
        }

        .main .entry .info span {
            display: inline-block;
        }

        .timeline {
            position: relative;
            padding-left: 30px;
            font-family: 'Space Grotesk', sans-serif;
        }

        .timeline .entry {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline .entry::before {
            content: "";
            position: absolute;
            left: -35px;
            /* Adjust this to center the dot on the dashed line */
            top: 6px;
            width: 10px;
            height: 10px;
            background-color: #000;
            border-radius: 50%;
            z-index: 1;
        }

        .timeline {
            position: relative;
        }

        .timeline::after {
            content: "";
            position: absolute;
            top: 10px;
            /* 👉 geser garis ke bawah */
            left: -1px;
            /* posisi horizontal garis */
            height: calc(100% - 50px);
            /* panjang garis, bisa disesuaikan */
            width: 2px;
            background: repeating-linear-gradient(to bottom,
                    #ccc,
                    #ccc 5px,
                    transparent 5px,
                    transparent 10px);
        }


        .timeline .entry .title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
            color: #f78da7;
            max-width: 400px;
        }

        .timeline .entry .info {
            font-size: 16px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            color: #f78da7;
        }

        .subtitle {
            max-width: 350px;
            font-size: 15px;
            color: #f78da7;
            margin-bottom: 5px;
        }

        .details {
            margin: 0;
            padding-left: 40px;
            font-size: 14px;
            color: #f78da7;
            max-width: 300px;
        }

        .details li {
            list-style-type: disc;
            margin-bottom: 4px;
        }

        .year {
            position: absolute;
            right: 450px;
            top: 0;
            font-size: 15px;
            color: #f78da7;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .sidebar {
                width: 90%;
            }

            .sidebar:not(.open) {
                right: -85%;
                /* Show 5% when closed */
            }

            .sidebar-tab {
                right: 90%;
            }

            .sidebar:not(.open)~.sidebar-tab {
                right: 5%;
            }

            .main {
                padding: 40px 30px;
                margin-top: 60px;
                /* Keep space for navbar */
            }

            .main h2 {
                font-size: 28px;
            }

            .main .section h3 {
                font-size: 18px;
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

            .sidebar .intro p {
                font-size: 20px;
                margin-bottom: 5px;
                font-family: 'Matton Script', sans-serif;
            }

        }

        @media (max-width: 480px) {
            .sidebar {
                width: 95%;
            }

            .sidebar:not(.open) {
                right: -90%;
                /* Show 5% when closed */
            }

            .sidebar-tab {
                right: 95%;
            }

            .sidebar:not(.open)~.sidebar-tab {
                right: 5%;
            }

            .main {
                padding: 30px 20px;
                margin-top: 60px;
                /* Keep space for navbar */
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

            .sidebar .divider {
                margin: 20px 0;
                height: 2px;
                background: transparent;
                background-image: radial-gradient(#333 1px, transparent 1px);
                background-size: 5px 5px;
                background-position: 0 0;
            }
            .year {
            position: absolute;
            right: 50px;
            top: 0;
            font-size: 15px;
            color: #f78da7;
        }
        .subtitle {
            max-width: 300px;
            font-size: 15px;
            color: #f78da7;
            margin-bottom: 5px;
        }

        .details {
            margin: 0;
            padding-left: 40px;
            font-size: 14px;
            color: #f78da7;
            max-width: 300px;
        }
        .timeline .entry .title {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
            color: #f78da7;
            max-width: 200px;
        }
        .timeline .entry::before {
            content: "";
            position: absolute;
            left: -15px;
            /* Adjust this to center the dot on the dashed line */
            top: 6px;
            width: 10px;
            height: 10px;
            background-color: #000;
            border-radius: 50%;
            z-index: 1;
        }
        .timeline {
            position: relative;
            padding-left: 10px;
        }
        }

        @media (hover: none) and (pointer: coarse) {
            .sidebar-tab {
                padding: 15px 8px;
                font-size: 16px;
            }
        }

        .profile-image-container {
            width: 100%;
            /* fluid: isi 100% parent */
            max-width: 600px;
            /* batas maksimal di mobile/tablet */
            aspect-ratio: 3 / 1;
            /* misal gambarmu rasio 600×200 → 3:1 */
            margin: 0 auto 20px;
            overflow: hidden;
        }

        .profile-image {
            display: block;
            /* hilangkan gap bawah inline-img */
            width: 100%;
            /* penuhi container */
            height: 100%;
            object-fit: cover;
            /* crop & cover penuh */
            object-position: center;
        }

        /* Breakpoint desktop */
        @media (min-width: 1024px) {
            .profile-image-container {
                max-width: 800px;
                /* container makin lebar, tapi tetap 3:1 */
            }

            .sidebar .intro p {
                font-size: 22px;
                margin-bottom: 5px;
                font-family: 'Matton Script', sans-serif;
            }
        }
    </style>

    <!-- Added Navbar -->
    <nav class="navbar">
        <!-- Left Side: Logo -->
        <a href="/" class="text-pink-400 font-bold uppercase">KEZIAENS</a>

        <!-- Right Side: Info Button -->
        <button id="infoButton" class="text-pink-400 font-bold uppercase">INFO</button>
    </nav>

    <div class="sidebar open" id="sidebar">
        <h1>Kezia Sagala</h1>
        <div class="divider"></div>

        <div class="profile-image-container">
            <img src="{{ asset('images/Keziapic.png') }}" alt="Kezia Ens" class="profile-image">
        </div>

        <div class="divider"></div>

        <div class="intro">
            <p>Hello,</p>
            <br>
            <p>I'm Kezia Enginia Sagala. People often call me Kez,</p>
            <p><span class="pink-text">I'm so enthusiastic graphic designer.</span> with a deep love for music,</p>
            <p>culture, and creative storytelling. My works blends design, branding and digital</p>
            <p>experiences, often inspired by the rhythm and energy of the music industry.</p>
            <br>
            <p>With a background in Visual Communication Design,</p>
            <p>I thrive on creating immersive visuals that connect ideas with emotions,</p>
            <p>whether fit, building a brand identity, creating digital experiences, or</p>
            <p>experimenting with new media, I'm always pushing creativity beyond expanded.</p>
        </div>

        <div class="divider"></div>

        <h1>Skillsets</h1>
        <ul class="skillsets">
            <li>01 Graphic Design</li>
            <li>02 Branding</li>
            <li>03 Campaign Making</li>
            <li>04 Editorial</li>
            <li>05 Video Editing</li>
            <li>06 Social Media Content</li>
        </ul>

        <div class="divider"></div>

        <h1>Softwares</h1>
        <ul class="softwares">
            <li>Adobe After Effect</li>
            <li>Adobe Illustrator</li>
            <li>Adobe Photoshop</li>
            <li>Adobe Premiere Pro</li>
            <li>Adobe InDesign</li>
            <li>Figma</li>
        </ul>

        <div class="divider"></div>

        <div class="contact-info">
            <p><strong>Email</strong>
                <a href="mailto:keziaens@gmail.com">keziaens@gmail.com</a>
            </p>

            <p><strong>Instagram</strong>
                <a href="https://instagram.com/keziaens">@keziaens</a>
            </p>

            <p><strong>Behance</strong>
                <a href="https://behance.net/keziaens">behance.net/keziaens</a>
            </p>

            <p><strong>Spotify</strong>
                <a href="https://open.spotify.com/artist/2P846ZW0bC8S4zjBLoZ49p?si=QYyQf2t0QuOVQXNu5wKX4Q">Kezia Sagala</a>
            </p>

            <p><strong>Curriculum Vitae</strong>
                <a href="https://drive.google.com/file/d/1KgJ3o6tMQrIpJtzXqkQ6-fmQRR6j2sxc/view">download here</a>
            </p>
        </div>
    </div>

    <div class="sidebar-tab" id="sidebarTab">About</div>

    <div class="main">
        <div class="section">
            <h2>About</h2>
        </div>
        <div class="divider"></div>

        <div class="section">
            <h2>Experience</h2>
            <div class="divider"></div>

            <h3>Design Experience</h3>
            <div class="timeline">

                <div class="entry">
                    <div class="title">Design Research</div>
                    <div class="subtitle">Academic Project</div>
                    <ul class="details">
                        <li>Research Assistant</li>
                        <li>Design Signage</li>
                    </ul>
                    <div class="year">2024 – 2025</div>
                </div>

                <div class="entry">
                    <div class="title">Tuftwave Studio</div>
                    <div class="subtitle">Social Media</div>
                    <ul class="details">
                        <li>Collaborating</li>
                        <li>Making Content</li>
                        <li>Art/Creative Director</li>
                    </ul>
                    <div class="year">2023 - 2024</div>
                </div>

                <div class="entry">
                    <div class="title">Outlining Design 2024: Perpetale</div>
                    <div class="subtitle">International Exhibition</div>
                    <ul class="details">
                        <li>Editorial Editing</li>
                        <li>Curating Posters</li>
                        <li>Copy writing</li>
                    </ul>
                    <div class="year">2024</div>
                </div>

                <div class="entry">
                    <div class="title">Virtue of Virtual</div>
                    <div class="subtitle">Social Media</div>
                    <ul class="details">
                        <li>Co-Founder</li>
                        <li>Art Director</li>
                        <li>Content Creator</li>
                    </ul>
                    <div class="year">2020 - 2021</div>
                </div>

            </div>


            <h3>Additional Experience</h3>
            <div class="timeline">

                <div class="entry">
                    <div class="title">Head of Public Creativepreneur Relations</div>
                    <div class="subtitle">
                        Student Union,<br> Universitas Ciputra</div>
                    <ul class="details">
                        <li>Initiated partnerships with campuses.</li>
                        <li>Organized external relations programs.</li>
                        <li>Managed fundraising programs.</li>
                    </ul>
                    <div class="year">2024 – 2025</div>
                </div>

                <div class="entry">
                    <div class="title">Mentor</div>
                    <div class="subtitle">
                        Mentoring Department,
                    <br> Universitas Ciputra</div>
                    <ul class="details">
                        <li>Provided academic mentoring and onboarding support.</li>
                        <li>Led discussions, creative exercises, and sharing sessions.</li>
                        <li>Fostered student confidence and community engagement.</li>
                    </ul>
                    <div class="year">2023 - 2024</div>
                </div>

                <div class="entry">
                    <div class="title">Songwriter</div>
                    <div class="subtitle">
                        Released music projects via digital platforms including Spotify.</div>
                    <ul class="details">
                        <li>Wrote, composed and produced original songs.</li>
                        <li>Collaborated with bands, producers and creatives.</li>
                        <li>Managed digital distribution and project branding.</li>
                    </ul>
                    <div class="year">2021 - present</div>
                </div>

            </div>

            <div class="divider"></div>

            <div class="section">
                <h3>Achievements</h3>
                <div class="timeline">

                    <div class="entry">
                        <div class="title">Highest Score Student, Experience Design Course</div>
                        {{-- <div class="subtitle">
                            Student Union,<br> Universitas Ciputra</div> --}}
                        <ul class="details">
                            <li>Recognized for consistently applying
                                design thinking as human-centered
                                solution framework.
                            </li>
                        </ul>
                        <div class="year">2025</div>
                    </div>

                    <div class="entry">
                        <div class="title">Grand Sense of Awareness, KMDGI 15</div>
                        <div class="subtitle">National Competition</div>
                        <ul class="details">
                            <li>Represented the university for a
                                prestigious national design
                                exhibition under the theme of
                                empathy and awareness.</li>
                        </ul>
                        <div class="year">2024</div>
                    </div>

                    <div class="entry">
                        <div class="title">3rd Winner, Exceed 2024</div>
                        <div class="subtitle">International Competition</div>
                        <ul class="details">
                            <li> Developed an immersive experience
                            design strategy within a competitive
                            entrepreneurial context.</li>
                        </ul>
                        <div class="year">2024</div>
                    </div>

                    <div class="entry">
                        <div class="title">2nd Place, New Media Class: REVIVE</div>
                        <div class="subtitle">School Competition</div>
                        <ul class="details">
                            <li>Created a mixed-reality AR exhibition
                                to raise awareness of sustainable
                                waste management.</li>
                        </ul>
                        <div class="year">2024</div>
                    </div>

                    <div class="entry">
                        <div class="title">Best Project, Entrepreneurship Innovation in Creative Industry</div>
                        <div class="subtitle">School Competition</div>
                        <ul class="details">
                            <li>Created 'UPCV', a recycled bag brand
                                empowering local sewing communities in Surabaya from a sustainable production design.</li>
                        </ul>
                        <div class="year">2023</div>
                    </div>

                </div>
            </div>

            <script>
                const sidebar = document.getElementById('sidebar');
                const sidebarTab = document.getElementById('sidebarTab');
                const infoButton = document.getElementById('infoButton');

                // Start with sidebar open by default
                sidebar.classList.add('open');

                // Toggle sidebar when clicking the sidebar tab
                sidebarTab.addEventListener('click', () => {
                    sidebar.classList.toggle('open');
                });

                // Toggle sidebar when clicking the INFO button in navbar
                infoButton.addEventListener('click', () => {
                    sidebar.classList.toggle('open');
                });

                // Close when clicking outside (optional)
                document.addEventListener('click', (e) => {
                    if (!sidebar.contains(e.target) && !sidebarTab.contains(e.target) && !infoButton.contains(e.target)) {
                        sidebar.classList.remove('open');
                    }
                });

                // Handle responsive adjustments
                window.addEventListener('resize', () => {
                    // Can add responsive handling here if needed
                });

                // Initialize skillsets numbering
                document.addEventListener('DOMContentLoaded', function() {
                    const skillsItems = document.querySelectorAll('.skillsets li');
                    skillsItems.forEach((item, index) => {
                        if (index < 9) {
                            item.style.counterIncrement = 'item';
                        }
                    });
                });
            </script>
        @endsection
