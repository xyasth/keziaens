<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildy Riftian | About</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .tab-section {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease;
            border-bottom: 1px dotted #ccc;
        }

        .tab-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: #f0f0f0;
            border-bottom: 1px dotted #ccc;
            cursor: pointer;
        }

        .tab-content {
            padding: 20px;
            height: calc(100% - 51px);
            overflow-y: auto;
            background-color: #f5f5f5;
        }

        .yellow-dot {
            width: 10px;
            height: 10px;
            background-color: #ffe100;
            border-radius: 50%;
        }

        .black-square {
            width: 10px;
            height: 10px;
            background-color: #000;
        }

        /* Active tab styles */
        .tab-section.active {
            z-index: 5;
            transform: translateX(0);
        }

        /* Inactive tab styles */
        .tab-section.inactive-left {
            transform: translateX(-80%);
            z-index: 4;
        }

        .tab-section.inactive-right {
            transform: translateX(80%);
            z-index: 3;
        }

        .tab-section.far-right {
            transform: translateX(90%);
            z-index: 2;
        }

        .tab-section.far-left {
            transform: translateX(-90%);
            z-index: 1;
        }

        /* Content-specific styles */
        .profile-container {
            display: flex;
            gap: 40px;
            margin-top: 40px;
        }

        .profile-left {
            flex: 1;
        }

        .profile-right {
            flex: 2;
            font-style: italic;
            line-height: 1.8;
        }

        .profile-left h2 {
            font-size: 48px;
            font-weight: normal;
            line-height: 1.2;
        }

        .profile-right p {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .experiences-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
        }

        .experiences-table th, .experiences-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px dotted #ccc;
        }

        .experiences-title {
            font-size: 48px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .skillsets-content {
            background-color: #ffe100;
            padding: 20px;
            height: 100%;
        }

        .skillsets-title {
            font-size: 48px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .section-title {
            text-transform: uppercase;
            margin: 0;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- ABOUT SECTION -->
        <div class="tab-section" id="about-section">
            <div class="tab-header">
                <div class="yellow-dot"></div>
                <h3 class="section-title">ABOUT</h3>
                <div></div>
            </div>
            <div class="tab-content">
                <div class="tab-header" style="background-color: transparent;">
                    <div class="yellow-dot"></div>
                    <h3 class="section-title">PROFILE</h3>
                    <div class="black-square"></div>
                </div>
                <div class="profile-container">
                    <div class="profile-left">
                        <h2>Wildy<br>Riftian</h2>
                    </div>
                    <div class="profile-right">
                        <p>I'm Wildy Riftian, a visual artist and designer from Indonesia.</p>
                        <p>I spent my younger years in Seoul, South Korea, where I earned a BFA in Visual Communication Design from Kookmin University and gained professional experience across motion design, graphic design, illustration, and photography.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- DETAILS SECTION -->
        <div class="tab-section" id="details-section">
            <div class="tab-header">
                <div></div>
                <h3 class="section-title">DETAILS</h3>
                <div class="black-square"></div>
            </div>
            <div class="tab-content">
                <h2 class="experiences-title">Details</h2>
                <p>Details content would go here.</p>
            </div>
        </div>

        <!-- EXPERIENCES SECTION -->
        <div class="tab-section" id="experiences-section">
            <div class="tab-header">
                <div></div>
                <h3 class="section-title">EXPERIENCES</h3>
                <div class="black-square"></div>
            </div>
            <div class="tab-content">
                <h2 class="experiences-title">Experiences</h2>
                <table class="experiences-table">
                    <thead>
                        <tr>
                            <th>YEAR</th>
                            <th>COMPANY</th>
                            <th>POSITION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2024/11 - 2025/03</td>
                            <td>COMOTION 2025<br>BRANDING TEAM</td>
                            <td>GRAPHIC DESIGNER ART DIRECTOR</td>
                        </tr>
                        <tr>
                            <td>2020/01 - PRESENT</td>
                            <td>WILDYRIFTIANWORKS.</td>
                            <td>FREELANCE GRAPHIC DESIGNER</td>
                        </tr>
                        <tr>
                            <td>2023/07 - 2024/01</td>
                            <td>SWEET ESCAPE PHOTOGRAPHY<br>SEOUL, SOUTH KOREA</td>
                            <td>FREELANCE PHOTOGRAPHER</td>
                        </tr>
                        <tr>
                            <td>2018/03 - 2024/01</td>
                            <td>FRAME A TRIP PHOTOGRAPHY<br>SEOUL, SOUTH KOREA</td>
                            <td>FREELANCE PHOTOGRAPHER</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- SKILLSETS SECTION -->
        <div class="tab-section" id="skillsets-section">
            <div class="tab-header" style="background-color: #ffe100;">
                <div class="yellow-dot"></div>
                <h3 class="section-title">SKILLSETS</h3>
                <div class="black-square"></div>
            </div>
            <div class="tab-content skillsets-content">
                <h2 class="skillsets-title">Skillsets</h2>
                <p>Skills and expertise information would go here.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = [
                document.getElementById('about-section'),
                document.getElementById('details-section'),
                document.getElementById('experiences-section'),
                document.getElementById('skillsets-section')
            ];

            // Initialize positions
            function initializePositions() {
                sections[0].classList.add('active');
                sections[1].classList.add('inactive-right');
                sections[2].classList.add('far-right');
                sections[3].classList.add('far-right');
            }

            // Handle tab click
            function setupTabClicks() {
                sections.forEach((section, index) => {
                    const header = section.querySelector('.tab-header');
                    header.addEventListener('click', () => activateTab(index));
                });
            }

            // Activate tab by index
            function activateTab(activeIndex) {
                sections.forEach((section, index) => {
                    section.className = 'tab-section'; // Reset classes

                    if (index === activeIndex) {
                        section.classList.add('active');
                    } else if (index < activeIndex) {
                        if (activeIndex - index === 1) {
                            section.classList.add('inactive-left');
                        } else {
                            section.classList.add('far-left');
                        }
                    } else {
                        if (index - activeIndex === 1) {
                            section.classList.add('inactive-right');
                        } else {
                            section.classList.add('far-right');
                        }
                    }
                });
            }

            // Initialize
            initializePositions();
            setupTabClicks();
        });
    </script>
</body>
</html>
